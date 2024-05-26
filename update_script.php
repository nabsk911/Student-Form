<?php
require_once "db_conn.php";

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result = $conn->query("SELECT * FROM students WHERE id=$id") or die($conn->error);

    if ($result->num_rows > 0) {
        $row = $result->fetch_array();
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $faculty = $row['faculty'];
        $gender = $row['gender'];
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $faculty = $_POST['faculty'];
    $gender = $_POST['gender'];

    $conn->query("UPDATE students SET name='$name', email='$email', phone='$phone', faculty='$faculty', gender='$gender' WHERE id=$id") or die($conn->error);

    header("Location: table.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
</head>
<body>
    <form action="update_script.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div>
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $name; ?>" required>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $email; ?>" required>
        </div>
        <div>
            <label>Phone:</label>
            <input type="text" name="phone" value="<?php echo $phone; ?>" required>
        </div>
        <div>
            <label>Faculty:</label>
            <input type="text" name="faculty" value="<?php echo $faculty; ?>" required>
        </div>
        <div>
            <label>Gender:</label>
            <input type="text" name="gender" value="<?php echo $gender; ?>" required>
        </div>
        <div>
            <button type="submit" name="update">Update</button>
        </div>
    </form>
</body>
</html>
