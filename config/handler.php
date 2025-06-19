<?php 

//--database connection--
$username = 'root';
$password = '';
$host = 'localhost';
$dbname = 'lucida';

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn->onnect_error) {
    die("connection failed: ".$conn->connect_error);

}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phoneNumber'];
    $message = $_POST['message'];

    if (empty($name) || empty($email) || empty($message)) {
        header("Location: /Lucida/pages/contact.php?status=error");
        exit();
    }

    IF (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: /Lucida/pages/contact.php?status=error&message=Invalid email format");
        exit();
    }

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("INSERT INTO contact_form (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $message);

    if ($stmt->execute()) {
        header("Location: /Lucida/pages/contact.php?status=success");
    } else {
        header("Location: /Lucida/pages/contact.php?status=error");
    }

    $stmt->close();
}
$conn->close();
?>