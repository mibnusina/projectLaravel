<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class orderController extends Controller
{
    public function index(){
		return view('order/index');
	}
	public function store(Request $request){
		$input = $request->all();
		
		$status = \App\Order::create($input);
		
		return redirect('/');
	}
}
