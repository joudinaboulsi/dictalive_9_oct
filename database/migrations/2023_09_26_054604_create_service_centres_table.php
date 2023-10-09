<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceCentresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_centres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('video')->nullable();
            $table->longText('title_page')->nullable();
            $table->longText('title_section1')->nullable();
            $table->longText('text_section1')->nullable();
          
            $table->string('url_youtube')->nullable();
            $table->string('image')->nullable();
            $table->string('video1')->nullable();
            $table->string('alt_image')->nullable();
            $table->string('title_contact')->nullable();
            $table->string('text_href')->nullable();
            $table->string('href')->nullable();
         
        
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
        Schema::dropIfExists('service_centres');
    }
}
