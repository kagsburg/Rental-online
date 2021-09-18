<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('Fullname');
            $table->string('Email');
            $table->string('NIN');
            $table->string('Occupation_place');
            $table->string('Occupation_status');
            $table->string('Emergency_contact_name');
            $table->string('Emergency_contact');
            $table->bigInteger('Unit_id')->unsigned()->index()->nullable();
            $table->bigInteger('property_id')->unsigned()->index();
            $table->foreign('Unit_id')->references('id')->on('property_units');
            $table->foreign('property_id')->references('id')->on('properties');
            $table->string('created_by')->nullable(); 
            $table->string('updated_by')->nullable();
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
        Schema::dropIfExists('tenants');
    }
}
