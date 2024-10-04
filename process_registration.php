<?php
// Error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = "toor123"; // Replace with your MySQL password
$dbname = "alhikma"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$fullName = $_POST['name'];
$email = $_POST['email'];
$whatsapp = $_POST['whatsapp'];
$country = $_POST['country'];

// Check for duplicate email
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Email already registered
    header("Location: registration.php?error=duplicate");
    exit();
} else {
    // Insert new user
    $stmt = $conn->prepare("INSERT INTO users (fullName, email, whatsapp, country) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fullName, $email, $whatsapp, $country);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    
    // Redirect to a success page or show a success message
    header("Location: success.php");
    exit();
}
?>
