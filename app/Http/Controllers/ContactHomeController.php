<?php

namespace App\Http\Controllers;

use App\Models\ContactHome;
use Illuminate\Http\Request;

class ContactHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = ContactHome::all();
        return view('admin.home.contact.contact_show',compact('datas'));
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
     * @param  \App\Models\ContactHome  $contactHome
     * @return \Illuminate\Http\Response
     */
    public function show(ContactHome $contactHome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactHome  $contactHome
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = ContactHome::find($id);
        return view('admin.home.contact.contact_edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactHome  $contactHome
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $newEntry = ContactHome::find($id);
        $newEntry->titreContact = $request->titreContact;
        $newEntry->textContact = $request->textContact;
        $newEntry->sousTitreContact = $request->sousTitreContact;
        $newEntry->rueContact = $request->rueContact;
        $newEntry->codePostalContact = $request->codePostalContact;
        $newEntry->telContact = $request->telContact;
        $newEntry->emailContact = $request->emailContact;
        $newEntry->btnContact = $request->btnContact;
        $newEntry->save();
        return redirect('/contactHome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactHome  $contactHome
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactHome $contactHome)
    {
        //
    }
}
