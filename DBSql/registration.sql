-- Student Name: Johny Ramos
-- Course: T054 - Computer System Management
-- Module: Web Application
-- Lecturer: Robert Smith

-- SQL File

CREATE DATABASE registration;

USE registration;

CREATE TABLE registration (
    ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	email VARCHAR(50) NOT NULL,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    age INT(3),
    password VARCHAR(30) NOT NULL
);

SELECT * FROM registration;