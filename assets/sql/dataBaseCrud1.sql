DROP DATABASE IF EXISTS crud1;
CREATE DATABASE crud1;

USE crud1;

CREATE TABLE data(
    id int not null auto_increment primary key,
    emailSent varchar(50) not null,
    passwordSent varchar(8) not null,
    name varchar(15) not null,
    lastName varchar(20) not null,
    address varchar(30) not null,
    city varchar(20) not null,
    state varchar(25) not null,
    CEP int(15) not null
);

CREATE TABLE movies(
    id int not null auto_increment primary key,
    linkMovie varchar(30) not null,
    title varchar(25) not null

);

CREATE TABLE series(
    id int not null auto_increment primary key,
    linkSeries varchar(30) not null,
    title varchar(25) not null

);