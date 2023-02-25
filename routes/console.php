<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('katakulli:seed', function () {
    Artisan::call('migrate:fresh --database="katakulli"'); // optional arguments
    Artisan::call('db:seed --class="SettingSeeder" --database="katakulli"');
})->describe('Running commands for Katakulli');

Artisan::command('venice:seed', function () {
    Artisan::call('migrate:fresh --database="venice"'); // optional arguments
    Artisan::call('db:seed --class="VeniceSettingSeeder" --database="venice"');
})->describe('Running commands for Venice');
