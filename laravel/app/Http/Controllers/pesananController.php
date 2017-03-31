<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pesananController extends Controller
{
    public function index(){
		$data['result'] = \App\Pesanan::all();
		return view('pemesanan/index')->with($data);
	}
	public function edit($id){
	$data['result'] = \App\Pesanan::where('id_pemesanan', $id)->first();
	return view('pemesanan/form')->with($data);
   }
   
   public function update(Request $request ,$id){
	$rules = [
		
	];
	$this->validate($request, $rules);
	
	$input = $request->all();
	$result = \App\Pesanan::where('id_pemesanan', $id)->first();
	$status = $result->update($input);
	
	if ($status) return redirect('pemesanan')->with('success','Data Berhasil diubah!');
	else return redirect('pemesanan')->with('error','Data Gagal diubah!');
   }
}
