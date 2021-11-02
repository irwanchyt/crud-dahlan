<?php

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([

        	'nama_barang' => 'Beras',
        	'harga_beli'  => 20000,
        	'harga_jual'  => 50000,
        	'stok'        => 10,


        ]);
    }
}
