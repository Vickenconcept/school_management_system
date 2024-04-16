<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('exam_type');
            $table->string('starting_time');
            $table->string('ending_time');
            $table->float('total_marks');
            $table->string('status');
            $table->integer('class_id')->index(); 
            $table->integer('subject_id')->index(); 
            $table->integer('school_id')->index(); 
            $table->integer('session_id')->index(); 
            $table->integer('room_number')->index(); 
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
        Schema::dropIfExists('exams');
    }
}
