<?php

use App\Http\Middleware\ChooseLang;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;


Route::middleware([ChooseLang::class])->group(function () {
    Route::match(['GET', 'POST'],'/', function () {
        return view('home');
    })->name('home');


    Route::get('lang/{locale}', function (string $locale) {
        session()->put('locale', $locale);
        App::setLocale($locale);
        return redirect()->back();
    })->name('lang');


    Route::get('contacts', function () {
        return view('contacts');

    })->name('contacts');

    Route::get('policy', function () {
        return view('policy');

    })->name('policy');

    Route::get('form', function () {
        return view('form');

    })->name('form');
});

