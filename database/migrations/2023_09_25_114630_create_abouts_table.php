<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('shape')->nullable();
            $table->text('alt_shape')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->text('title1_page')->nullable();
            $table->text('title2_page')->nullable();
            $table->text('content_page')->nullable();
            $table->string('video')->nullable();
            $table->text('title_description')->nullable();
            $table->string('image1_description')->nullable();
            $table->string('image2_description')->nullable();
            $table->string('image3_description')->nullable();
            $table->string('image4_description')->nullable();
            $table->text('text_description')->nullable();
            $table->text('small_title_portfolio')->nullable();
            $table->text('title_portfolio')->nullable();
            $table->text('text_portfolio')->nullable();
            $table->string('image1_portfolio')->nullable();
            $table->string('image2_portfolio')->nullable();
            $table->string('image3_portfolio')->nullable();
            $table->text('portfolio_title1')->nullable();
            $table->text('portfolio_date1')->nullable();
            $table->text('portfolio_title2')->nullable();
            $table->text('portfolio_date2')->nullable();
            $table->text('portfolio_title3')->nullable();
            $table->text('portfolio_date3')->nullable();
            $table->string('color')->nullable();
            $table->text('alt1')->nullable();
            $table->text('alt2')->nullable();
            $table->text('alt3')->nullable();
            $table->text('alt4')->nullable();
            $table->text('alt1_desc')->nullable();
            $table->text('alt2_desc')->nullable();
            $table->text('alt3_desc')->nullable();
            $table->text('alt_desc')->nullable();
            $table->text('alt1_portfolio')->nullable();
            $table->text('alt2_portfolio')->nullable();
            $table->text('alt3_portfolio')->nullable();
          


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
        Schema::dropIfExists('abouts');
    }
}
