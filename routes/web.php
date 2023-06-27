<?php

use Illuminate\Support\Facades\Route;


Route::get('/forum', [ForumController::class, 'index'])->name('index');

Route::get('/contato', function () {
    return view('site/contact');
});

Route::get('/', function () {
    return view('welcome');
});
?>
