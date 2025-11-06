CREATE DATABASE IF NOT EXISTS studentdb;
USE studentdb;

CREATE TABLE students (
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(100),
    email VARCHAR(100),
    grade VARCHAR(5),
    PRIMARY KEY (id)
);
