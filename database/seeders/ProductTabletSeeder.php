<?php

namespace Database\Seeders;

use App\Models\Tablet;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTabletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(1)->for(
            Tablet::factory(),
            'productable'
        )->create();
    }
}
