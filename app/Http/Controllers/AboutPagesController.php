<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutPagesController extends Controller
{
    //this is the About Page

    public function About($value='')
    {
    	return view('about');
    }
}
