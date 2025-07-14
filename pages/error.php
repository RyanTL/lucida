<!-- This is the error page that displays user-friendly error messages -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Something Went Wrong</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding: 50px; background: #f5f5f5; }
        .error-container { max-width: 600px; margin: 0 auto; background: #ffffff; border: 1px solid #ddd; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #cc0000; margin-bottom: 20px; }
        p { color: #333; margin-bottom: 15px; line-height: 1.6; }
        .error-code { background: #f8f8f8; padding: 10px; border-radius: 4px; font-family: monospace; margin: 15px 0; }
        .error-message { background: #ffeaa7; padding: 15px; border-radius: 4px; margin: 15px 0; border-left: 4px solid #fdcb6e; }
        a { color: #007bff; text-decoration: none; padding: 10px 20px; display: inline-block; margin: 5px; background: #f8f9fa; border-radius: 4px; border: 1px solid #dee2e6; }
        a:hover { text-decoration: underline; background: #e9ecef; }
        .btn-home { background: #007bff; color: white; }
        .btn-home:hover { background: #0056b3; color: white; text-decoration: none; }
    </style>
</head>
<body>
    <!-- Main error container with styling -->
    <div class="error-container">
        <h1>Oops! Something Went Wrong.</h1>
        
        <?php
        // Get error information from URL parameters
        $errorCode = $_GET['code'] ?? 'unknown';
        $errorMessage = $_GET['message'] ?? '';
        
        // Log the error page visit for tracking purposes
        $logFile = __DIR__ . '/../error_logs/errors.log';
        $timestamp = date('Y-m-d H:i:s');
        $logMessage = "[$timestamp] [ERROR_PAGE] Error page accessed with code: $errorCode" . ($errorMessage ? ", message: $errorMessage" : "") . PHP_EOL;
        file_put_contents($logFile, $logMessage, FILE_APPEND | LOCK_EX);
        
        // Display appropriate error message based on error code
        switch($errorCode) {
            case 'db_connect_error':
                echo '<p>We\'re experiencing technical difficulties with our database connection. We apologize for the inconvenience.</p>';
                break;
            case 'sql_prepare_error':
                echo '<p>There was an issue preparing your request. Please try again later.</p>';
                break;
            case 'sql_execute_error':
                echo '<p>There was an issue processing your request. Please try again later.</p>';
                break;
            case 'form_exception':
                echo '<p>There was an unexpected error processing your form. Please try again.</p>';
                break;
            case 'exception':
                echo '<p>An unexpected system error occurred. Please try again later.</p>';
                break;
            default:
                echo '<p>We\'re experiencing technical difficulties. We apologize for the inconvenience.</p>';
                break;
        }
        ?>
        
        <!-- Display detailed error message if provided -->
        <?php if ($errorMessage): ?>
            <div class="error-message">
                <strong>Details:</strong> <?php echo htmlspecialchars($errorMessage); ?>
            </div>
        <?php endif; ?>
        
        <!-- Display error code for technical reference -->
        <div class="error-code">
            Error Code: <?php echo htmlspecialchars($errorCode); ?>
        </div>
        
        <!-- Reassurance message and recovery options -->
        <p>Our team has been notified and is working to fix the problem. Please try again in a few moments.</p>
        
        <!-- Navigation options for user recovery -->
        <p>
            <a href="/Lucida/pages/contact.php">Try Contact Form Again</a>
            <a href="/Lucida/index.php" class="btn-home">Go to Homepage</a>
        </p>
    </div>
</body>
</html>