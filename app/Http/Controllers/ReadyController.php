<?php

namespace App\Http\Controllers;

use App\Models\Ready;
use Illuminate\Http\Request;

class ReadyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Ready::all();
        return view('admin.home.ready.ready_show',compact('datas'));
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
     * @param  \App\Models\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function show(Ready $ready)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Ready::find($id);
        return view('admin.home.ready.ready_edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $newEntry = Ready::find($id);
        $newEntry->readyTitre = $request->readyTitre;
        $newEntry->readySousTitre = $request->readySousTitre;
        $newEntry->readyBoutton = $request->readyBoutton;
        $newEntry->save();
        return redirect('/ready');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ready  $ready
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ready $ready)
    {
        //
    }
}
