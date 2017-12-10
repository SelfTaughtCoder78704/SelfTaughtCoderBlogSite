<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Self-Taught Coder';
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        $title = 'About The Self-Taught Coder Site';
        return view('pages.about')->with('title', $title);
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design Education', 'Programming Essentials', 'CS 101', 'Business Minded Coaching']
        );
        return view('pages.services')->with($data);
    }
   
}
