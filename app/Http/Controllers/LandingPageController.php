<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Course;
use App\Models\CourseClass;
use App\Models\ForumTopic;
use App\Models\Forum;
use App\Models\Socmed;
use App\Models\Faq;
use Auth;

class LandingPageController extends Controller
{
    public function index()
    {
        $article = Article::limit(3)->get();
        $course = Course::limit(1)->first();
        return view('index.page.beranda',compact('article','course'));
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
        $faqs = Faq::all();
        return view('index.page.faq',compact('faqs'));
    }
    public function forum(Request $request)
    {
        $topic = ForumTopic::all();
        $forum = Forum::all();
        if ($request->has('post')){
            $forum = Forum::where('user_id',Auth::user()->id)->get();
        }
        if($request->has('topik')){
            $getIdTopik = ForumTopic::where('nama_topik',$request->input('topik'))->first()->id;
            $forum = Forum::where('topic_id',$getIdTopik)->get();
        }
        if ($request->has('post') && $request->has('topik')){
            $forum = Forum::where(['topic_id'=>$getIdTopik,'user_id'=>Auth::user()->id])->get();
        }
        return view('index.page.forum',compact('topic','forum'));
    }
}
