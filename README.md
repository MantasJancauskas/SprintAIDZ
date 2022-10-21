# Content management system - CMS

- project was made using PHP and SQL;
- (installation process explained below);

# About

## Project:

- PHP/SQL Content management system;;

## Tasks to be done:

- to create a database scheme;
- to create a PHP app which will print data from database into the browser;
- ability to DELETE pages and content;
- ability to ADD pages and content;
- ability to UPDATE tables;

# Installation process

## To install this project you will need: Git bash, XAMPP, and MySQL Workbench.

- create an empty fresh folder on e.g. Desktop;
- open that folder e.g. via VSCode editor;
- clone my project using this link: `git clone https://github.com/MantasJancauskas/SprintAIDZ`;
- place the folder you cloned before into `xampp/htdocs/` directory;
- open MySQL Workbench and create database named `mydb`;
- in the tool bar inside Workbench choose `Server -> Data import`;
- then in data import tab you need to do these steps:

* Import from Self-Containet File (choose:'your path'/mydb.sql) -> Default target schema (new - "mydb") -> Start Import;
* relaod schema for tables to appear;

- run XAMPP. Start Apache and MySQL;
- opne browser and type `localhost/SprintAIDZ/`.