<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralPagesController extends Controller
{
    //this is general pages

    public function general($value='')
    {
    		return view('general');
    }
}
