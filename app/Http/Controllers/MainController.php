<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{


    public function changeLocale($locale)
    {
        session(['locale' => $locale]);
       \App::setLocale($locale);
       return redirect()->back();
    }
}
