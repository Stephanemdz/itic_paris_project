CREATE TABLE user(
id_user INT PRIMARY KEY AUTO_INCREMENT, 
is_admin BOOLEAN DEFAULT 0, 
is_trainer BOOLEAN, 
firstname VARCHAR(100) NOT NULL, 
lastname VARCHAR(100)NOT NULL, 
birthdate DATE NOT NULL, 
email VARCHAR(100) NOT NULL, 
password VARCHAR(100) NOT NULL,
created_at DATE, 
updated_at DATE,
deleted_at DATE);

CREATE TABLE contract (
id_contract INT PRIMARY KEY AUTO_INCREMENT,
type VARCHAR(100) NOT NULL,
start_date DATE NOT NULL,
file VARCHAR(100) NOT NULL,
created_at DATE,
updated_at DATE,
deleted_at DATE);

CREATE TABLE mission(
id_mission INT PRIMARY KEY AUTO_INCREMENT, 
title VARCHAR(100) NOT NULL,
description TEXT NOT NULL, 
created_at DATE, 
updated_at DATE,
deleted_at DATE);