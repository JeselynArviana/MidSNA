CREATE DATABASE Redlock;

USE Redlock

CREATE TABLE users (
    ID INT PRIMARY KEY,
    Nama VARCHAR(50),
    Alamat VARCHAR(50),
    Jabatan VARCHAR(50)
);

INSERT INTO users VALUES
(1001, 'Abigail', 'Pasir Kaliki 3', 'Front-End Developer'),
(1002, 'Nathasya', 'Sukajadi 104', 'Senior IT Consultant'),
(1003, 'Darien', 'Cimahi 47', 'Project Manager'),
(1004, 'Michaela', 'TKI 2 Blok D3', 'Software Engineer'),
(1005, 'Kentrio', 'Cibaduyut Lama 1', 'Excecutive Manager');