<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_experiences', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('user_id')->unsigned();
            $table->string('start_work');
            $table->enum('works',['Yes','No']);
            $table->string('jobs_reason');
            $table->string('after_how_many_months_job');
            $table->string('get_str');
            $table->number('amount_applied',20);
            $table->number('amount_response_to_applications',20);
            $table->number('amount_inviting_interviews',20);
            $table->mediumText('how_to_find_a_job');
            $table->string('workplace');
            $table->string('name_workplace');
            $table->enum('job_educational_background',['Yes','No']);
            $table->mediumText('why_take_the_job');
            $table->string('level_of_education');
            $table->enum('relationship_study_work',['Very strong','Strong',' Strong enough','Less strong','Not at all']);
            $table->string('additional_competence');
            $table->string('income_per_month');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
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
        Schema::dropIfExists('job_experiences');
    }
}
