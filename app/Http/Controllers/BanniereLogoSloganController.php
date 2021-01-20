<?php

namespace App\Http\Controllers;

use App\Models\banniereLogoSlogan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class BanniereLogoSloganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = banniereLogoSlogan::all();
        return view('admin.home.banniere.banniereLogo&slogan_show',compact('datas'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\banniereLogoSlogan  $banniereLogoSlogan
     * @return \Illuminate\Http\Response
     */
    public function show(banniereLogoSlogan $banniereLogoSlogan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\banniereLogoSlogan  $banniereLogoSlogan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $edit = banniereLogoSlogan::find($id);
        return view('admin.home.banniere.banniereLogo&slogan_edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\banniereLogoSlogan  $banniereLogoSlogan
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $validated = $request->validate([
            'slogan' => 'required',
            'logo' => 'required',
        ]);
 
        $newEntry = banniereLogoSlogan::find($id);
        $newEntry->slogan = $request->slogan;
        if($newEntry->logo != 'logo.png'){
            Storage::disk('public')->delete('img/'.$newEntry->logo);
            Storage::disk('public')->delete('img/mini-'.$newEntry->logo);
        }
        $newEntry->logo = $request->file('logo')->hashName();
        $newEntry->save();
        $request->file('logo')->storePublicly('img','public');
        $img = Image::make('img/'.$newEntry->logo)->resize(100,100);
        $img->save('img/mini-'.$newEntry->logo);
        return redirect('/banniereLogoSlogan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\banniereLogoSlogan  $banniereLogoSlogan
     * @return \Illuminate\Http\Response
     */
    public function destroy(banniereLogoSlogan $banniereLogoSlogan)
    {
        //
    }
}
