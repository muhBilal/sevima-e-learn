<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tentang E-Learn

E learn merupakan sebuah aplikasi yang dibuat untuk memudahkan para guru dan siswa untuk belajar dan mengajar dengan mudah 

## Requirement
- php8.0
- Tailwind 3.1.4
- nodejs
- mysql

## Instalasi
1.Jalankan Command 
    > composer install
    > npm install 
2. Buat database dengan nama e-learn
3. Jalankan command untuk membuat file .env lalu sesuaikan dengan configurasi
    > cp .env.example .env
4. Lakukan migrasi dan seed data 
    > php artisan migrate --seed
5. jalankan command untuk mendapatkan dompdf di folder vendor
    > composer require dompdf/dompdf
6. jalankan program
    > npm install (untuk menjalankan laravel mix)
    > php artisan serve (untuk menjalankan port laravel)

User Manual E-Learn [disini](https://docs.google.com/presentation/d/1Hh7M0YF96U5FtT60qGU2AFNe2dg-oQ1e/edit?usp=sharing&ouid=114684963151695563814&rtpof=true&sd=true)
atau bisa di lihat di E-Learn.pptx
