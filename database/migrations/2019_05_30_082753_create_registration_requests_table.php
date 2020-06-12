<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('MaterialMod');
            $table->string('HouseStatMod');
            $table->string('RequestoAdminMod');
            $table->string('ViewRequestMod');
            $table->string('UserManageMod');
            $table->string('ReportsMod');
            $table->string('ProjectsMod');     
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
        Schema::dropIfExists('registration_requests');
    }
}
