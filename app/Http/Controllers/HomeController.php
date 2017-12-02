<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $names =
            [
                'Mher',
                'Hakob',
                'Narek',
                'Armen',
                'Karo',
            ];
        return view('home', compact('names'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
