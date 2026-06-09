-- Jalankan query ini di phpMyAdmin atau MySQL CLI

CREATE DATABASE IF NOT EXISTS modul6;

USE modul6;

CREATE TABLE IF NOT EXISTS users (
    id INT(20) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(20) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Insert user contoh
-- password "admin123" di-enkripsi MD5 = 0192023a7bbd73250516f069df18b500
INSERT INTO users (username, password) VALUES ('admin', MD5('admin123'));
