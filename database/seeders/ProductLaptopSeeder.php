<?php

namespace Database\Seeders;

use App\Models\Laptop;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductLaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(1)->for(
            Laptop::factory(),
            'productable'
        )->create();
    }
}
