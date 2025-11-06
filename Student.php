<?php
// Legacy student class (object style but not modern OOP)
include("db.php");

class Student {
    var $db;

    function Student() {
        $this->db = new DB();
    }

    function addStudent($name, $email, $grade) {
        $sql = "INSERT INTO students (name, email, grade) VALUES ('$name', '$email', '$grade')";
        return $this->db->query($sql);
    }

    function getAllStudents() {
        $sql = "SELECT * FROM students";
        return $this->db->query($sql);
    }
}
?>
