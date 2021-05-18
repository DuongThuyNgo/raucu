<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BackendLoaiSanPhamRequest;
use App\Models\LoaiSanPham;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class BackendLoaiSanPhamController extends Controller
{
    protected $folder = 'backend.loai_san_pham.';
    public function index()
    {
        $loaisanpham = LoaiSanPham::orderByDesc('id')->paginate(20);
        $viewData = [
            'loaisanpham' => $loaisanpham,
        ];
        return view($this->folder . 'index', $viewData);
    }

    public function create()
    {
        $loaisanpham = LoaiSanPham::all();
        $viewData = [
            'loaisanpham' => $loaisanpham,
        ];

        return view($this->folder . 'create', $viewData);
    }

    public function store(BackendLoaiSanPhamRequest $request)
    {
        $data = $request->except('_token');
        $data['slug'] = Str::slug($request->tenloai);
        LoaiSanPham::create($data);

        return redirect()->back()->with('success', 'Thêm thành công!');

    }

    public function edit($id)
    {
        $loaisanphams = LoaiSanPham::find($id);
        $viewData = [
            'loaisanphams' => $loaisanphams,
        ];
        return view($this->folder . 'update', $viewData);
    }

    public function update(BackendLoaiSanPhamRequest $request, $id)
    {
        $data = $request->except('_token');
        LoaiSanPham::find($id)->update($data);
        return redirect()->back()->with('success', 'Sửa thành công!');

    }
    public function delete($id)
    {
        DB::table('loaisanpham')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Xóa thành công!');
    }
}