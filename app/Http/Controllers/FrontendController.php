<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
	public function index()
    {
    	
    	return view('frontend.index');
    }
    public function booking()
    {
    
        return view('frontend.booking');

    }
    public function location()
    {
    
        return view('frontend.location');

    }
    public function customize()
    {
    
        return view('frontend.customize');

    }
    public function service()
    {
    
        return view('frontend.service');

    }
}
