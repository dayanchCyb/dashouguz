<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
    
    	return view('dashoguz.app.main');
    }
    

    public function service()
    {
    
    	return view('dashoguz.app.services');
    }
    
    public function traffic()
    {
    
    	return view('dashoguz.app.traffic');
    }
    

}
