<?php
require_once 'dbConnection.php';

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];

$sql = "INSERT INTO students (name, age, email) VALUES ('$name', '$age', '$email')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>