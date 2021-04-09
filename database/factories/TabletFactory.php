<?php

namespace Database\Factories;

use App\Models\Tablet;
use Illuminate\Database\Eloquent\Factories\Factory;

class TabletFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tablet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'communication_standart' => 'GSM, 3G, 4G (LTE), 5G',
            'number_of_sim' => 2,
            'sim_type' => 'Nano-SIM',
            'screen_diagonal' => 10.4,
            'screen_resolution' => '2000x1200',
            'screen_type' => 'TFT',
            'cpu' => 'Qualcomm Snapdragon 662',
            'number_of_cores' => 8,
            'cpu_frequency' => 2,
            'inner_memory' => 32,
            'ram' => 3,
            'memory_card_slot' => true,
            'front_camera' => 5,
            'back_camera' => 8,
            'camera_video_resoulion' => 'FHD (1920 x 1080) для 30 кадр/с',
            'operating_system' => 'Android 11',
            'charging_type' => 'Провідна',
            'usb_type' => 'USB Type-C',
            'body_material' => 'Нержавіючий Метал',
            'color' => 'Cрібний',
            'battery_capacity' => 7040,     
            'weight' => 477,
            'producing_country' => 'Південна Корея',
            'warranty_period' => 12,
        ];
    }
}
