<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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
