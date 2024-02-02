<?php
    // Database connection

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_registration";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
   

    $sql = "INSERT INTO messages (name_student, email, messages) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Form Submitted Successfully</h2>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    header("Location: CountactUs.html");
    exit();
}

$conn->close();
?>
