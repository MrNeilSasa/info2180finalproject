/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


Drop database if exists dolphin_crm;
Create database dolphin_crm;
use dolphin_crm;

drop table if exists Users;
create table Users (id INTEGER(20), firstname VARCHAR(20), lastname VARCHAR(20), password VARCHAR(20), email VARCHAR(30), role VARCHAR(20), created_at DATETIME);

drop table if exists Contacts;
create table Contacts (id INTEGER(20), title VARCHAR(20),firstname VARCHAR(20), lastname VARCHAR(20), email VARCHAR(30), telephone VARCHAR(20), company VARCHAR(20), type VARCHAR(30), assigned_to INTEGER(20), created_by INTEGER(20), created_at DATETIME, updated_at DATETIME);

drop table if exists Notes;
create table Notes (id INTEGER(20), contact_id INTEGER(20), comment TEXT(20), created_by DATETIME, created_at DATETIME);

Update Users SET password = SHA('password123') WHERE email = 'admin@project2.com';

INSERT into Users (password, email) values ('password123', 'admin@project2.com');
Insert into Users values (1, "rasss", "clah", "1234", "rasclah@email.com", "fish", "2000-12-12 12:45:00");
Insert into Users values (2, "ras", "clah", "1234", "rasclah@email.com", "fish", "2001-11-12 12:45:00");
Insert into Users values (3, "ras", "clah", "1234", "rasclah@email.com", "fish", "2002-10-12 12:45:00");
Insert into Users values (4, "ras", "clah", "1234", "rasclah@email.com", "fish", "2003-9-12 12:45:00");
Insert into Contacts values (1,"toplane", "ras", "clah", "rasclah@email.com", 1234, "fish LTD","Sales Lead",1 , 2, "2000-11-13 12:45:00",  "2000-12-12 12:45:00");
Insert into Contacts values (2, "jungle", "rass", "clah", "rasclah@email.com", 1234, "fish LTD","Support",2 , 3, "2000-10-14 12:45:00",  "2000-12-12 12:45:00");
Insert into Contacts values (3, "midlane", "rasss","clah", "rasclah@email.com", 1234, "fish LTD","Sales Lead",3 , 4, "2000-9-15 12:45:00",  "2000-12-12 12:45:00");
Insert into Contacts values (4,  "adc", "clah", "rassss", "rasclah@email.com", 1234, "fish LTD","Support",4 , 5, "2000-8-16 12:45:00",  "2000-12-12 12:45:00");
Insert into Contacts values (5, "support", "rassss", "clah", "rasclah@email.com", 1234, "fish LTD","Sales Lead", 5 , 6, "2000-7-17 12:45:00",  "2000-12-12 12:45:00");

UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

