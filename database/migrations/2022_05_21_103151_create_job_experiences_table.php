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
            $table->BigInteger('respondent_id')->unsigned();
            $table->enum('works',['Yes','No']);
            $table->string('start_work')->nullable();
            $table->string('jobs_reason')->nullable();
            $table->string('after_how_many_months_job')->nullable();
            $table->string('get_str')->nullable();
            $table->string('amount_applied',20)->nullable();
            $table->string('amount_response_to_applications',20)->nullable();
            $table->string('amount_inviting_interviews',20)->nullable();
            $table->mediumText('how_to_find_a_job')->nullable();
            $table->string('workplace')->nullable();
            $table->string('name_workplace')->nullable();
            $table->enum('job_educational_background',['Yes','No'])->nullable();
            $table->mediumText('why_take_the_job')->nullable();
            $table->string('level_of_education');
            $table->enum('relationship_study_work',['Sangat Kuat','Kuat',' Cukup Kuat','Kurang kuat','Tidak semuanya'])->nullable();
            $table->string('additional_competence')->nullable();
            $table->string('income_per_month')->nullable();
            $table->foreign('respondent_id')->references('id')->on('respondent_identity')->onUpdate('cascade');
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
