<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminViewController extends Controller
{
    
    /**
     * Tampilan awal admin
     */
    public function index()
    {
        return view('admin.page.index');
    }
    
}
