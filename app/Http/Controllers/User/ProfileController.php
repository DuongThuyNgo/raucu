<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        $douongcart=\Cart::content();
        $viewData=[

            'douongcart' =>$douongcart,
            'user' =>$user,
        ];
        return view('user.profile',$viewData);
    }
    public function update(Request $request,$id)
    {
        $data=$request->except('_token');
        User::find($id)->update($data);
        return redirect()->back()->with('success','Sửa thành công!');
    }
}
