<?php

use Illuminate\Support\Facades\Route;

Route::get('/','SiteController@showHome');
Route::get('/Contact','SiteController@showContact');
Route::get('/Services','SiteController@showServices');
Route::get('/Portfolio','SiteController@showPortfolio');