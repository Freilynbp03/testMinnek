<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
    $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
    $phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
    $message = mysqli_real_escape_string($conn, $_REQUEST['message']);

$sql = "INSERT INTO Contact (name, email, phone, message)
VALUES ('$name', '$email', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

return header("Location: index.php");
echo 'test';
