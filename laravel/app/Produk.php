<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    public $primaryKey = 'id_prod';
	
	protected $table = 't_product';
	
	protected $fillable = [
		'id_prod','nama_prod', 'id_kat', 'deskripsi','harga','foto'
	];
	
	public function kategori(){
		return $this->hasOne('\App\Kategori','id_kat','id_kat');
	}
}
