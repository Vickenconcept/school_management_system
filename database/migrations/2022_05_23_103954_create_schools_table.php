<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('email');
            $table->text('phone');
            $table->text('photo')->nullable();
            $table->text('school_logo')->nullable();
            $table->string('address');
            $table->string('school_info');
            $table->string('email_title')->nullable();
            $table->text('email_details')->nullable();
            $table->text('warning_text')->nullable();
            $table->text('socialLink1')->nullable();
            $table->text('socialLink2')->nullable();
            $table->text('socialLink3')->nullable();

            $table->text('email_logo')->nullable();
            $table->text('socialLogo1')->nullable();
            $table->text('socialLogo2')->nullable();
            $table->text('socialLogo3')->nullable();
            $table->text('front_logo')->nullable();
            $table->text('off_pay_ins_file')->nullable();
            
            $table->string('currency_position')->nullable();
            $table->integer('status');
            $table->integer('school_currency')->nullable();
            $table->integer('running_session')->nullable();
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
        Schema::dropIfExists('schools');
    }
}
