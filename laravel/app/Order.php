<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $primaryKey = 'id_pemesanan';
	
	protected $table = 't_pesan';
	protected $fillable = [
		'nama_pelanggan', 'id_prod', 'alamat','notelp','status'
	];
	
	
	
}
