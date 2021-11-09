<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();
            $table->string("code", 10)->unique();
            $table->string("city_departure", 30);
            $table->date("date_departure");
            $table->string("city_arrival", 30);
            $table->date("date_return");
            $table->string("description");
            $table->float('price', 8, 2);
            $table->string("name_hotel");
            $table->unsignedSmallInteger("number_stars");
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
        Schema::dropIfExists('holidays');
    }
}
