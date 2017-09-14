<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Titles;
use App\Services;
use App\References;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['titles']     = Titles::all();
        $data['services']   = Services::all();
        $data['references'] = References::all();
        return view('welcome', compact('data'));
    }
}
