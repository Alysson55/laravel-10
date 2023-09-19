<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;


// Route::get('/forum', [ForumController::class, 'index'])->name('index');

// Route::get('/contact', function () {
//     return view('site/contact');
// });

Route::get('/support', [ForumController::class, 'index'])->name('index');

// Route::get('/contato', [ForumController::class, 'contato']);

Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});
?>
