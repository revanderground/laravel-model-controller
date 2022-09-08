<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    return view ('home.index');
    }

    public function contacts(){
        return view ('home.contacts');
    }
}


