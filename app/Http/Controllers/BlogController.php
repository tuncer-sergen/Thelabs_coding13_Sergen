<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Tag;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $newEntry = new Blog;
        $newEntry->imageBlog = $request->file('imageBlog')->hashName();
        $newEntry->date = $request->date;
        $newEntry->titreBlog = $request->titreBlog;
        $newEntry->descriptionBlog = $request->descriptionBlog;
        $newEntry->auteurBlog = $request->auteurBlog;
        $newEntry->photoProfilAuteur = $request->file('photoProfilAuteur')->hashName();
        $newEntry->textAuteur = $request->textAuteur;
        $newEntry->textBlog = $request->textBlog;
        $newEntry->save();
        $newEntry->art_tag()->syncWithoutDetaching($request->tag);
        $newEntry->art_cat()->syncWithoutDetaching($request->categorie);
        $request->file('imageBlog')->storePublicly('img/blog/','public');
        $request->file('photoProfilAuteur')->storePublicly('img/avatar/','public');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
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
        return view('admin.blog.blog_edit',compact('edit'));
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
        $update = Blog::find($id);
        if($update->imageBlog != 'blog-2.jpg' && $update->imageBlog != 'blog-1.jpg'){
            Storage::disk('public')->delete('img/blog/'.$update->imageBlog);
        }
        $update->imageBlog = $request->file('imageBlog')->hashName();
        $update->date = $request->date;
        $update->titreBlog = $request->titreBlog;
        $update->descriptionBlog = $request->descriptionBlog;
        $update->auteurBlog = $request->auteurBlog;
        if($update->photoProfilAuteur != '01.jpg' && $update->photoProfilAuteur != '02.jpg'){
            Storage::disk('public')->delete('img/avatar/'.$update->photoProfilAuteur);
        }
        $update->photoProfilAuteur = $request->file('photoProfilAuteur')->hashName();
        $update->textAuteur = $request->textAuteur;
        $update->textBlog = $request->textBlog;
        $update->save();
        $request->file('imageBlog')->storePublicly('img/blog/','public');
        $request->file('photoProfilAuteur')->storePublicly('img/avatar/','public');
        return redirect('/blogAdmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   $newDelete = Blog::find($id);
        if($newDelete->imageBlog != 'blog-2.jpg' && $newDelete->imageBlog != 'blog-1.jpg'){
            Storage::disk('public')->delete('img/blog/'.$newDelete->imageBlog);
        }
        if($newDelete->photoProfilAuteur != '01.jpg' && $newDelete->photoProfilAuteur != '02.jpg'){
            Storage::disk('public')->delete('img/avatar/'.$newDelete->photoProfilAuteur);
        }
       $newDelete->delete();
       return redirect()->back();
    }
}
