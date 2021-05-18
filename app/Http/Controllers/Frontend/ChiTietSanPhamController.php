<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\LoaiSanPham;

class ChiTietSanPhamController extends Controller
{
    protected $folder='frontend.chi_tiet_san_pham.';
     public function index(Request $request,$slug){
    	$sanphamchitiet = SanPham::where('slug',$slug)->first();
        $sanphamtt=SanPham::where('loaisanpham_id',$sanphamchitiet->loaisanpham_id)->limit(10)->get();
        $sanphamcart=\Cart::content();
        $viewData=[
            'sanphamchitiet'=>$sanphamchitiet,
            'sanphamtt'=>$sanphamtt,
            'sanphamcart'=>$sanphamcart,
        ];
       return view($this->folder.'index',$viewData);

    }
}