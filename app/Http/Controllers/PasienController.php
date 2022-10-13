<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\Request;
use App\Models\Pasien;
use Carbon\Carbon;

class PasienController extends Controller
{
    public function index()
    {
        $pasien = Pasien::get();
        return view('operator.pasien_tampil', compact('pasien'));
    }

    public function addView()
    {
        $kelurahan = Kelurahan::get();
        return view('operator.pasien_tambah', compact('kelurahan'));
    }

    public function cetakKartu($id)
    {
        $pasien = Pasien::find($id);
        return view('operator.pasien_cetak', compact('pasien'));
    }

    
}
