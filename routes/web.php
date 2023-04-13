<?php

use Illuminate\Support\Facades\Route;
use League\Csv\Reader;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/import', function () {
    $path = __DIR__ . '/../public/csv/file.csv';
    $csv = Reader::createFromPath($path, 'r');
    $header = $csv->setHeaderOffset(0);
    $records = $csv->getRecords();
    foreach ($csv as $row) {
        echo '<pre>';
        var_dump($row);
        echo '</pre>';
    }
    
});
