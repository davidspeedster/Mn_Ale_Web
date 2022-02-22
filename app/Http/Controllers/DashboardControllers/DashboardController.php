<?php

namespace App\Http\Controllers\DashboardControllers;

use App\Employee;
use App\Http\Controllers\Controller;
use App\NewsFeed;
use App\Edition;
use App\ProjectCategory;
use App\SocialMediaAccount;
use App\WebLinks;
use App\WebText;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $editions = Edition::all();
        return view('Dashboard.index', compact('editions'));
    }
}
