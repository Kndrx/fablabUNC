### NEEDED FOR PROJECT 

[Php >8.0](https://www.php.net/downloads.php)
[Mysql](https://dev.mysql.com/downloads/installer/)
[Nodejs](https://nodejs.org/en/download)
[Composer](https://getcomposer.org/download/)

## INSTALL PROJECT

**npm install**

**composer install**

## DATABASE

Create a new Database named : ***fablab*** in mysql

Sql request : ***CREATE DATABASE fablab***

## Migrate database and seed :

Run this command ***php artisan migrate:fresh --seed***

## CSS/SCSS

To compile scss to css, run this command ***npm run watch***

## To launch the application

Copy the file **.env.example** and create a new file named ***.env*** and paste all the code in.
Change your access to your database.

The database connection is :

DB_HOST= **127.0.0.1** \
DB_PORT= **3306** \
DB_DATABASE= **fablab** \
DB_USERNAME= **root** \
DB_PASSWORD= **root** 

Run the artisan command **php artisan serve**

Default url : 127.0.0.1:3306

username : admin
Password : test