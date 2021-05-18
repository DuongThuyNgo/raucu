<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\TinTuc;
use Illuminate\Http\Request;

class TinTucController extends Controller
{
    protected $folder='frontend.bai_viet.';
    //protected $folder='backend.do_uong.';

   public function index(){
    $tintucs = TinTuc::orderByDesc('id')->get();
    $tintucnews=TinTuc::orderByDesc('id')->limit(3)->get();
    $viewData=[
            'tintucs'=>$tintucs,
            'tintucnews'=>$tintucnews,
        ];
       return view($this->folder.'index',$viewData);
   }

}