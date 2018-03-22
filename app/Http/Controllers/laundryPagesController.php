<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class laundryPagesController extends Controller
{
    //this is for laundry page contoller

    public function laundry($value='')
    {
    	# code...

    	return view('laundry');
    }
}
