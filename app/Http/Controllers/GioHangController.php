<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sach;
use Cart;
use Darryldecode\Cart\Cart as CartCart;

class GioHangController extends Controller
{
    //
    public function index(){
        return view('user.giohang');
    }
    public function add(Request $re){
        //dd($re->all());
        $s = sach::find($re->masach);
        $row = ['id'=> $s->masach, 'name'=>$s->tensach,
                'price'=>$s->gia,'quantity'=>$re->soluong,
                'attributes'=>['image'=>$s->hinh]];
        Cart::add($row);
        return redirect()->route('showgiohang');
    }
    public function remove(Request $re){
        Cart::remove($re->id);
        return redirect()->route('showgiohang');
    }
    public function update(Request $re){
        Cart::update($re->id,['quantity'=>$re->quantity]);
        return redirect()->route('showgiohang');
    }
}
