<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\TestimonialTitre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Testimonial::orderBy('id', 'desc')->get();
        $titre = TestimonialTitre::all();
        
        return view('admin.home.testimonial.testimonial_show',compact('datas','titre'));
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
        $validated = $request->validate([
            'commentaire' => 'required',
            'image' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'poste' => 'required',
        ]);
        $newEntry = new Testimonial;
        $newEntry->commentaire = $request->commentaire;
        $newEntry->image = $request->file('image')->hashName(); 
        $newEntry->nom = $request->nom;
        $newEntry->prenom = $request->prenom;
        $newEntry->poste = $request->poste;
        $newEntry->save();
        $request->file('image')->storePublicly('img/avatar/','public');
        return redirect('/testimonial');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Testimonial::find($id);
        return view('admin.home.testimonial.testimonial_edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $validated = $request->validate([
            'commentaire' => 'required',
            'image' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'poste' => 'required',
        ]);
        $update = Testimonial::find($id);
        $update->commentaire = $request->commentaire;
        if($update->image != '01.jpg' && $update->image != '02.jpg' && $update->image !='03.jpg'){
        Storage::disk('public')->delete('img/avatar/'.$update->image);
        }
        $update->image = $request->file('image')->hashName();
        $update->nom = $request->nom;
        $update->prenom = $request->prenom;
        $update->poste = $request->poste;
        $update->save();
        $request->file('image')->storePublicly('img/avatar/','public');
        return redirect('/testimonial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newDelete = Testimonial::find($id);
        $newDelete->delete();
        Storage::disk('public')->delete('img/avatar/'.$newDelete->image);
        return redirect()->back();
    }
}
