<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index(){
        DB::insert('INSERT INTO m_level(level_kode, level_nama, created_at) VALUES (?,?,?)',['CUS', 'Pelanggan', now()]);
        return 'Input data berhasil';
    }

    public function update(){
        DB::update('UPDATE m_level SET level_nama=? WHERE level_kode=?',["Customer","CUS"]);
        return 'Update data berhasil';
    }

    public function delete(){
        $jumlahbaris = DB::delete('DELETE FROM m_level WHERE level_kode=?',["CUS"]);
        return 'Delete data berhasil. Data yang dihapus '.$jumlahbaris.' baris';
    }

    public function display(){
        $level = DB::select('SELECT * FROM m_level');
        return view('levelpage',['data'=>$level]);
    }
}
