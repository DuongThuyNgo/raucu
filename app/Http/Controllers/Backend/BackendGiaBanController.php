<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BackendGiaBanRequest;
use App\Models\DoUong;
use App\Models\GiaBan;
use Illuminate\Support\Facades\DB;

class BackendGiaBanController extends Controller
{
    protected $folder = 'backend.gia_ban.';
    public function index()
    {
        $giabans = GiaBan::with('douong:id,tendouong')->orderByDesc('id')->paginate(10);
        $viewData = [
            'giabans' => $giabans,
        ];
        return view($this->folder . 'index', $viewData);
    }

    public function create()
    {
        $douong = DoUong::all();
        $viewData = [
            'douong' => $douong,
        ];

        return view($this->folder . 'create', $viewData);
    }

    public function store(BackendGiaBanRequest $request)
    {
        $data = $request->except('_token');
        GiaBan::create($data);

        return redirect()->back()->with('success', 'Thêm thành công!');
    }

    public function edit($id)
    {
        $douong = DoUong::all();
        $giabans = GiaBan::find($id);

        $viewData = [
            'douong' => $douong,
            'giabans' => $giabans,
        ];
        return view($this->folder . 'update', $viewData);
    }

    public function update(BackendGiaBanRequest $request, $id)
    {
        $data = $request->except('_token');
        GiaBan::find($id)->update($data);
        return redirect()->back()->with('success', 'Sửa thành công!');

    }
    public function delete($id)
    {
        DB::table('giaban')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Xóa thành công!');
    }
}