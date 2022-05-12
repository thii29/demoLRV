<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\loai;

class LoaiController extends Controller
{
    //CRUD: Loại
    public function index(){
        //hien thi ds loai
       // return view('admin.loai.index',['data'=> DB::table('loai')->get(),
                                     //   'tieude'=>'Danh mục loại']);
         return view('admin.loai.index',['data'=>loai::all()]);
    }
    public function create(){
        return view('admin.loai.create');
    }
    public function store(Request $request){
        $data=new loai();
        $data->maloai=$request->maloai;
        $data->tenloai=$request->tenloai;
        $data->save();
        return redirect()->route('ad.loai');
    }
    public function destroy(Request $re){
        //xoa dung delete chu hong dung get (nay thi hong biet thiet :v)
        $obj = loai::find($re->maloai); // tra ve 1 dong co khoa chinh la ma loai
        $obj->delete();
        // xoa roi thi thong bao
        return redirect()->route('ad.loai');
    }
    public function show($id){

        $data = loai::find($id);
        //$data = loai::where(['maloai'=>$id])->first();
        return view('admin.loai.showdetail',['loai'=>$data]);
    }
    public function edit($id){
        return view('admin.loai.editform',['loai'=>loai::find($id)]);
    }
    public function update(Request $re){
        //dd($re->all());
        $obj = loai::find($re->maloai);
        $obj->tenloai=$re->tenloai;
        $obj->save();
        // lam bai lon nho them thong bao
        return redirect()->route('ad.loai');
    }
}
