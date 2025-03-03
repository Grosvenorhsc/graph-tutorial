<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@welcome');

Route::get('/signin', 'AuthController@signin');
Route::get('/callback', 'AuthController@callback');

Route::get('/calendar', 'CalendarController@calendar');

Route::get('/calendar/new', 'CalendarController@getNewEventForm');
Route::post('/calendar/new', 'CalendarController@createNewEvent');

Route::get('/signout', 'AuthController@signout');