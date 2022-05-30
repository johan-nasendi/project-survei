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
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('job_id');
            $table->unsignedBigInteger('relation_id');
            $table->unsignedBigInteger('alumni_id');
            $table->string('name');
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('mobile_phone_number',13)->unique();
            $table->string('email')->unique();
            $table->string('slug');
            $table->foreign('question_id')->references('id')->on('questions_learning')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('job_id')->references('id')->on('job_experiences')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('relation_id')->references('id')->on('relationship_competence')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('alumni_id')->references('id')->on('alumni_comunitacion')->onUpdate('cascade')->onDelete('cascade');
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
