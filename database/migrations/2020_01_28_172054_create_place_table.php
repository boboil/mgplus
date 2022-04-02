<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_ru');
            $table->longText('text_ru');
            $table->longText('images');
            $table->date('availability');
            $table->integer('price_1');
            $table->integer('price_10')->nullable();
            $table->integer('price_15')->nullable();
            $table->integer('price_21')->nullable();
            $table->string('title_en')->nullable();
            $table->longText('text_en')->nullable();
            $table->string('title_az')->nullable();
            $table->longText('text_az')->nullable();
            $table->integer('floor_id');
            $table->integer('mall_id');
            $table->integer('area_id');
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
        Schema::dropIfExists('places');
    }
}
