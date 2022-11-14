<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\CourseClass;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course_class = CourseClass::all();
        return view('admin.page.course_class.index',compact('course_class'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('admin.page.course_class.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $class = new CourseClass;
        $class->course_id = $request->course_id;
        $class->nama_kelas = $request->nama_kelas;
        $class->materi = $request->materi;
        $class->save();
        return redirect('/admin/class')->with('status','Kelas berhasil ditambahkan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CourseClass $class)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseClass $class)
    {
        $courses = Course::all();
        return view('admin.page.course_class.edit',compact('courses','class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseClass $class)
    {
        $class->course_id = $request->course_id ? $request->course_id : $class->course_id;
        $class->nama_kelas = $request->nama_kelas ? $request->nama_kelas : $class->nama_kelas;
        $class->materi = $request->materi ? $request->materi : $class->materi;
        $class->save();
        return redirect('/admin/class')->with('status','Kelas berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseClass $class)
    {
        $class->delete();
        return redirect('/admin/course')->with('status','Kelas berhasil Dihapus');
    }

    public function storeImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
    
            $request->file('upload')->move(public_path('media'), $fileName);
    
            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }
}
