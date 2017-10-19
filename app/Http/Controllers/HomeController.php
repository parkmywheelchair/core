<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;
use App\Spot;

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
        $spots_all = Spot::all();
        Mapper::map(47.4813, 19.0555, ['center' => true, 'marker' => false]);     
        foreach ($spots_all as $spot)
        {
            Mapper::marker($spot->latitude, $spot->longitude);
        }
        return view('home');
    }
}
