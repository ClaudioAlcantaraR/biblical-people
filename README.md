<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About Biblie People

It is a personal project which is still in development. In general it works as a minimalist blog where you can publish, edit and read biographies of biblical characters.

## Requirements
* Php 8.1 and above
* Composer
* Since this project is running laravel 9, we suggest checking out the official requirements <a href="https://laravel.com/docs/9.x/upgrade#updating-dependencies" taget="_blank">here</a>
* Npm

## Installation

1. Clone the repository by running the following command in your comamand line below (Or you can dowload zip file from github)

`git clone https://github.com/ClaudioAlcantaraR/biblical-people.git`

2. Head to the project's directory

`cd biblical-people`

3. Install composer dependencies

`composer install`

4. Copy .env.example file into .env file and configure based on your environment

`cp .env.example .env`

5. Install node dependencies

`npm install`

6. Generate encryption key

`php artisan key:generate`

7. Migrate de database

`php artisan migrate`

8. Seed database to insert demo data

`php artisan db:seed`

9. Start the Laravel server

`php artisan serve`

10. Compile the assets

`npm run dev`

## Setup

Log in to the application with the following credentials

Email: super@admin.com
Password: password

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

