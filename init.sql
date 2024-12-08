CREATE DATABASE IF NOT EXISTS pres;
CREATE USER IF NOT EXISTS 'konstantin'@'%' IDENTIFIED BY '54321';
GRANT SELECT,UPDATE,INSERT ON pres.* TO 'konstantin'@'%';
FLUSH PRIVILEGES;
USE `pres`;
CREATE TABLE IF NOT EXISTS presidents (
surname VARCHAR (40) NOT NULL,
name VARCHAR (20) NOT NULL,
second_name VARCHAR (40) NOT NULL,
year_of_birth VARCHAR (20) NOT NULL
);
INSERT INTO presidents (surname, name, second_name, year_of_birth)
VALUES
('Yeltsin', 'Boris', 'Nikolaevich', '1931'),
('Putin', 'Vladimir', 'Vladimirovich', '1952'),
('Medvedev', 'Dmitriy', 'Anatolyevich', '1965');
