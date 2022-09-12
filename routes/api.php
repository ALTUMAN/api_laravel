<?php
use Illuminate\Support\Facades\Route;

Route::post(uri:'reset',action: 'ResetController@mreset');

Route::get(uri:'/event',action: 'EventController@strore');
