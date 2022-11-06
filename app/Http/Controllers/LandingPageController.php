<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('index.page.beranda');
    }
    public function article()
    {
        return view('index.page.article');
    }
    public function course()
    {
        return view('index.page.course.index');
    }
    public function courseDetail()
    {
        return view('index.page.course.detail');
    }
    public function faq()
    {
        return view('index.page.faq');
    }
}
