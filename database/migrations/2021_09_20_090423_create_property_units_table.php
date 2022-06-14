<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_units', function (Blueprint $table) {
            $table->id();
            $table->string('Unit_title');
            $table->string('Rent');
            $table->string('Initial_deposit');
            $table->bigInteger('status')->unsigned()->index();
            $table->string('description')->nullable();
            $table->bigInteger('property_id')->unsigned()->index();
            // $table->bigInteger('Type_id')->unsigned()->index();
            $table->foreign('property_id')->references('id')->on('properties');
            // $table->foreign('Type_id')->references('id')->on('property_types');
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
        Schema::dropIfExists('property_units');
    }
}
