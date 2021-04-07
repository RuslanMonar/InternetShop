<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptop', function (Blueprint $table) {
            $table->increments('id');
            $table->string('manufacturer');
            $table->float('screen_diagonal');
            $table->string('screen_resolution');
            $table->integer('screen_refresh_frequency');
            $table->string('screen_type');
            $table->string('display');//матовий екран
            $table->string('cpu');
            $table->integer('number_of_cores');
            $table->float('cpu_frequency');
            $table->integer('inner_memory');
            $table->string('inner_memory_type');
            $table->integer('ram');
            $table->string('ram_type');
            $table->string('video_card');
            $table->integer('video_card_memory');
            $table->boolean('drive');
            $table->integer('battery');
            $table->string('body_material');
            $table->string('keyboard_language');
            $table->string('color');
            $table->string('producing_country');
            $table->integer('warranty_period');
            $table->float('weight');
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
        Schema::dropIfExists('laptop');
    }
}
