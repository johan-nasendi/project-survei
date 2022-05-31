<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespondentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respondent', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('mobile_phone_number',13)->unique();
            $table->string('email')->unique();
            $table->string('slug');
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
        Schema::dropIfExists('respondent');
    }
}