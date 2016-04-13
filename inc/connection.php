<?php
/*
 * Sets Constants for Connection to Database
 * @author 733474
*/

//IP of database server
const IP = "localhost";
//Database name for Lials
const DATABASENAME = "Lials";
//Username to database
const USERNAME = "root";
//Password for the user above
const PASSWORD = "root";


//Queries to create tables in database if there is none there
const CREATEQUERY = "CREATE TABLE IF NOT EXISTS User (
                    Username VARCHAR(100) NOT NULL,
					Password VARCHAR(500) NOT NULL,
					Picture VARCHAR(50),
					Private BOOLEAN NOT NULL,
				    PRIMARY KEY (Username)
				    ); CREATE TABLE IF NOT EXISTS Goal (
				    ID INT AUTO_INCREMENT,
					Goal VARCHAR(100) NOT NULL,
				    Due DATE NOT NULL,
				    Upload DATE NOT NULL,
				    Username VARCHAR(100) NOT NULL,
					Completion BOOLEAN default false,
				    PRIMARY KEY (ID),
					CONSTRAINT UsernameFK FOREIGN KEY (Username) REFERENCES User(Username)
				    ); CREATE TABLE IF NOT EXISTS Comment (
				    ID INT AUTO_INCREMENT,
					Comment VARCHAR(100) NOT NULL,
					GoalID INT NOT NULL,
					Username VARCHAR(100) NOT NULL,
					Upload DATE NOT NULL,
				    PRIMARY KEY (ID),
					CONSTRAINT GoalIDFK FOREIGN KEY (GoalID) REFERENCES Goal(ID)
				    ); CREATE TABLE IF NOT EXISTS Following (
				    Username1 VARCHAR(100) NOT NULL,
				    Username2 VARCHAR(100) NOT NULL,
				    PRIMARY KEY (Username1, Username2),
					CONSTRAINT Username1FK
					FOREIGN KEY (Username1) REFERENCES User(Username),
					CONSTRAINT Username2FK FOREIGN KEY (Username2) REFERENCES User(Username)
				    ); CREATE TABLE IF NOT EXISTS Liked (
				    Username VARCHAR(100) NOT NULL,
				    GoalID INT NOT NULL,
				    PRIMARY KEY (Username, GoalID),
					CONSTRAINT UsernameFK3 FOREIGN KEY (Username) REFERENCES User(Username),
					CONSTRAINT GoalIDFK2 FOREIGN KEY (GoalID) REFERENCES Goal(ID)
				    );";