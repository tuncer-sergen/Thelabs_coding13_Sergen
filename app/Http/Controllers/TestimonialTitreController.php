<?php

namespace App\Http\Controllers;

use App\Models\TestimonialTitre;
use Illuminate\Http\Request;

class TestimonialTitreController extends Controller
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
     * @param  \App\Models\TestimonialTitre  $testimonialTitre
     * @return \Illuminate\Http\Response
     */
    public function show(TestimonialTitre $testimonialTitre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestimonialTitre  $testimonialTitre
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = TestimonialTitre::find($id);
        return view('admin.home.testimonial.testimonialTitre_edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestimonialTitre  $testimonialTitre
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required',
        ]);
        $newEntry = TestimonialTitre::find($id);
        $newEntry->titre = $request->titre;
        $newEntry->save();
        return redirect('/testimonial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestimonialTitre  $testimonialTitre
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestimonialTitre $testimonialTitre)
    {
        //
    }
}
