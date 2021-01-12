<?php

namespace App\Http\Controllers;

use App\Models\ContactMap;
use Illuminate\Http\Request;

class ContactMapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $map = ContactMap::all();
        return view('admin.contact.maps',compact('map'));
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
     * @param  \App\Models\ContactMap  $contactMap
     * @return \Illuminate\Http\Response
     */
    public function show(ContactMap $contactMap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactMap  $contactMap
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactMap $contactMap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactMap  $contactMap
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $newEntry = ContactMap::find($id);
        $newEntry->adresse = $request->adresse;
        $newEntry->save();
        return redirect('/contactMap');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactMap  $contactMap
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactMap $contactMap)
    {
        //
    }
}
