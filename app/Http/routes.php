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

     if(!empty($_GET['title'])){

        $title = ($_GET['title']);
        $salary = ($_GET['salary']);
        $state = ($_GET['state']);
        $insurance = ($_GET['insurance']);
        $retirement = ($_GET['retirement']);
        $distance = ($_GET['distance']);
        $hours = ($_GET['hours']);

        if(empty($_GET['oncall'])) {
            $oncall = "no";
        } else {
            $oncall = ($_GET['oncall']);
        }

        if(empty($_GET['night'])) {
            $night = "no";
        } else {
            $night = ($_GET['night']);
        }

        DB::insert('INSERT INTO calc (title, salary, state, insurance, retirement, distance, hours, oncall, night)
        values ("'.$title.'", '.$salary.', "'.$state.'", '.$insurance.', '.$retirement.', '.$distance.', '.$hours.', "'.$oncall.'", "'.$night.'")');
        return Redirect::to('/');
    } 

    return view('welcome');
});

Route::post('form', 'ArticlesController@store');

Route::get('/about', function () {
    return view('about');
});

Route::get('/navigation', function () {
    return view('navigation');
});

Route::get('/results', function () {
    return view('results');
});

Route::get('/delete/{id}', function ($id) {
    DB::delete('DELETE FROM calc WHERE id IN ('.$id.');');
    
    return Redirect::to('results');
   // return view('results');
});


