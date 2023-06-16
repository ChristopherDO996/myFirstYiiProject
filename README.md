# myFirstYiiProject
That's my first Yii proyect which consists in a typical CRUD of user and products with a login.

## Requirements
- PHP 5.4+
- Yii Framework 1.1+
- Apache 2.4 / XAMPP / MAMP / WampServer
- PhpMyAdmin / DBeaver / another one

## Structure
### pruebaTenica
This is the main project wich is based in MVC architecture. Conatins the models, controllers and views necessary for the CRUD project.
### yii
This is the framework wich contains the structure, modules, libraries and necessary files to create projects.

## Conventions
This project contains *lowerCamelCase* for convention of PHP variables and *snake_case* for convention of Mysql Tables

## Steps for cloning and deployment in an environment local
1. Install/Start your Apache Server in your develop environment.
2. Get a Github account to have access to that repository
3. You can use Github Desktop, Sublime Merge, Gitlab or another tool to clone faster that repository or if you prefer, you can use "git init" and "git clone" with the respective structure in your git bash positioned in your develop carpet (generally, if you're working with xampp or another service, you have to be in *htdocs* carpet).
4. Go to your PhpMyAdmin and migrate Database contained in the main repository (his name is "test.db").
5. If is necessary, go to *pruebaTecnica/protected/config/database.php* and set the information of your DB Profile.
6. After that, you're ready to make your first Commit.
7. Enter to *localhost/pruebaTecnica/* to view the project realized and start to work.

## Additional
- You can use module Gii to create a complete CRUD, but you have to activate it in config/main.php
- In addition, you can create an IP local with your server and direction it to your project cloned.
- That project have many areas to increasing but is a nice way to start with Yii Framework.
- Yii 1.1 is being obsolet because PHP is letting to mantein olvd versions of PHP, so Yii 2 is the best way to start with that Framework.

## Captures
### Home
![image](https://github.com/ChristopherDO996/myFirstYiiProject/assets/78398245/6ad7e49d-2073-425e-9d2b-29be52689e4b)

### Products
![image](https://github.com/ChristopherDO996/myFirstYiiProject/assets/78398245/34a57e38-5ba5-4f37-ac10-ed79e74ad687)
![image](https://github.com/ChristopherDO996/myFirstYiiProject/assets/78398245/f03b76f9-cc3d-4203-a073-7de91427a0d4)
![image](https://github.com/ChristopherDO996/myFirstYiiProject/assets/78398245/98ba311a-2cdb-4986-be4d-71f9f4e678ef)
![image](https://github.com/ChristopherDO996/myFirstYiiProject/assets/78398245/afc9008d-d0f2-45eb-a23f-f8317d0ad679)

### Users
![image](https://github.com/ChristopherDO996/myFirstYiiProject/assets/78398245/749f1b78-d514-4ca9-9fe0-34558e1ad2f5)
![image](https://github.com/ChristopherDO996/myFirstYiiProject/assets/78398245/291798b0-76ee-4dca-b729-0fdfa94f38fe)

### Login
![image](https://github.com/ChristopherDO996/myFirstYiiProject/assets/78398245/de53019d-fa0e-4682-8552-721cc78d1661)
![image](https://github.com/ChristopherDO996/myFirstYiiProject/assets/78398245/28af5745-d0b4-4e10-ac42-9cc265c5fcf8)

## End
### Thank you for the opportunity, I hope to get notices about yo
