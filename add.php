<?php
include("Student.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student = new Student();
    $student->addStudent($_POST['name'], $_POST['email'], $_POST['grade']);
    header("Location: index.php");
}
?>
