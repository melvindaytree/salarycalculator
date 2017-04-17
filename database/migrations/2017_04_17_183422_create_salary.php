<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calcd', function($t) {
                    $t->increments('id');
                    $t->string('title', 80);
                    $t->integer('salary');
                    $t->string('state', 64);
                    $t->integer('insurance');
                    $t->integer('retirement');
                    $t->integer('distance');
                    $t->integer('hours');
                    $t->string('oncall', 64);
                    $t->string('night', 64);
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('calcd');
    }
}
