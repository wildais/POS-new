<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function cekObject(){
        $anggota = new Anggota;
        dump($anggota);
    }

    public function insert(){
        $anggota = new Anggota;
        $anggota->nip = '12345671';
        $anggota->nama = 'susi';
        $anggota->tanggal_lahir = '2000-01-01';
        $anggota->nilai = '5.0';
        $anggota->save();
        echo "data berhasil disimpan";
    }

    public function update(){
        $anggota = Anggota::find(1);
        $anggota->nilai = '5.5';
        $anggota->save();
        echo "data berhasil diubah";
    }

    public function delete(){
        $anggota = Anggota::find(1);
        $anggota->delete();
        echo "data berhasil dihapus";
    }

    public function all(){
        $anggota = Anggota::all();
        return view('anggota',['data'=>$anggota]);
    }
}
