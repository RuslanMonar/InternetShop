<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->morphs('productable');
            $table->string('title');
            $table->float('price');
            $table->integer('quantity');
            $table->float('rating')->default(0);
            $table->timestamps();
        });
        DB::statement('ALTER TABLE products ADD CONSTRAINT chk_rating_value CHECK (rating <= 5 AND rating >= 0);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
