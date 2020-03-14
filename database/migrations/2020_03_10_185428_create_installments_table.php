<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstallmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('enroll_id');
            $table->string('student_id');
            $table->string('course_discount');
            $table->string('firstInstallment');
            $table->timestamp('firstInstallmentDate');
            $table->string('secondInstallment')->nullable();
            $table->string('secondInstallmentCheck')->nullable();
            $table->timestamp('secondInstallmentDate')->nullable();
            $table->string('thirdInstallment')->nullable();
            $table->string('thirdInstallmentCheck')->nullable();
            $table->timestamp('thirdInstallmentDate')->nullable();
            $table->string('fourInstallment')->nullable();
            $table->string('fourInstallmentCheck')->nullable();
            $table->timestamp('fourInstallmentDate')->nullable();
            $table->string('fiveInstallment')->nullable();
            $table->string('fiveInstallmentCheck')->nullable();
            $table->timestamp('fiveInstallmentDate')->nullable();
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
        Schema::dropIfExists('installments');
    }
}
