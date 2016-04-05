<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('roll');
            $table->string('name');
            $table->string('board');
            $table->string('fathers_name');
            $table->string('sub_group');
            $table->string('mothers_name');
            $table->string('type');
            $table->string('birth');
            $table->integer('result');
            $table->integer('year');
            $table->string('institute');
            $table->integer('gpa');
            $table->string('examination');
            $table->integer('bangla');
            $table->integer('english');
            $table->integer('math');
            $table->integer('science');
            $table->integer('religion');
            $table->integer('int_to_busi');
            $table->integer('accounting');
            $table->integer('business_entre');
            $table->integer('agriculture');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('results');
    }
}
