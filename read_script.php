<?php
require_once "db_conn.php";

$fetchedData = array();

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $fetchedData[] = $row;
    }
}
?>
