<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\TinTuc;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class BackendTinTucController extends Controller
{
    protected $folder = 'backend.bai_viet.';
    public function index()
    {
        $tintucs = TinTuc::orderByDesc('id')->paginate(100);
        $viewData = [
            'tintucs' => $tintucs,
        ];
        return view($this->folder . 'index', $viewData);
    }

    public function create()
    {

        $tintuc = TinTuc::all();
        $viewData = [
            'tintuc' => $tintuc,
        ];

        return view($this->folder . 'create', $viewData);
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['slug'] = Str::slug($request->tieude);
        $data['thoigiandang'] = Carbon::now();
        if ($request->hinhanh) {
            $image = upload_image('hinhanh');

            if (isset($image['code'])) {
                $data['hinhanh'] = $image['name'];
            }
        }
        TinTuc::create($data);
        return redirect()->back()->with('success', 'Thêm thành công!');
    }

    public function edit($id)
    {
        $tintucs = TinTuc::find($id);
        //dd($tintucs);
        $viewData = [
            'tintucs' => $tintucs,
        ];
        return view($this->folder . 'update', $viewData);
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
        TinTuc::find($id)->update($data);

        return redirect()->back()->with('success', 'Sửa thành công!');
    }
    public function delete($id)
    {
        DB::table('tintuc')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Xóa thành công!');
    }
}