<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BackendLoaiDoUongRequest;
use Illuminate\Support\Str;
use App\Models\DoUong;
use App\Models\LoaiDoUong;
use App\Models\LoaiSanPham;
use App\Models\SanPham;

class SanPhamTheoLoaiController extends Controller
{

    protected $folder = 'frontend.san_pham_theo_loai.';
    public function index(Request $request,$slug)
    {
     
            $tags=LoaiSanPham::all();
            $loaisanphams = LoaiSanPham::where('slug',$slug)->first();
            if(!$loaisanphams) abort(404);

            $sanphambyloai=SanPham::where('loaisanpham_id',$loaisanphams->id);
            $tukhoa=$request->tim_kiem;
            $sanphamcart=\Cart::content();
            if($tukhoa){
                $sanphambyloai->where('tensanpham','like','%'.$tukhoa.'%');
            }
            $sanphambyloai=$sanphambyloai->get();
            $viewData = [
                'loaisanphams'  => $loaisanphams,
                'sanphambyloai' => $sanphambyloai,
                'tags'         => $tags,
                'query'        => $request->query(),
                'sanphamcart'   => $sanphamcart,
            ];
            return view($this->folder.'index', $viewData);



    }
}