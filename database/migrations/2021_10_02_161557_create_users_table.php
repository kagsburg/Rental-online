<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
 Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('Full_name');
    $table->string('Email');
    $table->string('Address')->nullable();
    $table->string('NIN')->nullable();
    $table->string('bank')->nullable();
    $table->string('bank_a/c_no')->nullable();
    $table->string('Occupation_place')->nullable();
    $table->string('Occupation_status')->nullable();
    $table->string('Emergency_contact_name')->nullable();
    $table->string('Emergency_contact')->nullable();
    $table->bigInteger('Unit_id')->unsigned()->index()->nullable();
    $table->bigInteger('property_id')->unsigned()->index()->nullable();
    $table->foreign('Unit_id')->references('id')->on('property_units');
    $table->foreign('property_id')->references('id')->on('properties');
    $table->bigInteger('role_id')->unsigned()->index();
    $table->foreign('role_id')->references('id')->on('roles');
    $table->timestamp('email_verified_at')->nullable();
    $table->string('password');
    $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
