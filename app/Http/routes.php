<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

     if(!empty($_POST['title'])){
        $title = ($_POST['title']);
        DB::insert('INSERT INTO calc (name) values ('.$title.')');
        return view('welcome');
    }

    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
