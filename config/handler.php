<?php
// This is the main database and form handler for the Lucida website
// Handles contact form submissions, database connections, and error logging

// --- IMPORTANT PHP Configuration for Production ---
// Configure PHP error reporting for production environment
ini_set('display_errors', 'Off'); // Do NOT show errors on the web page.
ini_set('log_errors', 'On');     // DO write errors to a log file.

// Define where errors should be logged
// Creates path to error log file in the error_logs directory
$log_file_path = __DIR__ . '/../error_logs/errors.log';

// Ensure the error log directory exists and is writable
// Check if log directory exists, create if necessary
$log_dir = dirname($log_file_path);
if (!is_dir($log_dir)) {
    if (!mkdir($log_dir, 0755, true)) {
        // Fallback error logging to system log
        error_log("CRITICAL: Failed to create log directory for Lucida: " . $log_dir);
    }
}

// Ensure log file is writable
if (!file_exists($log_file_path)) {
    touch($log_file_path);
}
chmod($log_file_path, 0666);

ini_set('error_log', $log_file_path); // Set the path for PHP's error log

// Custom error logging function
// Logs messages with timestamp and severity level to the error log file
function logCustomError($message, $level = 'ERROR') {
    global $log_file_path;
    $timestamp = date('Y-m-d H:i:s');
    $log_message = "[$timestamp] [$level] $message" . PHP_EOL;
    file_put_contents($log_file_path, $log_message, FILE_APPEND | LOCK_EX);
}

// Custom exception handler
// Handles uncaught exceptions and redirects to error page
function handleException($exception) {
    logCustomError("Uncaught exception: " . $exception->getMessage() . " in " . $exception->getFile() . " on line " . $exception->getLine(), 'FATAL');
    header("Location: ../pages/error.php?code=exception&message=" . urlencode("An unexpected error occurred"));
    exit();
}

// Set custom exception handler
set_exception_handler('handleException');

// Custom error handler for fatal errors
// Logs PHP errors and continues normal execution
function handleError($errno, $errstr, $errfile, $errline) {
    logCustomError("PHP Error [$errno]: $errstr in $errfile on line $errline", 'ERROR');
    return false; // Let PHP handle it normally too
}

// Set custom error handler
set_error_handler('handleError');

// --- Database Connection Details ---
// XAMPP default database configuration
$username = 'root';
$password = '';
$host = 'localhost';
$dbname = 'lucida_contact'; // Corrected database name

// XAMPP-specific socket path
$socket = '/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock';

// --- Create Database Connection ---
// Establish connection to MySQL database using mysqli
try {
    // Enable mysqli error reporting
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
    // For XAMPP, we need to specify the socket path
    $conn = new mysqli($host, $username, $password, $dbname, null, $socket);
    
    // Set charset to prevent encoding issues
    $conn->set_charset("utf8");
    
    logCustomError("Database connection successful", 'INFO');
    
} catch (mysqli_sql_exception $e) {
    logCustomError("Database Connection Failed: " . $e->getMessage(), 'FATAL');
    header("Location: ../pages/error.php?code=db_connect_error&message=" . urlencode("Database connection failed"));
    exit();
}

// --- Process Form Submission (Only if it's a POST request) ---
// Handle contact form submissions from both index and contact pages
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        logCustomError("Form submission started", 'INFO');
        
        // --- Determine where to redirect on success or error ---
        // Check which form was submitted to redirect to correct page
        $formSource = $_POST['form_source'] ?? 'contact_page';
        $redirectURL = ($formSource === 'index_form') ? '../index.php' : '../pages/contact.php';

        // --- Sanitize and retrieve form data ---
        // Clean and validate all form inputs to prevent XSS attacks
        $fullName = htmlspecialchars(trim($_POST['fullName'] ?? ''));
        $emailAddress = htmlspecialchars(trim($_POST['emailAddress'] ?? ''));
        $phoneNumber = isset($_POST['phoneNumber']) ? htmlspecialchars(trim($_POST['phoneNumber'])) : null;
        
        // Message is optional for the index form. It won't be set, so default to null.
        $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : null;

        logCustomError("Form data received: Name=$fullName, Email=$emailAddress, Phone=$phoneNumber, Source=$formSource", 'INFO');

        // --- Validate required fields ---
        // Check that essential form fields are not empty
        if (empty($fullName) || empty($emailAddress)) {
            logCustomError("Form validation failed: Missing required fields", 'WARNING');
            header("Location: " . $redirectURL . "?status=error&message=" . urlencode("Please fill in all required fields."));
            exit();
        }

        // The main contact form requires a message
        if ($formSource === 'contact_page' && empty($message)) {
            logCustomError("Form validation failed: Message is required for the main contact form.", 'WARNING');
            header("Location: " . $redirectURL . "?status=error&message=" . urlencode("Please fill in all required fields."));
            exit();
        }
        
        if (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
            logCustomError("Form validation failed: Invalid email format for $emailAddress", 'WARNING');
            header("Location: " . $redirectURL . "?status=error&message=" . urlencode("Invalid email format."));
            exit();
        }

        // --- Prepare SQL Statement for Insertion ---
        // Prepare SQL statement to insert form data into database
        // This statement works for both forms. If $message is null, it will be inserted as NULL.
        $stmt = $conn->prepare("INSERT INTO contact_submissions (full_name, email, phone_number, message, submission_date) VALUES (?, ?, ?, ?, NOW())");

        if ($stmt === false) {
            logCustomError("SQL Prepare failed for contact_submissions: " . $conn->error, 'ERROR');
            header("Location: ../pages/error.php?code=sql_prepare_error&message=" . urlencode("Database preparation error"));
            exit();
        }

        // Note the "s" for phoneNumber and message now. 'b' is for blobs, 's' for strings.
        // bind_param handles NULL values correctly when the type is 's'.
        $stmt->bind_param("ssss", $fullName, $emailAddress, $phoneNumber, $message);

        if ($stmt->execute()) {
            logCustomError("Form submission successful for $emailAddress", 'INFO');
            header("Location: " . $redirectURL . "?status=success");
        } else {
            logCustomError("SQL Execute failed for contact_submissions: " . $stmt->error, 'ERROR');
            header("Location: ../pages/error.php?code=sql_execute_error&message=" . urlencode("Database execution error"));
        }

        $stmt->close();
        
    } catch (Exception $e) {
        logCustomError("Exception in form processing: " . $e->getMessage(), 'FATAL');
        header("Location: ../pages/error.php?code=form_exception&message=" . urlencode("Form processing error"));
        exit();
    }
}

// --- Close the Database Connection ---
// Clean up database connection when processing is complete
if (isset($conn)) {
    $conn->close();
    logCustomError("Database connection closed", 'INFO');
}

// Add a test error for debugging (remove this in production)
// Uncomment the line below to test error logging
// trigger_error("Test error for debugging - handler loaded successfully", E_USER_NOTICE);

?>
