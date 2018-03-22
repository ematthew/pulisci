<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactPagesController extends Controller
{
    //this contact page

    public function contact($value='')
    {
    	return view('contact');
    }
}
