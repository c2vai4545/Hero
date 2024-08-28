<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Metadata\Api\HookMethods;

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

Route::get('/home/{name}', function ($name) {
    return view('home', ['name' => $name]);
})->where('name','[A-Za-z]+');
/**
 * El ->where('name', '[A-Za-z]+') indica que 
 * solamente aceptara Letras, sin importar si tienen numeros o no pero tiene 
 * que tener letras sino lo rechaza
 */
