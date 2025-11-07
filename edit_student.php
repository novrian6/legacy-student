<?php
include 'db.php';

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$id = (int) $_GET['id'];

// Ambil data lama
$result = mysqli_query($conn, "SELECT * FROM students WHERE id = $id");
$student = mysqli_fetch_assoc($result);

if (!$student) {
    echo "Data tidak ditemukan.";
    exit();
}

// Update data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $major = mysqli_real_escape_string($conn, $_POST['major']);

    $update = "UPDATE students SET name='$name', email='$email', major='$major' WHERE id=$id";
    if (mysqli_query($conn, $update)) {
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
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Edit Mahasiswa</h1>
    <form method="post" action="">
        <label>Nama:</label><br>
        <input type="text" name="name" value="<?= htmlspecialchars($student['name']) ?>" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="<?= htmlspecialchars($student['email']) ?>" required><br><br>

        <label>Jurusan:</label><br>
        <input type="text" name="major" value="<?= htmlspecialchars($student['major']) ?>" required><br><br>

        <button type="submit">Update</button>
        <a href="index.php" class="button">Batal</a>
    </form>
</body>
</html>
