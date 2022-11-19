<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert(array(
            ['nama_produk'=> 'meja', 'harga_beli'=> '20000', 'harga_jual'=>'64000'],
            ['nama_produk'=> 'sofa', 'harga_beli'=> '50000', 'harga_jual'=>'65000'] ));
    }
}
