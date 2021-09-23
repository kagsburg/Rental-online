<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('Property_name');
            $table->string('Rent_amount');
            $table->bigInteger('landlord_id')->unsigned()->index();
            $table->string('Location');
            $table->bigInteger('Type_id')->unsigned()->index();
            $table->string('status');
            $table->string('description')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->foreign('landlord_id')->references('id')->on('landlords');
            $table->foreign('Type_id')->references('id')->on('property_types');
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
        Schema::dropIfExists('properties');
    }
}
