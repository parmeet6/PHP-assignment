CREATE DATABASE if not exists EmploymentAgency;
use EmploymentAgency;

CREATE TABLE if not exists users (
    fname VARCHAR(50),
    lname VARCHAR(50),
    email VARCHAR(100),
    contact VARCHAR(15),
    address VARCHAR(255),
    city VARCHAR(50),
    state VARCHAR(50),
    zip VARCHAR(10),
    availability VARCHAR(50),
    password VARCHAR(255)
);

select * from users;
