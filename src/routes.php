<?php
use Illuminate\Support\Facades\Route;

Route::get('greeting', function () {
    return 'Hi, this is your awesome package! rwra';
});

Route::get('Lara/test', 'EdgeWizz\Lara\Controllers\LaraController@test')->name('test');

Route::post('fmt/lara/store', 'EdgeWizz\Lara\Controllers\LaraController@store')->name('fmt.lara.store');

Route::post('fmt/lara/csv_upload', 'EdgeWizz\Lara\Controllers\LaraController@csv_upload')->name('fmt.lara.csv');

Route::post('fmt/lara/update/{id}', 'EdgeWizz\Lara\Controllers\LaraController@update')->name('fmt.lara.update');
Route::any('fmt/lara/inactive/{id}',  'EdgeWizz\Lara\Controllers\LaraController@inactive')->name('fmt.lara.inactive');
Route::any('fmt/lara/active/{id}',  'EdgeWizz\Lara\Controllers\LaraController@active')->name('fmt.lara.active');