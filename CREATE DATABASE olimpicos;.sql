CREATE DATABASE olimpicos;

USE olimpicos;

CREATE TABLE medallas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pais VARCHAR(100),
    oro INT,
    plata INT,
    bronce INT
);