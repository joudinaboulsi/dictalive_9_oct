<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDictasupportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dictasupports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_page')->nullable();
            $table->text('subtitle_page')->nullable();
            $table->string('image')->nullable();
            $table->string('title_section1')->nullable();
            $table->string('subtitle_section1')->nullable();
            $table->string('text_section1')->nullable();
            $table->string('image2')->nullable();
            $table->string('text_section2')->nullable();
            $table->string('title_section2')->nullable();
            $table->string('text_section3')->nullable();
            $table->string('title_section3')->nullable();
            $table->string('link')->nullable();
            $table->string('url')->nullable();
            $table->string('color')->nullable();
            $table->string('color2')->nullable();
            $table->string('color3')->nullable();
            $table->string('alt_image')->nullable();
          
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
        Schema::dropIfExists('dictasupports');
    }
}
