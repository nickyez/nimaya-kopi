<?php

namespace App\Http\Controllers\Admin;

use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class ForumController extends Controller
{
    public function index()
    {
        $forum = Forum::all();
        return view('admin.page.forum.index',compact('forum'));
    }
    public function destroy($id)
    {
        $forum = Forum::find($id);
        if (Storage::exists($forum->gambar)){
            Storage::delete($forum->gambar);
        }
        $forum->delete();
        return redirect('/admin/forum')->with('status','Forum berhasil Dihapus');
    }
}