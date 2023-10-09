<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title_page')->nullable();
            $table->text('subtitle_page')->nullable();
            $table->text('text')->nullable();
            $table->string('image')->nullable();
            $table->text('title1_service')->nullable();
            $table->text('title2_service')->nullable();
            $table->string('icon1_service')->nullable();
            $table->string('icon2_service')->nullable();
            $table->string('icon3_service')->nullable();
            $table->string('icon4_service')->nullable();
            $table->string('icon5_service')->nullable();
            $table->text('title_video')->nullable();
            $table->string('video')->nullable();
            $table->text('title_section4')->nullable();
            $table->text('content_section4')->nullable();
            $table->text('link')->nullable();
            $table->string('image1_section4')->nullable();
            $table->string('image2_section4')->nullable();
            $table->string('color1')->nullable();
            $table->string('color2')->nullable();
            $table->text('title_blog')->nullable();
            $table->text('subtitle_blog')->nullable();
            $table->string('image_footer')->nullable();
            $table->text('url_text')->nullable();

            $table->text('alt_image')->nullable();
            $table->text('alt_image1_section4')->nullable();
            $table->text('alt_image2_section4')->nullable();
            $table->text('alt_icon1')->nullable();
            $table->text('alt_icon2')->nullable();
            $table->text('alt_icon3')->nullable();
            $table->text('alt_icon4')->nullable();
            $table->text('alt_icon5')->nullable();
            $table->text('alt_footer')->nullable();
        
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
        Schema::dropIfExists('home_pages');
    }
}
