<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\TeamTitre;
use App\Models\ChoixTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Team::all();
        $titre = TeamTitre::all();
        return view('admin.home.team.team_show',compact('datas','titre'));
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
        $newEntry = new Team;
        $newEntry->imageTeam = $request->file('imageTeam')->hashName();
        $newEntry->nomTeam = $request->nomTeam;
        $newEntry->prenomTeam = $request->prenomTeam;
        $newEntry->posteTeam = $request->posteTeam;
        $newEntry->save();
        $request->file('imageTeam')->storePublicly('img/team','public');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Team::find($id);
        return view('admin.home.team.team_edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $update = Team::find($id);
        if($update->imageTeam != '1.jpg' && $update->imageTeam != '2.jpg' && $update->imageTeam != '3.jpg'){
        Storage::disk('public')->delete('img/team/'.$update->imageTeam);
        }
        $update->imageTeam = $request->file('imageTeam')->hashName();
        $update->nomTeam = $request->nomTeam;
        $update->prenomTeam = $request->prenomTeam;
        $update->posteTeam = $request->posteTeam;
        $update->save();
        $request->file('imageTeam')->storePublicly('img/team','public');
        return redirect('/team');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newDelete = Team::find($id);
        $newDelete->delete();
        Storage::disk('public')->delete('img/team/'.$newDelete->imageTeam);
        return redirect()->back();
    }
    public function choix(Request $request){
        $choixDelete = ChoixTeam::all();
        $choixDelete[0]->delete();
        $choix = new ChoixTeam;
        $choix->choix_id = $request->choix_id;
        $choix->save();
        return redirect()->back();
    }
}
