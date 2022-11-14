<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        return view('admin.page.article.index',compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article;
        $article->judul = $request->judul;
        $article->user_id = Auth::user()->id;
        $article->slug = $request->slug;
        $article->gambar = $request->file('gambar')->store('article');
        $article->deskripsi = $request->deskripsi;
        $article->save();
        return redirect('/admin/article')->with('status','Artikel berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('admin.page.article.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article->judul = $request->judul ? $request->judul : $article->judul;
        $article->slug = $request->slug ? $request->slug : $article->slug;
        $article->deskripsi = $request->deskripsi ? $request->deskripsi : $article->deskripsi;
        if(!empty($request->gambar)){
            Storage::delete($article->gambar);
            $article->gambar = $request->file('gambar')->store('article');
        }
        $article->save();
        return redirect('/admin/article')->with('status','Artikel berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        if(Storage::exists($article->gambar)){
            Storage::delete($article->gambar);
        }
        $article->delete();
        return redirect('/admin/article')->with('status','Artikel berhasil Dihapus');
    }
}
