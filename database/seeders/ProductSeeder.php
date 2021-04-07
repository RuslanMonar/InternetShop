<?php

namespace Database\Seeders;

use App\Models\Phone;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(1)->for(
            Phone::factory(),
            'productable'
        )->create();
    }
}
