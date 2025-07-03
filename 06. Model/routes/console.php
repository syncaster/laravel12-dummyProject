<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


Artisan::command('balik', function () {
    $this->comment('Balik lagi ke rumah, jangan lupa bawa oleh-oleh!');
})->purpose('ini digunakan untuk menjalankan alias function balik');