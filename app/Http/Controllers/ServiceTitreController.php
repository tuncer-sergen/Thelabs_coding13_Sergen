<?php

namespace App\Http\Controllers;

use App\Models\ServiceTitre;
use Illuminate\Http\Request;

class ServiceTitreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\ServiceTitre  $serviceTitre
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceTitre $serviceTitre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceTitre  $serviceTitre
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = ServiceTitre::find($id);
        return view('admin.home.serviceHome.serviceTitre_edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceTitre  $serviceTitre
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $newEntry = ServiceTitre::find($id);
        $newEntry->titre = $request->titre;
        $newEntry->save();
        return redirect('/serviceHome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceTitre  $serviceTitre
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceTitre $serviceTitre)
    {
        //
    }
}
