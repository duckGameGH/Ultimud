<?php
header("Location: ../../registrationSuccess.html");

$serverName = "localhost";
$serverUsername = "legend";
$serverPassword = "78mb63qAAd";
$dbName = "legend_db";

$conn = new mysqli($serverName, $serverUsername, $serverPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected succesfully<br>";

$userUsername = $_POST['username'];
$userEmail = $_POST['email'];
$userPassword = $_POST['password'];

$sql = "INSERT INTO user (username, email, password) VALUES ('$userUsername', '$userEmail', '$userPassword')";

if ($conn->query($sql) === TRUE) {
    echo "Registered new user successfully";
}

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
