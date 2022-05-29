<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsLearningaExperienceaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions_learning_experiencea', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('respondent_id')->unsigned();
            $table->string('what_study_program');
            $table->date('college_entry_date');
            $table->date('college_graduation_date');
            $table->string('score_ipk',8);
            $table->string('organization');
            $table->string('active_inactive_organization');
            $table->string('further_education_levels');
            $table->string('educational_background');
            $table->string('field_work');
            $table->string('according');
            $table->foreign('respondent_id')->references('id')->on('respondent_identity')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('questions_learninga_experiencea');
    }
}
