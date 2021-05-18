<?php



namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\SanPham;
use App\Models\LoaiSanPham;
use App\Models\GiaBan;
use Cart;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    protected $folder        = 'frontend.home.';
    protected $folder_search = 'frontend.san_pham_theo_loai.';
    //protected $folder='backend.do_uong.';

    public function index(Request $request){

        $loaisanpham    = LoaiSanPham::all();
        $sanphamnews    = SanPham::orderByDesc('id')->limit(10)->get();
        $tags          = LoaiSanPham::all();
        $tukhoa        = $request->tim_kiem;
        $sanphamcart    = \Cart::content();
        $datenow       = Carbon::now();

        $giabans = GiaBan::where('ngayhieuluc', '<=', $datenow)
                ->where('ngayhethieuluc', '>=', $datenow)
                ->with('douong:id,tendouong,gia,hinhanh,slug')
                ->get();

        if($giabans){
            $viewData = [
                'giabans'    => $giabans,
                'loaisanpham' => $loaisanpham,
                'sanphamcart' => $sanphamcart,
                'sanphamnews' => $sanphamnews
            ];
            return view($this->folder.'index',$viewData);
        }


        if($tukhoa)
        {
            $search_sanpham = SanPham::where('tensanpham','like','%'.$tukhoa.'%')->get();
            $viewData = [
                'search_sanpham' => $search_sanpham,
                'tags'          => $tags,
                'sanphamcart'    => $sanphamcart,
                'query'         => $request->query(),
            ];
            return view($this->folder.'search',$viewData);
        }


        $viewData =[
            'giabans'    => $giabans,
            'loaisanpham' => $loaisanpham,
            'sanphamcart' => $sanphamcart,
            'sanphamnews' => $sanphamnews
        ];
        return view($this->folder.'index',$viewData);
   }


    
}