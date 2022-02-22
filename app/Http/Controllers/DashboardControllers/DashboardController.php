<?php

namespace App\Http\Controllers\DashboardControllers;

use App\Http\Controllers\Controller;
use App\Edition;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $editions = Edition::all();
        return view('Dashboard.index', compact('editions'));
    }
}
