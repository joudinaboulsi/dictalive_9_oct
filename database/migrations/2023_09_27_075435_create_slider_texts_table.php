<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_texts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slider1')->nullable();
            $table->string('slider2')->nullable();
            $table->string('slider3')->nullable();
            $table->string('slider4')->nullable();
            $table->string('slider5')->nullable();
            $table->string('slider6')->nullable();
            $table->string('slider7')->nullable();

            $table->string('slider8')->nullable();
            $table->string('slider9')->nullable();
            $table->string('slider10')->nullable();
            $table->string('slider11')->nullable();
            $table->string('slider12')->nullable();
            $table->string('slider13')->nullable();
            $table->string('slider14')->nullable();
            $table->string('slider15')->nullable();
            $table->string('slider16')->nullable();
            $table->string('slider17')->nullable();
            $table->string('slider18')->nullable();
            $table->string('color')->nullable();
            $table->string('color2')->nullable();
            
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
        Schema::dropIfExists('slider_texts');
    }
}
