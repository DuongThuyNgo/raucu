<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChiTietBaiVietController extends Controller
{
    protected $folder='backend.chi_tiet_bai_viet.';
     public function index(){
    	return view($this->folder.'index');
    }
}