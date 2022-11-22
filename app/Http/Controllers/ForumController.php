<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;
use Auth;

class ForumController extends Controller
{
    public function store(Request $request)
    {
        $forum = new Forum;
        $forum->user_id = $request->user;
        $forum->topic_id = $request->topik_forum;
        $forum->judul = $request->judul;
        $forum->tulisan = $request->tulisan;
        $forum->gambar = $request->file('gambar')->store('forum');
        $forum->save();
        return redirect('/forum')->with('status','Forum berhasil ditambahkan');
    }
}