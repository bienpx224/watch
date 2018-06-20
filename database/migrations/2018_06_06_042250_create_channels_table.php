<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('channels', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('type', 255);
            $table->string('name', 255);
            $table->string('image', 255)->nullable();
            $table->string('alias', 156)->unique();
            $table->string('url', 255);
            $table->string('width', 255);
            $table->string('height', 255);
            $table->integer('state')->default(1);
            $table->string('note', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('channels');
    }
}
