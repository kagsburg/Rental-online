<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leases', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('type_id')->unsigned()->index();
            $table->bigInteger('unit_id')->unsigned()->index();
            $table->bigInteger('tenant_id')->unsigned()->index();
            $table->string('status');
            $table->foreign('type_id')->references('id')->on('property_types');
            $table->foreign('unit_id')->references('id')->on('property_units');
            $table->foreign('tenant_id')->references('id')->on('users');
            
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
        Schema::dropIfExists('leases');
    }
}
