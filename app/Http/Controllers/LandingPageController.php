<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Course;
use App\Models\CourseClass;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('index.page.beranda');
    }
    public function article()
    {
        $article = Article::all();
        return view('index.page.article',compact('article'));
    }
    public function course()
    {
        $course = Course::all();
        return view('index.page.course.index',compact('course'));
    }
    public function courseDetail($id,$nama_kelas = "")
    {
        $class = CourseClass::where('course_id',$id)->get();
        $class_item = CourseClass::where('nama_kelas',$class[0]->nama_kelas)->first();
        if(!empty($nama_kelas)){
            $class_item = CourseClass::where('nama_kelas',$nama_kelas)->first();
        }
        return view('index.page.course.detail',compact('class','id','class_item'));
    }
    public function faq()
    {
        return view('index.page.faq');
    }
    public function forum()
    {
        return view('index.page.forum');
    }
}
