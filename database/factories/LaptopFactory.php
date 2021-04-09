<?php

namespace Database\Factories;

use App\Models\Laptop;
use Illuminate\Database\Eloquent\Factories\Factory;

class LaptopFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Laptop::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'manufacturer' => 'Xiaomi',
            'screen_diagonal' => 13.3,
            'screen_resolution' => ' 1920x1080',
            'screen_refresh_frequency' => 60,
            'screen_type' => 'IPS',
            'display' => 'Матовий екран',
            'cpu' => ' Intel Core i5-10210U',
            'number_of_cores' => 4,
            'cpu_frequency' => 4.2,
            'inner_memory' => 512,
            'inner_memory_type' => 'SSD',
            'ram' => 8,
            'ram_type' => 'DDR4',
            'video_card' => 'Acer',
            'video_card_memory' => 2,
            'drive' => false,
            'os' => 'Windows 10',
            'body_material' => 'Алюміній',
            'keyboard_language' => 'Украънська,Англійська',
            'color' => 'Срібний',
            'producing_country' => 'Китай',
            'warranty_period' => 12,
            'weight' => 1.23,
        ];
    }
}
