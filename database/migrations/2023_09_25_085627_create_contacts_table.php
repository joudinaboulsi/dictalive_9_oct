<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title_page')->nullable();
            $table->text('small_text')->nullable();
            $table->text('title_contact')->nullable();
            $table->text('phone')->nullable();
            $table->text('url_phone')->nullable();
            $table->text('email')->nullable();
            $table->text('location')->nullable();
         

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
        Schema::dropIfExists('contacts');
    }
}
