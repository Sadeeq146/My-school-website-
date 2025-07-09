-- sql-dump.sql
CREATE DATABASE IF NOT EXISTS school;
USE school;

CREATE TABLE students (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  guardian VARCHAR(100),
  phone VARCHAR(20),
  email VARCHAR(100),
  address TEXT
);