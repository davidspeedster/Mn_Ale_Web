<?php

namespace App\Http\Controllers\WebPageControllers;

use App\Employee;
use App\Edition;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use phpDocumentor\Reflection\Types\True_;

class HomePageController extends Controller
{
    //
    public function index()
    {
        //
        Config::set('forPreview', False);
        $editions = Edition::all();
        return view('/Blog_Site/index', compact('editions'));
    }

}
