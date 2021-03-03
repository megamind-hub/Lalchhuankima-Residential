<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('Application_no')->nullable();
            $table->string('name');
            $table->date('date_Of_Birth')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->nullable();
            $table->integer('contact')->nullable();
            $table->string('place_Of_Birth')->nullable();
            $table->string('occupation')->nullable();
            $table->integer('monthly_Income')->nullable();
            $table->string('education')->nullable();
            $table->string('father_Name')->nullable();
            $table->string('mother_Name')->nullable();
            $table->string('spouse_Name')->nullable();
            $table->string('present_Address')->nullable();
            $table->string('sub_Locality1')->nullable();
            $table->string('sub_Locality2')->nullable();
            $table->string('location')->nullable();
            $table->string('sub_District')->nullable();
            $table->string('district')->nullable();
            $table->string('state')->nullable();
            $table->integer('pinCode')->nullable();
            $table->string('country')->nullable();
            $table->string('police_Station')->nullable();
            $table->string('post_Office')->nullable();
            $table->string('detail_Of_Residence')->nullable();
            $table->integer('constituency_No')->nullable();
            $table->string('constituency_Name')->nullable();
            $table->integer('id_Card')->nullable();
            $table->integer('year_Of_Residence')->nullable();
            $table->string('purpose_For_Residential_Certificate')->nullable();
            $table->date('date')->nullable();
            $table->string("file1")->nullable();
            $table->string("file2")->nullable();
            $table->string("file3")->nullable();
            $table->string('Forwarder_Status')->nullable();
            $table->string('Circle_Officer_Status')->nullable();
            $table->string('Mandal_Officer_Status')->nullable();
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
        Schema::dropIfExists('forms');
    }
}
