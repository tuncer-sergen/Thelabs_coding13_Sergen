<?php

namespace App\Http\Controllers;

use App\Models\ServicePrime;
use Illuminate\Http\Request;

class ServicePrimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = ServicePrime::all();
        return view('admin.servicePrime.servicePrimeTitre_show',compact('datas'));
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
     * @param  \App\Models\ServicePrime  $servicePrime
     * @return \Illuminate\Http\Response
     */
    public function show(ServicePrime $servicePrime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicePrime  $servicePrime
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = ServicePrime::find($id);
        return view('admin.servicePrime.servicePrimeTitre_edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServicePrime  $servicePrime
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $validated = $request->validate([
            'titreServicePrime' => 'required',
            'btnServicePrime' => 'required',
        ]);
        $newEntry = ServicePrime::find($id);
        $newEntry->titreServicePrime = $request->titreServicePrime;
        $newEntry->btnServicePrime = $request->btnServicePrime;
        $newEntry->save();
        return redirect('/servicePrime');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicePrime  $servicePrime
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicePrime $servicePrime)
    {
        //
    }
}
