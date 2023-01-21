<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\twitercontroller;
Route::controller(twitercontroller::class)->group(function()
{
Route::get('/login','loginmethod')->name('login.page');//->middleware('Age')  loading middleware in routes 
Route::get('/home','homemethod')->name('home.page'); //->middleware('Age')  loading middleware in routes 
Route::get('/logout','logoutmethod')->name('logout.page');//creating another name Rout for web pages interconections i'e links
Route::get('/signup','signupmethod')->name('signup.page');//creating another name Rout for web pages interconections i'e links
Route::get('/forgotten','forgottenmethod')->name('forgotten.page');//creating another name Rout for web pages interconections i'e links
Route::get('/explore','exploremethod')->name('explore.page');//creating another name Rout for web pages interconections i'e links
Route::get('/bookmark','bookmarkmethod')->name('bookmark.page');//creating another name Rout for web pages interconections i'e links
Route::get('/list','listmethod')->name('list.page');//creating another name Rout for web pages interconections i'e links
Route::get('/message','messagemethod')->name('message.page');//creating another name Rout for web pages interconections i'e links
Route::get('/notifications','notificationsmethod')->name('notifications.page');//creating another name Rout for web pages interconections i'e links
Route::get('/profile','profilemethod')->name('profile.page');//creating another name Rout for web pages interconections i'e links
Route::get('/more','moremethod')->name('more.page');//creating another name Rout for web pages interconections i'e links
});