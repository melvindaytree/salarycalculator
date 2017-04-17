<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model {

        protected $table = 'calcd';

        protected $fillable = ['title', 'salary', 'state', 'insurance', 'retirement', 'distance', 'hours', 'oncall', 'night'];

        public $timestamps = false;

        public static function validate($input) {
                $rules = array(
                    'title' => 'required|string|Alpha',
                    'salary' => 'required|integer',
                    'state' => 'required|string|Alpha',
                    'insurance' => 'required|integer',
                    'retirement' => 'required|integer',
                    'distance' => 'required|integer',
                    'hours' => 'required|integer',
                    'oncall' => 'string',
                    'night'=>'string'
                );

               return \Validator::make($input, $rules);
        }

}
