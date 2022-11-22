<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Article;
use App\Models\Forum;
use App\Models\User;

class AdminViewController extends Controller
{
    
    /**
     * Tampilan awal admin
     */
    public function index()
    {
        $course = Course::count();
        $article = Article::count();
        $forum = Forum::count();
        $user = User::count();
        return view('admin.page.index',compact('course','article','forum','user'));
    }
    
}
