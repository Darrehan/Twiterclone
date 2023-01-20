<?php

use Illuminate\Support\Facades\Route;
Route::controller(ecommerce::class)->group(function()
{
Route::get('/login','loginmethod')->name('login.page'); //->middleware('Age')  loading middleware in routes 
Route::get('/home','homemethod')->name('home.page'); //->middleware('Age')  loading middleware in routes 
Route::get('/logout','logoutmethod')->name('logout.page');//creating another name Rout for web pages interconections i'e links
});