<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kategoriController extends Controller
{
    public function index(){
		$data['result'] = \App\Kategori::all();
		return view('kategori/index')->with($data);
	}
	public function create(){
		return view('kategori/form');
	}
	public function store(Request $request){
		$rules = [
		'nama_kat' => 'required|max:100'
	];
	
	$this->validate($request, $rules);
		$input = $request->all();
		$status = \App\Kategori::create($input);
		
		if ($status) return redirect('kategori')->with('success','Data Berhasil ditambahkan!');
		else return redirect('kategori')->with('error','Data Gagal ditambahkan!');
	}
	public function edit($id){
	$data['result'] = \App\kategori::where('id_kat', $id)->first();
	return view('kategori/form')->with($data);
   }
   
   public function update(Request $request ,$id){
	$rules = [
		'nama_kat' => 'required|max:100'
	];
	$this->validate($request, $rules);
	
	$input = $request->all();
	$result = \App\Kategori::where('id_kat', $id)->first();
	$status = $result->update($input);
	
	if ($status) return redirect('kategori')->with('success','Data Berhasil diubah!');
	else return redirect('kategori')->with('error','Data Gagal diubah!');
   }
   
   public function destroy(Request $request, $id){
	$result = \App\Kategori::where('id_kat', $id)->first();
	$status = $result->delete();
	
	if ($status) return redirect('kategori')->with('success','Data Berhasil dihapus!');
	else return redirect('kategori')->with('error','Data Gagal dihapus!');
   }
}
