<?php

namespace App\Http\Controllers;

use App\Models\banniereImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BanniereImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = banniereImg::all();
        return view('admin.home.banniere.banniereImg_show',compact('datas'));
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
        $newEntry = new banniereImg;
        $newEntry->image = $request->file('image')->hashName();
        $newEntry->save();
        $request->file('image')->storePublicly('img','public'); 
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\banniereImg  $banniereImg
     * @return \Illuminate\Http\Response
     */
    public function show(banniereImg $banniereImg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\banniereImg  $banniereImg
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = banniereImg::find($id);
        return view('admin.home.banniere.banniereImg_edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\banniereImg  $banniereImg
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $newEdit = banniereImg::find($id);
        Storage::disk('public')->delete('img/'.$newEdit->image);
        $newEdit->image = $request->file('image')->hashName();
        $newEdit->save();
        $request->file('image')->storePublicly('img','public');
        return redirect('/banniereImg');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\banniereImg  $banniereImg
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newDelete = banniereImg::find($id);
        $newDelete->delete();
        Storage::disk('public')->delete('img/'.$newDelete->image);
        return redirect()->back();
    }
}
