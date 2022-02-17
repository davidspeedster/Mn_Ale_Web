<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Edition;

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
        $editions = Edition::all();
        return view('/Blog_Site/index', compact('editions'));
    }
}
