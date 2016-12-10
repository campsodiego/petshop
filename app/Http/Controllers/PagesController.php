<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home(){

		$people = ['Diego', 'Keite', 'Virlene', 'Jose'];
	    return view('welcome', compact('people'));
    }

    public function about(){
    	return view('about');
    }
}
