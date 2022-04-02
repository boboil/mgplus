<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MainPage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_main', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('text_ru');
            $table->longText('text_en')->nullable();
            $table->longText('text_az')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
        Schema::create('about', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('text_ru');
            $table->longText('text_en')->nullable();
            $table->longText('text_az')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('slider_main');
        Schema::dropIfExists('about');
    }
}
