<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsLearningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pbm_experience', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('respondent_id');
            $table->string('active_inactive_organization');
            $table->string('organization_name')->nullable();
            $table->string('lecturer_ability');
            $table->string('lecturer_skills_practice');
            $table->string('rectors_service');
            $table->string('study_program_services');
            $table->foreign('respondent_id')->references('id')->on('respondent')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('questions_learning');
    }
}
