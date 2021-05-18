<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoaiSanPham;
use App\Models\LoaiSanPham;

class LeftMenuController extends Controller
{
    protected $folder='frontend.left_menu.';
    //protected $folder='backend.do_uong.';

   public function index(){

    $loaisanphams1 = LoaiSanPham::get();
    $viewData=[
            'loaisanphams1'=>$loaisanphams1,
        ];
       return view($this->folder.'index',$viewData);
   }

}