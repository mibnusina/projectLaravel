<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public $primaryKey = 'id_kat';
	
	protected $table = 't_kategori';
	
	protected $fillable = [
		'nama_kat'
	];
	
}
