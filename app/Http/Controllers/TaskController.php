<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $title = 'I Love: ';
        return view('pages.index', compact('title'));
    }
    public function about()
    {
        $data = array(
            'title' => 'Services', 
            'services1' => ['a','b', 'c', 'e']
        );
        return view('pages.about')->with($data);
    }
    public function services()
    {
        $title = 'I very love: ';
        return view('pages.services')->with('title', $title);
    }
}
