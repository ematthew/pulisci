<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InteriorPagesController extends Controller
{
	// this is for interior view page
    public function interior($value='')
    {
    	return view('interior');
    }
}
