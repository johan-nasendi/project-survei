<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespondentIdentityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respondent_identity', function (Blueprint $table) {
            $table->id();
            $table->string('name',);
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->enum('gender',['Male','Female']);
            $table->string('mobile_phone_number',13)->unique();
            $table->string('email')->unique();
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
        Schema::dropIfExists('respondent_identity');
    }
}
