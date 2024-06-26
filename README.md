
Install Xampp or Mysql database

Extract the project folder to a location of your choice

Install composer (Composer require Apache to install - Xampp includes Apache)

Open Command Prompt (CMD)

cd to the project folder

Update the composer by running the following command
composer install or Composer Update
This will Install or Update the Libraries used in the project

Start the Apache and Mysql service on Xampp Conrol panel
Create a database named propertybook (do not create tables)

To generate tables in the database run the following command
php artisan migrate

If there is no .env file compy the .env.example and rename to .env (for database connection)

Start the server by running the following command
php artisan serve

Access the webpage by using the following url on any browser on your computer
http://127.0.0.1:8000
This will access the home page

http://127.0.0.1:8000/admin
This will access the Backend

To login to the Backend use the following credentials
Username        admin
Password        admin


