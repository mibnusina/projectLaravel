<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    public $primaryKey = 'id_prod';
	
	protected $table = 't_product';
	
	public function kategori(){
		return $this->hasOne('\App\Kategori','id_kat','id_kat');
	}
}
