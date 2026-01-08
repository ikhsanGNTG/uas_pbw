
CREATE DATABASE IF NOT EXISTS dbminecraft;
USE dbminecraft;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

INSERT INTO users (username, password)
VALUES ('aku', '123');
