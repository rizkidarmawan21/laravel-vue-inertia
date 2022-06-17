<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function index()
    {
        $title = "Halaman Home Rizki" ;
        return Inertia::render('Home',[
            'title' => $title
        ]);
    }

    public function about(){
        $title = "Halaman about" ;
        return Inertia::render('About',[
            'title' => $title
        ]);
    }   
}
