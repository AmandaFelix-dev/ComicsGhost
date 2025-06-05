<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\HQ;

class HomeController extends Controller
{
    public function index() {
        $homes = HQ::all();

        $home = HQ::first();

        return view('home', ['homes' => $homes, 'home' => $home,]);
    }
}
