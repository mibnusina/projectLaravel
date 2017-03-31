<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
	$data['result'] = \App\Home::all();
		
		return view('home/index')->with($data);
	}
}
