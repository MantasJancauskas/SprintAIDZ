# Content management system - CMS

- Project was made using PHP and SQL;
- (installation process explained below);

# About

## Project:

- PHP/SQL Content management system;;

## Tasks to be done:

- To create a database scheme;
- To create a PHP app which will print data from database into the browser;
- Ability to DELETE pages and content;
- Ability to ADD pages and content;
- Ability to UPDATE tables;

# Installation process

## To install this project you will need: Git bash, XAMPP, and MySQL Workbench.

- Create an empty fresh folder on e.g. Desktop;
- Open that folder e.g. via VSCode editor or your terminam CMD;
- Clone my project using this link: `git clone https://github.com/MantasJancauskas/SprintAIDZ`;
- Place the folder you cloned before into `xampp/htdocs/` directory;
- Open MySQL Workbench and create database named `mydb`;
- In the tool bar inside Workbench choose `Server -> Data import`;
- Then in data import tab you need to do these steps:

* Import from Self-Containet File (choose:'your path'/mydb.sql) -> Default target schema (new - "mydb") -> Start Import;
* Reload schema for tables to appear;

- Run XAMPP. Start Apache and MySQL;
- Open browser and type `localhost/SprintAIDZ/`.