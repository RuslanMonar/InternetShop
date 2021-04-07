<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('communication_standart');
            $table->integer('number_of_sim');
            $table->string('sim_type');
            $table->float('screen_diagonal');
            $table->string('screen_resolution');
            $table->integer('screen_refresh_frequency');
            $table->string('screen_type');
            $table->string('cpu');
            $table->integer('number_of_cores');
            $table->float('cpu_frequency');
            $table->integer('inner_memory');
            $table->string('ram');
            $table->boolean('memory_card_slot');
            $table->float('front_camera');
            $table->float('back_camera');
            $table->string('camera_video_resoulion');
            $table->string('operating_system');
            $table->string('charging_type'); //Провідна безпровідна
            $table->string('usb_type'); 
            $table->string('body_material'); 
            $table->boolean('face_scaner'); 
            $table->boolean('finger_scaner'); 
            $table->string('color');
            $table->integer('battery_capacity');
            $table->float('weight');
            $table->string('producing_country');
            $table->integer('warranty_period');
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
        Schema::dropIfExists('phones');
    }
}
