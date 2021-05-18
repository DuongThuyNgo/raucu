<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class DonHang extends Model
{
    use HasFactory;
    protected $guarded=[''];
    protected $table='donhang';
    const STATUS_DEFAULT=1;
    const STATUS_SUCCESS=2;
    const STATUS_CANCEL=-1;
    public $status=[
        self::STATUS_DEFAULT =>[
            'name'=>'Mặc định',
            'class'=>'text-muted'
        ],
        self::STATUS_SUCCESS =>[
            'name'=>'Đã giao dịch',
            'class'=>'text-success'
        ],
        self::STATUS_CANCEL =>[
            'name'=>'Hủy bỏ',
            'class'=>'text-danger'
        ],

    ];

    public function getStatus(){
        return Arr::get($this->status,$this->trangthai,[]);
    }

}