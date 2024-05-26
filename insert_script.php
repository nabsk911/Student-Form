<?php
require_once "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $faculty = $_POST['faculty'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO students (name, email, phone, faculty, gender) VALUES ('$name', '$email', '$phone', '$faculty', '$gender')";

    if ($conn->query($sql) === TRUE) {
        header("Location: table.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
