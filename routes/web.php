<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admins', 'AdminController@index');

/* Konsep Laravel MVC => Model View Controller
-> buat controller namanya AdminController
*/