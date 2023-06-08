<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Bilie People

It is a personal project which is still in development. In general it works as a minimalist blog where you can publish, edit and read biographies of biblical characters.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

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

8. Seed database to download demo data

`php artisan db:seed`

9. Start the Laravel server

`php artisan serve`

10. Compile the assets

`npm run dev`
