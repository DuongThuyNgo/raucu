<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDonNhap extends Model
{
    use HasFactory;
    protected $guarded=[''];
    protected $table='chitiethoadonnhap';
    public function sanpham(){
        return $this->belongsTo(SanPham::class,'sanpham_id');
    }
}