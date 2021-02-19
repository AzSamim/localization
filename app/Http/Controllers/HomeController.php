<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function setLanguage($lang = "en") {

        Session::put('local', $lang);
        return redirect()->back();
    }
} 
