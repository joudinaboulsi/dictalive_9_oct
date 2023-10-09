<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo_header')->nullable();
            $table->string('logo_footer')->nullable();
            $table->string('icon_email')->nullable();
            $table->string('icon_phone')->nullable();
            $table->text('description')->nullable();
            $table->text('address')->nullable();
            $table->text('email')->nullable();
            $table->text('phone')->nullable();
            $table->text('phone2')->nullable();
            $table->text('fb')->nullable();
            $table->text('insta')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('title_contact')->nullable();
            $table->text('link_contact')->nullable();
            $table->text('url')->nullable();
            $table->text('tel1')->nullable();
            $table->text('tel2')->nullable();
            $table->text('alt_header')->nullable();
            $table->text('alt_footer')->nullable();
            $table->text('alt_email')->nullable();
            $table->text('alt_phone')->nullable();
          

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
        Schema::dropIfExists('settings');
    }
}
