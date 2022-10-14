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
    
    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'max:100'],
            'alamat' => ['required', 'max:50'],
            'telp' => ['required', 'max:15'],
            'rt' => ['required', 'numeric'],
            'rw' => ['required', 'numeric'],
            'kelurahan_id' => ['required'],
            'tgl_lahir' => ['required'],
            'jenis_kelamin' => ['required'],
        ]);

        // cari apakah sudah ada pasien yang registrasi pada tahun dan bulan sekarang
        $now = Carbon::now()->format('ym');
        $pasien = Pasien::where('id', 'like', $now . '%')->latest('id')->first();


        // simpan registrasi pasien
        $data = new Pasien();

        if ($pasien != null) {
            $data->id = $pasien->id + 1;
        } else {
            $get_number = sprintf('%06d', 1);
            $data->id = $now . $get_number;
        }
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->telp = $request->telp;
        $data->rt_rw = $request->rt . '/' . $request->rw;
        $data->kelurahan_id = $request->kelurahan_id;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->created_at = Carbon::now('GMT+7');
        $data->save();

        $request->session()->flash('success', 'Berhasil Registrasi Data Pasien: ' . $request->nama);
        return redirect('pasien/cetak/' . $data->id);
    }
    
}
