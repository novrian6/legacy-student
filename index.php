<?php
include("Student.php");
$student = new Student();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student->addStudent($_POST['name'], $_POST['email'], $_POST['grade']);
    echo "<p>Student added successfully!</p>";
}

$result = $student->getAllStudents();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Management (Legacy)</title>
</head>
<body>
<h2>Add New Student</h2>
<form method="POST" action="">
    Name: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    Grade: <input type="text" name="grade"><br>
    <input type="submit" value="Add Student">
</form>

<h2>Student List</h2>
<table border="1" cellpadding="5">
    <tr><th>ID</th><th>Name</th><th>Email</th><th>Grade</th></tr>
    <?php while($row = mysql_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['grade'] ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
