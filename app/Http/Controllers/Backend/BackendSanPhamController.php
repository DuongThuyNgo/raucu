<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SanPham;
use App\Models\LoaiSanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BackendDoUongController extends Controller
{
    protected $folder = 'backend.san_pham.';
    public function index()
    {
        $sanphams = SanPham::with('loaisanpham:id,tenloai')->orderByDesc('id')->paginate(100);
        $viewData = [
            'sanphams' => $sanphams,
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

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['slug'] = Str::slug($request->tendouong);
        if ($request->hinhanh) {
            $image = upload_image('hinhanh');
            if (isset($image['code'])) {
                $data['hinhanh'] = $image['name'];
            }
        }
        SanPham::create($data);
        return redirect()->back()->with('success', 'Thêm thành công!');

    }

    public function edit($id)
    {
        $loaisanpham = LoaiSanPham::all();
        $sanphams = SanPham::find($id);

        $viewData = [
            'loaisanpham' => $loaisanpham,
            'sanphams' => $sanphams,
        ];
        return view($this->folder . 'update', $viewData);
    }

    public function editview($id)
    {
        $loaisanpham = LoaiSanPham::all();
        $sanphams = SanPham::find($id);

        $viewData = [
            'loaisanpham' => $loaisanpham,
            'sanphams' => $sanphams,
        ];
        return view($this->folder . 'view', $viewData);
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        if ($request->hinhanh) {
            $image = upload_image('hinhanh');

            if (isset($image['code'])) {
                $data['hinhanh'] = $image['name'];
            }
        }
        SanPham::find($id)->update($data);

        return redirect()->back()->with('success', 'Sửa thành công!');

    }
    public function delete($id)
    {
        DB::table('sanpham')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Xóa thành công!');
    }

}