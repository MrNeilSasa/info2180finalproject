Drop database if exists dolphin_crm;
Create database dolphin_crm;
use dolphin_crm;

drop table if exists Users;
create table Users (
    id INTEGER (20) NOT NULL AUTO_INCREMENT, 
    firstname VARCHAR(20), lastname VARCHAR(20), 
    password VARCHAR(20), email VARCHAR(30), 
    role VARCHAR(20), created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP(),
    PRIMARY KEY (id)
    )AUTO_INCREMENT = 1000;

drop table if exists Contacts;
create table Contacts (
id INTEGER(20) NOT NULL AUTO_INCREMENT, 
title VARCHAR(20),firstname VARCHAR(20), 
lastname VARCHAR(20), email VARCHAR(30), 
telephone VARCHAR(20), company VARCHAR(20), type VARCHAR(20),  
assigned_to VARCHAR(20), created_by INTEGER(20), 
created_at DATETIME NOT NULL DEFAULT NOW(),
updated_at DATETIME NOT NULL DEFAULT NOW(),
PRIMARY KEY (id)
);

drop table if exists Notes;
create table Notes (id INTEGER(20), contact_id INTEGER(20), comment TEXT(20), created_by DATETIME, created_at DATETIME);

Update Users SET password = SHA('password123') WHERE email = 'admin@project2.com';

INSERT into Users (password, email) values ('password123', 'admin@project2.com');

ALTER TABLE Contacts MODIFY COLUMN updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;
