<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAdvertisingAreas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_ru');
            $table->longText('text_ru');
            $table->string('title_en')->nullable();
            $table->longText('text_en')->nullable();
            $table->string('title_az')->nullable();
            $table->longText('text_az')->nullable();
            $table->timestamps();
        });
        Schema::create('area_floor', function (Blueprint $table) {
            $table->integer('area_id');
            $table->integer('mall_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areas');
        Schema::dropIfExists('floors_areas');
    }
}
