<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('disp_order');
            $table->string('pack_id');
            $table->string('pack_name');
            $table->string('pack_description',200);
            $table->string('pack_type');
            $table->integer('total_credit');
            $table->string('tag_name',300);
            $table->string('validity_month');
            $table->string('pack_price');
            $table->string('newbie_first_attend');
            $table->string('newbie_addtion_credit');
            $table->string('newbie_note',400);
            $table->string('pack_alias',300);
            $table->string('estimate_price');
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
        Schema::dropIfExists('packs');
    }
}
