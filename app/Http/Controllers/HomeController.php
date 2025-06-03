<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Home;

class HomeController extends Controller
{
    public function index() {
        $homes = Home::all();

        $home = Home::first();

        return view('home', ['homes' => $homes, 'home' => $home,]);
    }
}
