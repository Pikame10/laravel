<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DescController extends Controller
{
    public function index(){
        return view('abouts.index');
    }

        public function abouts(){
        return view('abouts.abouts');
    }

        public function contact(){
        return view('abouts.contact');
    }
}
