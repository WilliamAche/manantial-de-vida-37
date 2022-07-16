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
})->describe('Display an inspiring quote');


// Comando para limpiar el archivo laravel.log (solo funciona en linux)
Artisan::command('logs:clear', function() {
    
    exec('rm -f ' . storage_path('logs/*.log'));

    exec('rm -f ' . base_path('*.log'));
    
    $this->comment('Logs have been cleared!');
    
})->describe('Clear log files');

// Comando para limpiar la database
Artisan::command('db:wipe', function() {

    // Regenera la lista de todas las clases que deben incluirse en el proyecto
    exec('composer dump-autoload');

    // Recrear boostrap/cache/compiled.php
    exec('php artisan optimize');

    // Borra y vuelve a crear las tablas de la DB
    exec('php artisan migrate:refresh');

    // Corre los seeder
    exec('php artisan db:seed');
    
    
    $this->comment('The database has been cleaned!');
    
})->describe('Refresh db and seed');

Artisan::command('cache:wipe', function() {
    
    // comandos para linpiar

    // Regenera la lista de todas las clases que deben incluirse en el proyecto
    exec('composer dump-autoload');

    // Recrear boostrap/cache/compiled.php
    exec('php artisan optimize');

    // Para vaciar la memoria caché de la aplicación
    exec('php artisan cache:clear');

    // Para quitar el archivo de caché de configuración
    exec('php artisan config:clear');

    // Para borrar todos los archivos de vista compilados
    exec('php artisan view:clear');


    // comandos para borrar

    // Borrar boostrap/cache/compiled.php
    // exec('php artisan optimize:clear');

    // Crea un archivo de caché para una carga de configuración más rápida
    // exec('php artisan config:cache');

    // Eliminar el archivo de caché de configuración
    // exec('php artisan config:clear');

    $this->comment('The cache has been cleared!');
    
})->describe('Clear cache');