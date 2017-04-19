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
Route::get('/', function() 
{
    return View::make('welcome');
});

use \App\Form;

Route::post('/', function () {

     $v = Form::validate(Input::all());

        if ( $v->passes() ) {
                Form::create(array(
                        'user'=> Input::get('user'),
                        'title'=> Input::get('title'),
                        'salary'=> Input::get('salary'),
                        'state'     => Input::get('state'),
                        'insurance'     => Input::get('insurance'),
                        'retirement'     => Input::get('retirement'),
                        'distance'     => Input::get('distance'),
                        'hours'     => Input::get('hours'),
                        'oncall'     => Input::get('oncall', false),
                        'night'     => Input::get('night', false)
                ));

                return Redirect::to('/');
        } else {
                return Redirect::to('/')
                ->withErrors($v->messages())
                ->withInput();
        }
});

// route to show the login form
Route::get('login', array('uses' => 'Controller@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'Controller@doLogin'));

//route to about page
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



Route::auth();

Route::get('/home', 'HomeController@index');
