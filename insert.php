<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "student_db";

// Connect to MySQL
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from HTML form
$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];

// Insert data
$sql = "INSERT INTO students (name, email, course)
        VALUES ('$name', '$email', '$course')";

if ($conn->query($sql) === TRUE) {
    echo "Student registered successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>
