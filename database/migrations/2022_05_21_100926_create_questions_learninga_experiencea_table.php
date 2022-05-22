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
            $table->BigInteger('user_id')->unsigned();
            $table->string('what_study_program');
            $table->date('college_entry_date');
            $table->date('college_graduation_date');
            $table->number('score_ipk',5);
            $table->enum('organization',['Yes','No']);
            $table->enum('Active_inactive_organization',['Yes','No']);
            $table->enum('further_education_levels',['Yes','No']);
            $table->enum('educational_background',['Yes','No']);
            $table->enum('field_work',['Yes','No']);
            $table->enum('according',['Very Big','Big','Enough Big','Not Enough','No Same Once']);
            $table->string('what_study_program');
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
        Schema::dropIfExists('questions_learninga_experiencea');
    }
}
