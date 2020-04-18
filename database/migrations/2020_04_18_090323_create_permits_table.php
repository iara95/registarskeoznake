<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permits', function (Blueprint $table) {
            $table->id();
            $table->date('vrijedi_od');
            $table->date('vrijedi_do');
            $table->string('tehnicki_pregled', 255);
            
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('car_id');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('car_id')->references('id')->on('cars');

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
        Schema::dropIfExists('permits');
    }
}
