<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumniComunitacionBetweenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni_comunitacion_between', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('respondent_id')->unsigned();
            $table->string('alumni_association')->nullable();
            $table->string('fb')->nullable();
            $table->string('ig')->nullable();
            $table->string('linkend')->nullable();
            $table->string('development_of_competencies_and_institutions')->nullable();
            $table->string('cooperation_institutions_alumni_associations')->nullable();
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
        Schema::dropIfExists('alumni_comunitacion_between');
    }
}
