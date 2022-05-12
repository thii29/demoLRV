<?php

namespace App\Http\Controllers;

use App\Models\khachhang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('user.login');
    }
    public function check(Request $re){
        //dd($re->all());
        $u = khachhang::find($re->email);
        if(!$u){
            session()->flash('mess','Không có email này!');
            return redirect()->route('login');
        }
        if(Hash::check($re->matkhau,$u->matkhau)){
            // yes
            session()->put('dangnhap',['email'=>$u->email, 'tenkh'=>$u->tenkh]);
            return redirect('/');
        }else{
            //no
            session()->flash('mess','sai passsword!');
            return redirect()->route('login');
        }
    }
}
