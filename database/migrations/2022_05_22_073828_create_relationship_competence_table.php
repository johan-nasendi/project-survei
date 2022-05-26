<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationshipCompetenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relationship_competence', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('respondent_id')->unsigned();
            $table->string('curriculum_compatibility_jobs')->nullable();
            $table->string('health_polytechnic_Competence')->nullable();
            $table->string('competency_mastered')->nullable();
            $table->string('competencies_required_job')->nullable();
            $table->string('competency_improvement_needs')->nullable();
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
        Schema::dropIfExists('relationship_competence');
    }
}
