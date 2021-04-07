<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = [
        'communication_standart',
        'number_of_sim',
        'sim_type',
        'screen_diagonal',
        'screen_resolution',
        'screen_refresh_frequency',
        'screen_type',
        'cpu',
        'number_of_cores',
        'cpu_frequency',
        'inner_memory',
        'ram',
        'memory_card_slot',
        'front_camera',
        'back_camera',
        'camera_video_resoulion',
        'operating_system',
        'charging_type',
        'usb_type',
        'body_material',
        'face_scaner',
        'finger_scaner',
        'color',
        'battery_capacity',
        'weight',
        'producing_country',
        'warranty_period'
    ];

    public function product(){
        return $this->morphOne(Product::class, 'productable');
    }
}
