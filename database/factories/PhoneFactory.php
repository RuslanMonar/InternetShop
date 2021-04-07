<?php

namespace Database\Factories;

use App\Models\Phone;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Phone::class;

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
            'screen_diagonal' =>  6.81,
            'screen_resolution' => '3200x1440',
            'screen_refresh_frequency' => 120 ,
            'screen_type' => 'AMOLED',
            'cpu' => 'Qualcomm Snapdragon 888',
            'number_of_cores' => 8,
            'cpu_frequency' => 2.84,
            'inner_memory' => 256,
            'ram' => 8,
            'memory_card_slot' => true,
            'front_camera' => 20,
            'back_camera' => 108,
            'camera_video_resoulion' => '4К UHD (3840x2160)',
            'operating_system' => 'Android 11',
            'charging_type' => 'Безпровідна',
            'usb_type' => ' USB Type-C',
            'body_material' => 'Метал',
            'face_scaner' => true,
            'finger_scaner' => true,
            'color' => 'Голубий',
            'battery_capacity' => 4600,
            'weight' => 196,
            'producing_country' => 'Китай',
            'warranty_period' => 12,
        ];
    }
}



//------------------Used data----------------------
// return [
//     'communication_standart' => 'GSM, 3G, 4G (LTE), 5G',
//     'number_of_sim' => 2,
//     'sim_type' => 'Nano-SIM',
//     'screen_diagonal' =>  6.81,
//     'screen_resolution' => '3200x1440',
//     'screen_refresh_frequency' => 120 ,
//     'screen_type' => 'AMOLED',
//     'cpu' => 'Qualcomm Snapdragon 888',
//     'number_of_cores' => 8,
//     'cpu_frequency' => 2.84,
//     'inner_memory' => 256,
//     'ram' => 8,
//     'memory_card_slot' => true,
//     'front_camera' => 20,
//     'back_camera' => 108,
//     'camera_video_resoulion' => '4К UHD (3840x2160)',
//     'operating_system' => 'Android 11',
//     'charging_type' => 'Безпровідна',
//     'usb_type' => ' USB Type-C',
//     'body_material' => 'Метал',
//     'face_scaner' => true,
//     'finger_scaner' => true,
//     'color' => 'Голубий',
//     'battery_capacity' => 4600,
//     'weight' => 196,
//     'producing_country' => 'Китай',
//     'warranty_period' => 12,
// ];

//--------------------------------------------------
// return [
//             'communication_standart' => 'GSM, 3G, 4G (LTE), 5G',
//             'number_of_sim' => 2,
//             'sim_type' => 'Nano-SIM , e-sim',
//             'screen_diagonal' => 6.7,
//             'screen_resolution' => '2778x1284',
//             'screen_refresh_frequency' => 60  ,
//             'screen_type' => 'OLED',
//             'cpu' => 'A14 Bionic',
//             'number_of_cores' => 6,
//             'cpu_frequency' => 2.84,
//             'inner_memory' => 256,
//             'ram' => 6,
//             'memory_card_slot' => false,
//             'front_camera' => 12,
//             'back_camera' => 64,
//             'camera_video_resoulion' => '4К UHD (3840x2160)',
//             'operating_system' => 'iOS 14',
//             'charging_type' => 'Безпровідна',
//             'usb_type' => 'Lightning',
//             'body_material' => 'Нержавіючий Метал',
//             'face_scaner' => true,
//             'finger_scaner' => false,
//             'color' => 'Чорний',
//             'battery_capacity' => 4600,     
//             'weight' => 226,
//             'producing_country' => 'Китай',
//             'warranty_period' => 24,
//         ];