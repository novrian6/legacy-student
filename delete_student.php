<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $query = "DELETE FROM students WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    header("Location: index.php");
    exit();
}
?>
