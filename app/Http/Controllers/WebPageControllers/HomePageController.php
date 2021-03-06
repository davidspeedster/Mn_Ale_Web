<?php

namespace App\Http\Controllers\WebPageControllers;


use App\Edition;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;


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
