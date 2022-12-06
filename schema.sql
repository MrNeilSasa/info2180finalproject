

Drop database if exists dolphin_crm;
Create database dolphin_crm;
use dolphin_crm;

drop table if exists Users;
create table Users (id INTEGER(20) NOT NULL AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(20), lastname VARCHAR(20), password VARCHAR(20), email VARCHAR(30), role VARCHAR(20), created_at DATETIME);

drop table if exists Contacts;
create table Contacts (id INTEGER(20) NOT NULL AUTO_INCREMENT Primary KEY, title VARCHAR(20),firstname VARCHAR(20), lastname VARCHAR(20), email VARCHAR(30), telephone VARCHAR(20), company VARCHAR(20), type VARCHAR(30), assigned_to INTEGER(20), created_by INTEGER(20), created_at DATETIME, updated_at DATETIME);

drop table if exists Notes;
create table Notes (id INTEGER(20) NOT NULL AUTO_INCREMENT Primary KEY, contact_id INTEGER(20), comment TEXT(20), created_by DATETIME, created_at DATETIME);

Update Users SET password = SHA('password123') WHERE email = 'admin@project2.com';

INSERT into Users (password, email) values ('password123', 'admin@project2.com');
Insert into Users(firstname, lastname, password, email, role, created_at) values ("Kai", "sa", "1234", "kaisa@email.com", "void", "2000-12-12 12:45:00");
Insert into Users(firstname, lastname, password, email, role, created_at) values ("jhin", "curtaincall", "1234", "jhin@email.com", "Ranger/Mage", "2001-11-12 12:45:00");
Insert into Users(firstname, lastname, password, email, role, created_at) values ("Talon", "walljump", "1234", "talon@email.com", "assassin", "2002-10-12 12:45:00");
Insert into Users(firstname, lastname, password, email, role, created_at) values ("Ornn", "Frejlord", "1234", "ornn@email.com", "tank", "2003-9-12 12:45:00");
Insert into Contacts(title, firstname, lastname, email, telephone, company, type, assigned_to, created_by, created_at, updated_at) values ("toplane", "sosuke", "aizen", "aizen@email.com", 1234, "soulsociety","SalesLead",1 , 2, "2000-11-13 12:45:00",  "2000-12-12 12:45:00");
Insert into Contacts(title, firstname, lastname, email, telephone, company, type, assigned_to, created_by, created_at, updated_at) values ("jungle", "Itachi", "uchiha", "Itachi@email.com", 1234, "uchihaclan","SalesLead",2 , 3, "2000-10-14 12:45:00",  "2000-12-12 12:45:00");
Insert into Contacts(title, firstname, lastname, email, telephone, company, type, assigned_to, created_by, created_at, updated_at) values ("midlane", "killua","zoldyck", "rasclah@email.com", 1234, "huntersassociation","Support",3 , 4, "2000-9-15 12:45:00",  "2000-12-12 12:45:00");
Insert into Contacts(title, firstname, lastname, email, telephone, company, type, assigned_to, created_by, created_at, updated_at) values ("adc", "gojo", "satoru", "satoru@email.com", 1234, "hunters","Support",4 , 5, "2000-8-16 12:45:00",  "2000-12-12 12:45:00");
Insert into Contacts(title, firstname, lastname, email, telephone, company, type, assigned_to, created_by, created_at, updated_at) values ("support", "tensa", "zangetsu", "zangetsu@email.com", 1234, "bleach", "SalesLead", 5 , 6, "2000-7-17 12:45:00",  "2000-12-12 12:45:00");


