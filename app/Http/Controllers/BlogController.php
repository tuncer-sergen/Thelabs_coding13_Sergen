<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Tag;
use App\Models\Categorie;
use App\Models\Menu;
use App\Models\banniereLogoSlogan;
use App\Models\Newsletter;
use App\Mail\newsLetterSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Models\Commentaire;
use DateTime;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Blog::all();
        $tag = Tag::all();
        $cat = Categorie::all();
        return view('admin.blog.blog_show',compact('datas','tag','cat'));
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
            'imageBlog' => 'required',
            'titreBlog' => 'required',
            'descriptionBlog' => 'required',
            'textAuteur' => 'required',
            'textBlog' => 'required',
            'tag' => 'required',
            'categorie' => 'required',
        ]);
        $newEntry = new Blog;
        $newEntry->imageBlog = $request->file('imageBlog')->hashName();
        $dateToday = new DateTime();
        $date = $dateToday->format('Y-m-d');
        $newEntry->date = $date;
        $newEntry->titreBlog = $request->titreBlog;
        $newEntry->descriptionBlog = $request->descriptionBlog;
        $newEntry->auteurBlog = Auth::user()->name;
        $newEntry->photoProfilAuteur = Auth::user()->src;
        $newEntry->textAuteur = $request->textAuteur;
        $newEntry->textBlog = $request->textBlog;
        $newEntry->save();
        $newEntry->tag()->sync($request->tag);
        $newEntry->categorie()->sync($request->categorie);
        $request->file('imageBlog')->storePublicly('img/blog/','public');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Blog::find($id);
        $tag = Tag::all();
        $cat = Categorie::all();
        return view('admin.blog.blog_edit',compact('edit','tag','cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $validated = $request->validate([
            'imageBlog' => 'required',
            'titreBlog' => 'required',
            'descriptionBlog' => 'required',
            'textAuteur' => 'required',
            'textBlog' => 'required',
            'tag' => 'required',
            'categorie' => 'required',
        ]);
        
        $update = Blog::find($id);
        if($update->imageBlog != 'blog-2.jpg' && $update->imageBlog != 'blog-1.jpg' && $update->imageBlog != 'blog-3.jpg'){
            Storage::disk('public')->delete('img/blog/'.$update->imageBlog);
        }
        $update->imageBlog = $request->file('imageBlog')->hashName();
        $dateToday = new DateTime();
        $date = $dateToday->format('Y-m-d');
        $update->date = $date;
        $update->titreBlog = $request->titreBlog;
        $update->descriptionBlog = $request->descriptionBlog;
        $update->auteurBlog = Auth::user()->name;
        if($update->photoProfilAuteur != '01.jpg' && $update->photoProfilAuteur != '02.jpg' && $update->photoProfilAuteur != '03.jpg'){
            Storage::disk('public')->delete('img/avatar/'.$update->photoProfilAuteur);
        }
        $update->photoProfilAuteur = Auth::user()->src;
        $update->textAuteur = $request->textAuteur;
        $update->textBlog = $request->textBlog;
        $update->tag()->sync($request->tag);
        $update->categorie()->sync($request->categorie);
        $update->confirmer = false;
        $update->save();
        $request->file('imageBlog')->storePublicly('img/blog/','public');
        return redirect('/blogAdmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $newDelete = Blog::find($id);
        if($newDelete->imageBlog != 'blog-2.jpg' && $newDelete->imageBlog != 'blog-1.jpg' && $newDelete->imageBlog != 'blog-3.jpg'){
            Storage::disk('public')->delete('img/blog/'.$newDelete->imageBlog);
        }
        if($newDelete->photoProfilAuteur != '01.jpg' && $newDelete->photoProfilAuteur != '02.jpg' && $newDelete->photoProfilAuteur != '03.jpg'){
            Storage::disk('public')->delete('img/avatar/'.$newDelete->photoProfilAuteur);
        }
       $newDelete->delete();
       return redirect()->back();
    }

    public function accepter($id)
    {
        $accepter = Blog::find($id);
        $mail = Newsletter::all();
        $accepter->confirmer = true;
        foreach($mail as $element){
            Mail::to($element->email)->send(new newsLetterSender());
        }
        $accepter->save();
        return redirect()->back();
    }
}
