<?php
require_once "db_conn.php";

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM students WHERE id=$id") or die($conn->error);

    header("Location: table.php");
}
?>
