<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class linkControl extends Controller
{
    public function index()
    {
        return view('link');
    }

    public function store(Request $request)
    {
        $urlLink = $request -> link;
        $manyVid = $request -> jml;
        // dd($urlLink, $manyVid);
        return redirect()->route('embed', ['link' => $urlLink, 'jml' => $manyVid]);
    }

    public function embed()
    {
        return view('embed');
    }
}
