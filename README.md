# Portal Web DSPA

<a href="https://github.com/FernandoTorresL/portal_web_dspa/commits/main" target="_blank">![GitHub last commit](https://img.shields.io/github/last-commit/FernandoTorresL/portal_web_dspa)</a>

<a href="https://github.com/FernandoTorresL/portal_web_dspa" target="_blank">![GitHub repo size](https://img.shields.io/github/repo-size/FernandoTorresL/portal_web_dspa)</a>


## Project for IMSS, México

## Introduction

This is a personal project operated by employees of the _Coordinación de Afiliación - División de Soporte a los Procesos de Afiliación_ office on _Instituto Mexicano del Seguro Social (IMSS, DIR, CA, DSPA)_

This project manage requests and applications to the access control's accounts on one of the most important database of the Institute. With this system, users can create, modify, search and send to another department all these applications.

Before this system was implemented, this office use a lot of sheets, papers, memos, cabinets and archives to manage all of this information. It takes weeks, sometimes months to accomplish a single request from origin (some of 35 offices on the states) to an answer to this request. Now, it can take minutes to present one request and deliver a full response. And of course, the search capabilities of a good database design made fast queries and reports that before last several weeks to finish.

### Technology used

This project was build with the use of:

- PHP 8, Laravel 9
- XAMPP stack (Apache, MySQL/MariaDB, PHP)
- Valet (actually, using Digital Ocean for deploy)

This project has several previous releases with different technologies; some are:

- Oct 2018 version: [web_dspa repo](https://github.com/FernandoTorresL/web_dspa)
	Laravel 5.7

- Ago 2018 version: [ca-dspa repo](https://github.com/FernandoTorresL/ca-dspa)
	First steps on Laravel.

- Oct 2016 version: [dspa repo](https://github.com/FernandoTorresL/dspa)
First approach. Initially with pure php, later using MVC model.

Here are some old screencaptures:

![Imgur](https://i.imgur.com/bFp4HBl.png)
![Imgur](https://i.imgur.com/GX2zfaV.png)
![Imgur](https://i.imgur.com/QxCuBU3.png)

## Release History

WIP (Work In Progress)
- 23 Nov 2022 Testing automatic deploy with Digital Ocean hosting 

---

## Installation

Make sure you had this previous installed software:
- XAMPP / Valet /Homestead or similar software to develop Laravel projects ([Laravel documentation](https://laravel.com/docs))
- A Internet browser like Google Chrome
- Laravel framework / Composer
- Adobe Acrobat Reader plugin
- Optional: MySql Workbench or similar

Make sure you have access to MySQL/MariaDB server and can create databases and tables (review your permissions).

### Start server
With XAMPP: Start Apache server service and MYSQL service. This step can vary from MacOS and Windows or other systems.

### Clone this repo
You can use and change *<my_folder>* on this instruction to create a new folder 
```
git clone git@github.com:FernandoTorresL/portal_web_dspa.git <my_folder>
```

### Create your .env file (only an .env.example file on github)
```
vi .env
```
Using **_.env.example_** file, you can set your own access credentials to database and configuration values.

### Change to working directory and install a development version
```
cd <my_folder>
composer update
php artisan key:generate
php artisan storage:link
php artisan migrate:fresh
```

### Execute
Now, open a new terminal, and execute with
```
php artisan serve --host=<ip_host> --port=<your_port>
```

Finally, you can view the project on **localhost:<your_port>** or **<ip_host>:<your_port>** on a browser.

Remember that you must use the same values that you define on your **_.env_** file.

## Follow me 

### :globe_with_meridians: [fertorresmx](https://fertorresmx.dev/)

---

## About Laravel
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
