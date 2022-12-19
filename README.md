# Php Laravel CSS HTML Test

This project was written as part of a Full Stack Developer hiring process.  
The purpose of the project was to evaluate the dev's ability to cope with technologies  
which are completely and utterly foreign to him.  
Time for completion also played a factor.  
Overall, the project took about 1 day to complete.  
  
`The project was written and submitted by Daniel Glencer ` 

## Installation and Setup

1. Install Php ver. 8.1 and Composer ver. 2.4.4
  
2. Configure php.ini file in the php installation dir to the following:  
decomment the following lines by deleting the ";" at the start of each  
extension=pdo_mysql  
extension=openssl  
extension=mbstring  
extension=fileinfo  
extension=gd  
extension=curl  
  
3. From the project dir install dependencies:    
```bash
composer install
```
4. Copy and rename .env.example to .env
```bash
cp .env.example .env 
```
5. Generate key
```bash
php artisan key:generate
```
6. Make sure you have an environmental path to xampp's mysql installation dir
i.e 'C:\xampp\mysql\bin'  
7. Run apache and mysql server (using XAMPP)  
8. Migrate the db's tables (when asked to create the db instance, type => yes)
```bash
php artisan migrate
```
9.Finally run the server and you're all set!
```bash
php artisan serve
```

## Usage
The program requests login,  
after a successful login the user is redirected to the dashboard  
messsages are queried from the database  
and can be viewed in the dashboard  

## Technologies used
The Technologies used are in accordance to the specs given by the hiring company and include:  
Php  
Laravel as framework  
Eloquent as Orm  
Blade as template engine  
Composer as package manager  
Mysql as database  
Html  
Css    

## Notes
I strictly followed the specs requested by the company  
thus it's important to aknowledge the following key features are absent:  
The program lacks authorization  
The messages displayed aren't connected to the authenticated user  
No registeration form and api  
No new messages form and api  

## License
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](/LICENSE.txt)