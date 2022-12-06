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
create table Notes (id INTEGER(20), contact_id INTEGER(20), comment TEXT(20), created_by INTEGER(20), created_at DATETIME);

Update Users SET password = SHA('password123') WHERE email = 'admin@project2.com';

INSERT into Users (password, email) values ('password123', 'admin@project2.com');

ALTER TABLE Contacts MODIFY COLUMN updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;

Insert into Users(firstname, lastname, password, email, role) values ("Jan ", "Levinson", "J@nL3vin", "jan.levinson@paper.co", "Member");
Insert into Users(firstname, lastname, password, email, role) values ("David ", "Wallace", "W@11@c3D", "david.wallace@paper.co", "Admin");
Insert into Users(firstname, lastname, password, email, role) values ("Andy ", "Bernard", "IamB3n@rd", "andy.bernard@paper.co", "Member");
Insert into Users(firstname, lastname, password, email, role) values ("Darryl ", "Philbin", "D@rry1Phi11", "darryl.philbin@paper.com", "Member");
Insert into Users(firstname, lastname, password, email, role) values ("Erin ", "Hannon", "H@nn0nErin", "erin.hannon@paper.co", "Member");
Insert into Contacts(title, firstname, lastname, email, telephone, company, type, assigned_to) values ("Mr.", "Michael", "Scott", "michael.scott@paper.co", "876-123-1230", "The Paper Company","Sales Lead", "Erin");
Insert into Contacts(title, firstname, lastname, email, telephone, company, type, assigned_to) values ("Mr.", "Dwight", "Shrute", "dwight.shrute@paper.co", "876-123-1231", "The Paper Company","Support", "Jan");
Insert into Contacts(title, firstname, lastname, email, telephone, company, type, assigned_to) values ("Ms.", "Pam","Beesley", "pam.beesley@dunder.co", "876-123-1232", "Dunder Mifflin","Support","Andy");
Insert into Contacts(title, firstname, lastname, email, telephone, company, type, assigned_to) values ("Ms.", "Angela", "Martin", "angela.martin@vance.co", "876-123-1233", "Vance Refrigeration","Sales Lead","Jan");
Insert into Contacts(title, firstname, lastname, email, telephone, company, type, assigned_to) values ("Ms.", "Kelly", "Kapoor", "kelly.kapoor@vance.co", "876-123-1234", "Vance Refrigeration", "Support", "David");
Insert into Contacts(title, firstname, lastname, email, telephone, company, type, assigned_to) values ("Mr.", "Jim", "Halpert", "jim.halpert@dunder.co", "876-123-1235", "Dunder Mifflin", "Sales Lead", "Darryl");


UPDATE Contacts SET created_by = (SELECT u.id from Users u WHERE u.firstname = Contacts.assigned_to);
DELETE FROM Contacts WHERE firstname IS NULL;
DELETE FROM Users WHERE email IS NULL;
