<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMalls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('malls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_ru');
            $table->longText('text_ru');
            $table->string('title_en')->nullable();
            $table->longText('text_en')->nullable();
            $table->string('title_az')->nullable();
            $table->longText('text_az')->nullable();
            $table->longText('short_text_ru')->nullable();
            $table->longText('short_text_en')->nullable();
            $table->longText('short_text_az')->nullable();
            $table->string('image')->nullable();
            $table->longText('images')->nullable();
            $table->string('logo')->nullable();
            $table->string('slug');
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
        Schema::dropIfExists('malls');
    }
}
