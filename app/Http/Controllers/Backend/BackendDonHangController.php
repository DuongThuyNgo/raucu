<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ChiTietDonHang;
use App\Models\DonHang;

class BackendDonHangController extends Controller
{
    protected $folder = 'backend.don_hang.';
    public function index()
    {
        $donhang = DonHang::orderByDesc('id')->paginate(100);
        $viewData = [
            'donhang' => $donhang,
        ];
        return view($this->folder . 'index', $viewData);
    }

    public function view($id)
    {
        $donhang = DonHang::find($id);
        $ctdonhang = ChiTietDonHang::with('douong')->where('donhang_di', $id)->get();
        $viewData = [
            'donhang' => $donhang,
            'ctdonhang' => $ctdonhang,
        ];
        return view($this->folder . 'item', $viewData);
    }

    public function success($id)
    {
        $donhang = DonHang::find($id);
        $donhang->trangthai = DonHang::STATUS_SUCCESS;
        $donhang->save();
        return redirect()->back();
    }

    public function cancel($id)
    {
        $donhang = DonHang::find($id);
        $donhang->trangthai = DonHang::STATUS_CANCEL;
        $donhang->save();
        return redirect()->back();
    }
}