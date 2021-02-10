# Laravel project
This laravel project  allows you to create/delete or update clients or email templates. Also in the future i will add the ability to send emails.

## How to run
- Install ampps/wamp/xampp, MySQL and MySQL Workbench in your computer. If you don't know how to install 'ampps', 'MySQL Workbench' or 'MySQL' follow this links: 
- <a href="https://www.ampps.com/wiki/Install">Ampps download</a>;
- <a href="https://dev.mysql.com/downloads/installer/">MySQL download</a>;
- <a href="https://dev.mysql.com/downloads/workbench/">MySQL Workbench download</a>;

- Run ampps/wamp/xampp. 

- Download or clone this repository. 

- Extract downloaded files and move to 'C:/Program Files/Ampps/www'. 

- Run MySQL Workbench. Then create new MySQL connections and insert EMAIL_Dump.sql file.

-In 'C:/Program Files/Ampps/www' create file '.htaccess' and write in it :

                <IfModule mod_rewrite.c>
                RewriteEngine On
                RewriteRule ^(.*)$ email-master/public/$1 [L]
                </IfModule>
- Open VS studio or Atom. Copy all text from '.env.example' and paste it in the new file with name '.env'. Don't forget to write DB_PASSWORD.

                DB_CONNECTION=mysql
                DB_HOST=127.0.0.1
                DB_PORT=3306
                DB_DATABASE=laravel
                DB_USERNAME=root
                DB_PASSWORD=mysql
                
- Then install composer and doctrine/orm. If you have it in your computer, then in terminal just write 'php ../composer.phar require  doctrine/orm

- Last step write in terminal 'php artisan key:generate' and 'php artisan migrate'

- Go to browser using this link: http://localhost/
