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
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Mapper::map(40, -100, ['marker' => false, 'locate' => true, 'eventAfterLoad' => 'addSearchBox(map);']);

        $spots_all = Spot::all();        
        foreach ($spots_all as $spot)
        {
            $creator = $spot->creator[0]->name;
            $country = $spot->country->name;
            $directions = '<a href="https://www.google.co.uk/maps/dir/Current%20Location/' . $spot->latitude . ',' . $spot->longitude . '/?dirflg=w|location" title="Directions">Directions</a>';
            $voteButton = '<button id="Like">Like</button>';
            $information = "Added by: {$creator}<br>Country: {$country}<br>$directions<br>$voteButton";
            Mapper::informationWindow($spot->latitude, $spot->longitude, $information, ['markers' => ['animation' => 'DROP']]);
        }
        return view('home');
    }

    public function welcome()
    {
        Mapper::map(40, -100, ['marker' => false, 'locate' => true, 'eventAfterLoad' => 'addSearchBox(map);']);
        
        $spots_all = Spot::all();        
        foreach ($spots_all as $spot)
        {
            $creator = $spot->creator[0]->name;
            $country = $spot->country->name;
            $directions = '<a href="https://www.google.co.uk/maps/dir/Current%20Location/' . $spot->latitude . ',' . $spot->longitude . '/?dirflg=w|location" title="Directions">Directions</a>';
            $voteButton = '<button id="Like">Like</button>';
            $information = "Added by: {$creator}<br>Country: {$country}<br>$directions<br>$voteButton";
            Mapper::informationWindow($spot->latitude, $spot->longitude, $information, ['markers' => ['animation' => 'DROP']]);
        }
        return view('welcome');
    }
}
