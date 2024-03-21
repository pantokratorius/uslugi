<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'lt', 'ru', 'ro'])) {
        abort(400);
    }

    App::setLocale($locale);
    return view('welcome');
    // ...
})->name('home');
