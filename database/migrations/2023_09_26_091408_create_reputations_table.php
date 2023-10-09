<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReputationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reputations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_page')->nullable();
            $table->string('subtitle_page')->nullable();
            $table->text('title_section1')->nullable();
            $table->text('subtitle_section1')->nullable();
            $table->string('image_section1')->nullable();
            $table->text('text_section1')->nullable();
            $table->string('color')->nullable();
            $table->string('color3')->nullable();


            $table->text('title_section2')->nullable();
            $table->text('subtitle_section2')->nullable();
            $table->string('icon1_section2')->nullable();
            $table->string('icon2_section2')->nullable();
            $table->string('icon3_section2')->nullable();
            $table->string('icon4_section2')->nullable();
            $table->string('icon5_section2')->nullable();
            $table->string('li1_section2')->nullable();
            $table->string('li2_section2')->nullable();
            $table->string('li3_section2')->nullable();
            $table->string('li4_section2')->nullable();
            $table->string('li5_section2')->nullable();
            $table->text('title1_section2')->nullable();
            $table->text('subtitle1_section2')->nullable();
            $table->text('percent1_section2')->nullable();
            $table->text('title2_section2')->nullable();
            $table->text('subtitle2_section2')->nullable();
            $table->text('percent2_section2')->nullable();
            $table->string('color2')->nullable();
            
            $table->text('title_section3')->nullable();
            $table->text('text_section3')->nullable();
            $table->string('image_section3')->nullable();
            $table->string('image1_section3')->nullable();
            $table->string('li1_section3')->nullable();
            $table->string('li2_section3')->nullable();

            $table->text('title_section4')->nullable();
            $table->text('text_section4')->nullable();
            $table->string('image_section4')->nullable();
            $table->string('image1_section4')->nullable();
            $table->string('li1_section4')->nullable();
            $table->string('li2_section4')->nullable();

            $table->text('title_section5')->nullable();
            $table->text('text_section5')->nullable();
            $table->string('image_section5')->nullable();
            $table->string('image1_section5')->nullable();
            $table->string('li1_section5')->nullable();
            $table->string('li2_section5')->nullable();

            $table->text('title_section6')->nullable();
            $table->text('text_section6')->nullable();
            $table->string('image_section6')->nullable();
            $table->string('image1_section6')->nullable();
            $table->string('li1_section6')->nullable();
            $table->string('li2_section6')->nullable();

            $table->text('title_section7')->nullable();
            $table->text('text_section7')->nullable();
            $table->string('image_section7')->nullable();
            $table->string('image1_section7')->nullable();
            $table->string('li1_section7')->nullable();
            $table->string('li2_section7')->nullable();

            $table->text('title_section8')->nullable();
            $table->text('text_section8')->nullable();
            $table->string('image_section8')->nullable();
            $table->string('image1_section8')->nullable();
            $table->string('li1_section8')->nullable();
            $table->string('li2_section8')->nullable();

            $table->text('title_section9')->nullable();
            $table->text('text_section9')->nullable();
            $table->string('link_section9')->nullable();
            $table->string('url_section9')->nullable();


            $table->string('alt_image_s1')->nullable();
            $table->string('alt_image_s3')->nullable();
            $table->string('alt_image_s4')->nullable();
            $table->string('alt_image_s5')->nullable();
            $table->string('alt_image_s6')->nullable();
            $table->string('alt_image_s7')->nullable();

           
         
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
        Schema::dropIfExists('reputations');
    }
}
