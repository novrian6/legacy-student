<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $major = mysqli_real_escape_string($conn, $_POST['major']);

    $query = "INSERT INTO students (name, email, major) VALUES ('$name', '$email', '$major')";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Tambah Mahasiswa</h1>
    <form method="post" action="">
        <label>Nama:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Jurusan:</label><br>
        <input type="text" name="major" required><br><br>

        <button type="submit">Simpan</button>
        <a href="index.php" class="button">Kembali</a>
    </form>
</body>
</html>
