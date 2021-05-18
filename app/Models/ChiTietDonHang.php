<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    use HasFactory;
    protected $guarded=[''];
    protected $table='chitietdonhang';
    public function sanpham(){
        return $this->belongsTo(SanPham::class,'sanpham_id');
    }
}