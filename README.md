<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

Hi, This project has been created with Laravel 9x framework.

## Setup Project

### You need to download this project your to local machine using this command or you can download zip file.

    git clone https://github.com/Hlife97/ATM-system-api-task.git

### Composer installation

    composer install

### Setup MySql database, create mysql database. After that migrate all migrations.

    php artisan migrate

### You need to create some categories manually, in order to do that you need to run seeder command

    php artisan db:seed --class=UserSeeder

### Done! You can run this project

    php artisan serve

### withdraw post request 200 OK result

<img width="862" alt="Screenshot 2023-11-27 at 00 31 05" src="https://github.com/Hlife97/ATM-system-api-task/assets/16389174/7b4dbe3a-0e10-432c-8d51-e1b030fd186f">

### withdraw post request 200 OK, Not enough funds
<img width="865" alt="Screenshot 2023-11-27 at 00 33 06" src="https://github.com/Hlife97/ATM-system-api-task/assets/16389174/8ad434ab-e503-4a2a-aa76-71dc25811b62">

### transaction delete request 200 OK
<img width="898" alt="Screenshot 2023-11-27 at 00 30 51" src="https://github.com/Hlife97/ATM-system-api-task/assets/16389174/b6f4d22a-18ac-485e-a781-fc16168469d5">

### transaction delete request 404 Not Found
<img width="855" alt="Screenshot 2023-11-27 at 00 32 04" src="https://github.com/Hlife97/ATM-system-api-task/assets/16389174/4d831231-36ae-4bfe-ab0d-f7b3231db0bd">

Have a nice day!
