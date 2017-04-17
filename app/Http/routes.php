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
/*
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
                        'title'=> Input::get('title'),
                        'salary'=> Input::get('salary'),
                        'state'     => Input::get('state'),
                        'insurance'     => Input::get('insurance'),
                        'retirement'     => Input::get('retirement'),
                        'distance'     => Input::get('distance'),
                        'hours'     => Input::get('hours'),
                        'oncall'     => Input::get('oncall'),
                        'night'     => Input::get('night')
                ));

                return Redirect::to('/');
        } else {
                return Redirect::to('/')->withErrors($v->messages());
        }
});

/*
     //create the validation
     $rules = array (
        'title' => 'required'|'string',
        'salary' => 'required'|'digit',
        'state' => 'required'|'string',
        'insurance' => 'required'|'digit',
        'retirement' => 'required'|'digit',
        'distance' => 'required',
        'hours' => 'required'
     );

     // do the validation ----------------------------------
    // validate against the inputs from our form
    $validator = Validator::make(Input::all(), $rules);

    // check if the validator failed -----------------------
    if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('/')
            ->withErrors($validator);

    } else {
        // validation successful ---------------------------

        // our job has passed all tests!
        // let him enter the database

        // create the data for our job
        $job = new Job;
        $job->title     = Input::get('title');
        $job->salary    = Input::get('salary');
        $job->state     = Input::get('state');
        $job->insurance     = Input::get('insurance');
        $job->retirement     = Input::get('retirment');
        $job->distance     = Input::get('distance');
        $job->hours     = Input::get('hours');

        // save our job
        $job->save();

        // redirect ----------------------------------------
        // redirect our user back to the form so they can do it all over again
        return Redirect::to('/');

    }

});

*/


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


