<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumniComunitacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni_comunitacion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('respondent_id');
            $table->string('alumni_association');
            $table->string('fb')->nullable();
            $table->string('ig')->nullable();
            $table->string('linkend')->nullable();
            $table->string('development_of_competencies_and_institutions');
            $table->string('cooperation_institutions_alumni_associations');
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
        Schema::dropIfExists('alumni_comunitacion');
    }
}
