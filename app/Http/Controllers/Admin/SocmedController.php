<?php

namespace App\Http\Controllers\Admin;

use App\Models\Socmed;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocmedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socmeds = Socmed::all();
        return view('admin.page.sosmed.index',compact('socmeds'));
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
     * @param  \App\Models\Socmed  $socmed
     * @return \Illuminate\Http\Response
     */
    public function show(Socmed $socmed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Socmed  $socmed
     * @return \Illuminate\Http\Response
     */
    public function edit(Socmed $socmed)
    {
        return view('admin.page.sosmed.edit',compact('socmed'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Socmed  $socmed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Socmed $socmed)
    {
        $socmed->url = $request->url;
        $socmed->save();
        return redirect('/admin/socmed')->with('status','Sosmed berhasil diubah'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Socmed  $socmed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Socmed $socmed)
    {
        //
    }
}
