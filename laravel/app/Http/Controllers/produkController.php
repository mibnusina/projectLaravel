<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkController extends Controller
{
    public function index(){
		$data['result'] = \App\Produk::all();
		return view('produk/index')->with($data);
	}
	public function create(){
		return view('produk/form');
	}
	public function store(Request $request){
		$rules = [
		'id_prod' => 'required|min:4',
		'nama_prod' => 'required|max:100',
		'id_kat' => 'required|exists:t_kategori',
		'deskripsi' => 'required',
		'harga' => 'required',
		'foto' => 'required|mimes:jpeg,png|max:512'
	];
	
	$this->validate($request, $rules);
		$input = $request->all();
		
		if ($request->hasFile('foto') && $request->file('foto')->isValid()){
			$filename = $input['id_prod'] . "." . $request->file('foto')->getClientOriginalExtension();
			$request->file('foto')->move('uploads/', $filename);
			$input['foto'] = $filename;
		}
		
		
		$status = \App\Produk::create($input);
		
		if ($status) return redirect('produk')->with('success','Data Berhasil ditambahkan!');
		else return redirect('produk')->with('error','Data Gagal ditambahkan!');
	}
	public function edit($id){
	$data['result'] = \App\Produk::where('id_prod', $id)->first();
	return view('produk/form')->with($data);
   }
   
   public function update(Request $request ,$id){
	$rules = [
		'id_prod' => 'required|min:4',
		'nama_prod' => 'required|max:100',
		'deskripsi' => 'required',
		'harga' => 'required',
		'foto' => 'required|mimes:jpeg,png|max:1024'
		
	];
	$this->validate($request, $rules);
	
	$input = $request->all();
	$result = \App\Produk::where('id_prod', $id)->first();
	
	if ($request->hasFile('foto') && $request->file('foto')->isValid()){
			$filename = $input['id_prod'] . "." . $request->file('foto')->getClientOriginalExtension();
			$request->file('foto')->move('uploads/', $filename);
			$input['foto'] = $filename;
		}
		
	$status = $result->update($input);
	
	if ($status) return redirect('produk')->with('success','Data Berhasil diubah!');
	else return redirect('produk')->with('error','Data Gagal diubah!');
   }
   
   public function destroy(Request $request, $id){
	$result = \App\Produk::where('id_prod', $id)->first();
	$status = $result->delete();
	
	if ($status) return redirect('produk')->with('success','Data Berhasil dihapus!');
	else return redirect('produk')->with('error','Data Gagal dihapus!');
   }
}
