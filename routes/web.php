<?php

use App\Http\Controllers\FrontControlle;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontControlle::class, 'index'])->name('index');


Route::get('/about',[FrontControlle::class, 'about'])->name('about');






Route::get(
    '/hello/{name}',
    function ($name) {
        return 'bienvenue sur la page , ' . $name;
    }
)->name('contact');
