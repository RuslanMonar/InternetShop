<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => 'Apple iPhone 12 Pro Max 256GB Pacific Blue (MGDF3)',
            'price' => 44999,
            'quantity' => 120,
            'rating' => 4.9,
            'front_image' => 'https://i.allo.ua/media/catalog/product/cache/1/image/710x600/602f0fa2c1f0d1ba5e241f914e856ff9/i/p/iphone-12-pro-max-blue-hero_4.jpg'
        ];
    }
}


// ------------Used data-----------------
// return [
//     'product_name' => 'Xiaomi Mi 11 8/256GB Horizon Blue',
//     'price' => 26999,
//     'quantity' => 5,
//     'rating' => 4.6,
//     'front_image' => 'https://i.allo.ua/media/catalog/product/cache/1/image/710x600/602f0fa2c1f0d1ba5e241f914e856ff9/x/i/xiaomi_mi_11_horizon_blue_1_1.jpg'
// ];