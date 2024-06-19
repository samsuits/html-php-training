<?php
include 'db-connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Update the database with the submitted data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $semester = $_POST['semester'];
    $mobileno = $_POST['mobileno'];
    $address = $_POST['address'];

    $updateSql = "UPDATE student SET name=?, gender=?, semester=?, mobileno=?, address=? WHERE id=?";
    $stmt = $conn->prepare($updateSql);
    $stmt->bind_param("sssssi", $name, $gender, $semester, $mobileno, $address, $id);
    $stmt->execute();
    $stmt->close();
}
 
$sql = "SELECT * FROM student;";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editable Table</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Semester</th>
            <th>Mobileno</th>
            <th>Address</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php foreach($result as $row): ?>
            <tr>
                <form method="POST">
                    <td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
                    <td><input type="text" name="gender" value="<?php echo $row['gender']; ?>"></td>
                    <td><input type="number" name="semester" value="<?php echo $row['semester']; ?>"></td>
                    <td><input type="number" name="mobileno" value="<?php echo $row['mobileno']; ?>"></td>
                    <td><input type="text" name="address" value="<?php echo $row['address']; ?>"></td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button type="submit">Save</button>
                    </td>
                </form>
                <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
