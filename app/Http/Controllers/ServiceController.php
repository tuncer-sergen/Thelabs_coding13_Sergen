<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceTitre;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Service::orderBy('id','desc')->get();
        $titre = serviceTitre::all();
        return view('admin.home.serviceHome.service_show',compact('datas','titre'));
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
        $newEntry = new Service;
        $newEntry->iconeService = $request->iconeService;
        $newEntry->titreService = $request->titreService;
        $newEntry->textService = $request->textService;
        $newEntry->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Service::find($id);
        return view('admin.home.serviceHome.service_edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $update = Service::find($id);
        $update->iconeService = $request->iconeService;
        $update->titreService = $request->titreService;
        $update->textService = $request->textService;
        $update->save();
        return redirect('/serviceHome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newDelete = Service::find($id);
        $newDelete->delete();
        return redirect()->back();
    }
}
