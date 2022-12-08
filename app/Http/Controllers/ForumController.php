<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;
use Auth;
use Illuminate\Support\Facades\Storage;


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
    public function update(Request $request,$id)
    {
        $forum = Forum::find($id);
        $forum->user_id = $request->user ? $request->user : $forum->user_id;
        $forum->topic_id = $request->topik_forum ? $request->topik_forum : $forum->topic_id;
        $forum->judul = $request->judul ? $request->judul : $forum->judul;
        $forum->tulisan = $request->tulisan ? $request->tulisan : $forum->tulisan;
        if (!empty($request->gambar)){
            if (Storage::exists($forum->gambar)){
                Storage::delete($forum->gambar);
            }
            $forum->gambar = $request->file('gambar')->store('forum');
        }
        $forum->save();
        return redirect('/forum?post=my-post')->with('status','Forum berhasil diubah');
    }
    public function destroy($id)
    {
        $forum = Forum::find($id);
        if (Storage::exists($forum->gambar)){
            Storage::delete($forum->gambar);
        }
        $forum->delete();
        return redirect('/forum?post=my-post')->with('status','Forum berhasil Dihapus');
    }
}