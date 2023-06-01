<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function userHome()
    {
        return view('user/home',["msg"=>"Hello! I am user"]);
    }

    public function controladorHome()
    {
        return view('controlador/home',["msg"=>"Hello! I am controlador"]);
    }

    public function adminHome()
    {
        return view('admin/home',["msg"=>"Hello! I am admin"]);
    }

    public function expositorHome()
    {
        return view('expositor/home',["msg"=>"Hello! I am expositor"]);
    }
}
