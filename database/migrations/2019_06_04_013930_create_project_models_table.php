<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ProjectName');
            $table->integer('Block')->nullable();
            $table->integer('Lot')->nullable();
            $table->string('TitleNo')->nullable();
            $table->string('Borrower')->nullable();
            $table->string('PackagePrice')->nullable();
            $table->string('Type')->nullable();
            $table->string('Remarks')->nullable();     
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
        Schema::dropIfExists('project_models');
    }
}
