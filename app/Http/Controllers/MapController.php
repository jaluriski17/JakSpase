<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Petaku",
        ];

        if (auth()->check()) {
            return view ('index', $data);
        } else {
            return view('landing', $data);
        }
    }

    public function map()
    {
        $data = [
            "title" => "Petaku",
        ];

        if (auth()->check()) {
            return view ('index', $data);
        } else {
            return view('index-public', $data);
        }
    }
    public function table()
    {
        $data = [
        "title" =>"table",
        ];

        return view('table',$data);
    }

    public function landing()
    {
        $data = [
            "title" => "Landing"
        ];
        return view('landing', $data);
    }
}
