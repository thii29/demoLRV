<?php

namespace App\Http\Controllers;

use App\Models\nhaxb;
use Illuminate\Http\Request;

class NhaxbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.nhaxb.index',['nhaxb'=>nhaxb::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //dd($request->all());
        $request->validate([
            'manxb'=>'required|unique:nhaxb|max:5',
            'tennxb'=>'required|min:5',
        ],[
            
        ]);
        nhaxb::create($request->all());
        return redirect()->route('ad.nxb.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nhaxb  $nhaxb
     * @return \Illuminate\Http\Response
     */
    public function show(nhaxb $nhaxb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nhaxb  $nhaxb
     * @return \Illuminate\Http\Response
     */
    public function edit(nhaxb $nhaxb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nhaxb  $nhaxb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nhaxb $nhaxb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nhaxb  $nhaxb
     * @return \Illuminate\Http\Response
     */
    public function destroy(nhaxb $nhaxb)
    {
        //
    }
}
