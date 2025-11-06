<?php
// db.php - updated for mysqli (PHP 5.6+)
class DB {
    var $conn;

    function DB() {
        $this->conn = mysqli_connect("db", "root", "root", "studentdb");
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    function query($sql) {
        return mysqli_query($this->conn, $sql);
    }

    function fetch($result) {
        return mysqli_fetch_assoc($result);
    }

    function close() {
        mysqli_close($this->conn);
    }
}
?>
