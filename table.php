<?php
require_once "db_conn.php";
include ('delete_script.php');
include ('read_script.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Faculty</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
        <?php
        if (count($fetchedData) > 0) {
            $counter = 1;
            foreach ($fetchedData as $data) {
                ?>
                <tr>
                    <td><?php echo $counter; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['phone']; ?></td>
                    <td><?php echo $data['faculty']; ?></td>
                    <td><?php echo $data['gender']; ?></td>
                    <td>
                        <a href="update_script.php?edit=<?php echo $data['id']; ?>">Edit</a>
                        <a href="delete_script.php?delete=<?php echo $data['id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php
                $counter++;
            }
        } else {
            echo '<tr><td colspan="7">No Data Available!!!</td></tr>';
        }
        ?>
    </table>
    <button><a href="add.php">Add</a></button>
</body>
</html>
