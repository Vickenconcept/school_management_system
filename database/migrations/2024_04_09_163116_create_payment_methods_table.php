<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('payment_keys')->nullable();
            $table->string('image')->nullable();
            $table->boolean('status')->default(true);
            $table->string('mode')->nullable();
            $table->string('currency')->nullable();
            $table->enum('currency_position', ['left', 'right'])->default('left');
            $table->timestamps();
            $table->foreignId('school_id')->constrained('schools')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_methods');
    }
};
