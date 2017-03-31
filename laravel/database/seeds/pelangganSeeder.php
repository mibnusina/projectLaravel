<?php

use Illuminate\Database\Seeder;

class pelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
			'nama_pelanggan'=> 'Ibnu',
			'alamat'=> 'Cibaduyut',
			'notelp'=> '089514630335'
		];
		DB::table('t_pelanggan')->insert($data);
		$data = [
			'nama_pelanggan'=> 'Ukan',
			'alamat'=> 'Batununggal',
			'notelp'=> '089514630322'
		];
		DB::table('t_pelanggan')->insert($data);
    }
}
