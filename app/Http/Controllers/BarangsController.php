<?php

namespace App\Http\Controllers;
use App\models\barangs;

use Illuminate\Http\Request;
use DB;

class BarangsController extends Controller
{
    public function index()
    {
    $barangs = DB::table('barangs')->get();
    return view('barangs',['barangs'=>$barangs]);

    }

    public function insert_eloquent()
    {
    barangs::create(['nama_produk'=>'karpet',
        'harga_beli'=> '450000',
        'harga_jual'=>'30000'
    ]);
    echo "menambah data berhasil!!";

    //return view('barangs',['barangs'=>$barangs]);
    }

    public function update_eloquent()
    {
        barangs::where('id', 1)
        ->update(['harga_beli' => '150000'
    ]);
    echo "ubah data berhasil!!";
    
    }
}
