<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlowerImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flower_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('flower_id')->unsigned()->index();
            $table->foreign('flower_id')->references('id')->on('flowers')->onDelete('cascade');
            $table->string('url');
            $table->boolean('is_featured');
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
        Schema::dropIfExists('flower_images');
    }
}
