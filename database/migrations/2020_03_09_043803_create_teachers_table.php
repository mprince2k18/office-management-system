<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('email');
            $table->string('gender');
            $table->string('nationality');
            $table->string('blood_group');
            $table->string('occupation');
            $table->date('dob');
            $table->longText('present_address');
            $table->longText('permanent_address');
            $table->longText('marketplace');
            $table->string('phone');
            $table->string('password');
            $table->string('avatar');
            $table->string('ssc_inst')->nullable();
            $table->string('ssc_board')->nullable();
            $table->string('ssc_subject')->nullable();
            $table->string('ssc_passing')->nullable();
            $table->string('hsc_inst')->nullable();
            $table->string('hsc_board')->nullable();
            $table->string('hsc_subject')->nullable();
            $table->string('hsc_passing')->nullable();
            $table->string('grad_inst')->nullable();
            $table->string('grad_board')->nullable();
            $table->string('grad_subject')->nullable();
            $table->string('grad_passing')->nullable();
            $table->string('masters_inst')->nullable();
            $table->string('masters_board')->nullable();
            $table->string('masters_subject')->nullable();
            $table->string('masters_passing')->nullable();
            $table->string('assigned_course')->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
