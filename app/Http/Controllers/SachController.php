<?php

namespace App\Http\Controllers;

use App\Models\nhaxb;
use App\Models\sach;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class SachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.sach.indexsach',['sach'=>sach::paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.sach.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $request->validate([
           'masach'=>'required|unique:sach|max:15',
           'tensach'=>'required',
           'hinh'=>'image|mimes:png,jpg,gif,jpeg|max:2048',
       ],[
           'masach.unique'=>'Ma sach da ton tai!',
           'masach.required'=>'Chua dien ma sach',
           'tensach.required'=>'Ten sach khong duoc bo trong'
       ]);
        //dd($request->all());
        //luu hinh vao server
        $nameImage=time(). '-' .$request->hinh->getClientOriginalName();
        $request->hinh->move(public_path('asset/image'),$nameImage);
        $data = $request->all();
        $data['hinh']=$nameImage;
        sach::create($data);
        return redirect()->route('ad.sach.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sach  $sach
     * @return \Illuminate\Http\Response
     */
    public function show(sach $sach)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sach  $sach
     * @return \Illuminate\Http\Response
     */
    public function edit(sach $sach)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sach  $sach
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sach $sach)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sach  $sach
     * @return \Illuminate\Http\Response
     */
    public function destroy(sach $sach)
    {
        //
    }
}
