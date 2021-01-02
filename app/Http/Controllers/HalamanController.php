<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function visiMisiTujuan()
    {
        return view('visiMisiTujuan');
    }

    public function identitasSekolah()
    {
        return view('identitasSekolah');
    }

    public function strukturOrg()
    {
        return view('strukturOrg');
    }

    public function jmlhSiswa()
    {
        return view('jmlhSiswa');
    }
    public function agbsnsTani()
    {
        return view('agbsnsTani');
    }
    public function tntgBKK()
    {
        return view('tntgBKK');
    }
    public function orgnssBKK()
    {
        return view('orgnssBKK');
    }
    public function inputDataAlumni()
    {
        return view('inputDataAlumni');
    }
    public function tntgKrklm()
    {
        return view('tntgKrklm');
    }
    public function organisasi()
    {
        return view('organisasi');
    }
    public function klndrPmbljaran()
    {
        return view('klndrPmbljaran');
    }
    public function pmbljaran()
    {
        return view('pmbljaran');
    }
    public function penilaian()
    {
        return view('penilaian');
    }
    public function srtfkasi()
    {
        return view('srtfkasi');
    }
    public function tntgHum()
    {
        return view('tntgHum');
    }
    public function orgnssHum()
    {
        return view('orgnssHum');
    }
    public function prgrmkrjHum()
    {
        return view('prgrmkrjHum');
    }
    public function pkl()
    {
        return view('pkl');
    }
    public function tntgSis()
    {
        return view('tntgSis');
    }
    public function orgnssSis()
    {
        return view('orgnssSis');
    }
    public function prgrmkrjSis()
    {
        return view('prgrmkrjSis');
    }
    public function ekskul()
    {
        return view('ekskul');
    }
    public function kegOsis()
    {
        return view('kegOsis');
    }
    public function kegPram()
    {
        return view('kegPram');
    }
    public function dokKeg()
    {
        return view('dokKeg');
    }
    public function tntgSarpras()
    {
        return view('tntgSarpras');
    }
    public function orgnssSarpras()
    {
        return view('orgnssSarpras');
    }
    public function prgrmkrjSarpras()
    {
        return view('prgrmkrjSarpras');
    }
    public function fasSek()
    {
        return view('fasSek');
    }
    public function tntgPerpus()
    {
        return view('tntgPerpus');
    }
    public function orgnssPerpus()
    {
        return view('orgnssPerpus');
    }
    public function berita()
    {
        return view('berita');
    }
    public function inform()
    {
        return view('inform');
    }
    public function ppdb()
    {
        return view('ppdb');
    }
    public function kontak()
    {
        return view('kontak');
    }

}
