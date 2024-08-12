<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(){
        $data = [
            'kategori_kode' => 'SNK',
            'kategori_nama' => 'Snack',
            'created_at' => now()
        ];
        DB::table('m_kategori')->insert($data);
        return "Data berhasil ditambah";
    }
    
    public function update(){
        DB::table('m_kategori')->where('kategori_kode','SNK')->update(['kategori_nama'=>'Camilan']);
        return 'Update data berhasil';
    }

    public function display(){
        $kategori = DB::table('m_kategori')->get();
        return view('kategoripage',['data'=>$kategori]);
    }

}
