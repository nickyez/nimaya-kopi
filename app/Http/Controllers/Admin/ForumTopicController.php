<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\ForumTopic;

class ForumTopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics = ForumTopic::all();
        return view('admin.page.forum_topic.index',compact('topics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.forum_topic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $topic = new ForumTopic;
        $topic->nama_topik = $request->nama_topik;
        $topic->save();
        return redirect('/admin/forum-topic')->with('status','Topik berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ForumTopic $topic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topic = ForumTopic::find($id);
        return view('admin.page.forum_topic.edit',compact('topic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $topic = ForumTopic::find($id);
        $topic->nama_topik = $request->nama_topik;
        $topic->save();
        return redirect('/admin/forum-topic')->with('status','Topik berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $topic = ForumTopic::find($id);
        $topic->delete();
        return redirect('/admin/forum-topic')->with('status','Topik berhasil Dihapus');
    }
}
