<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = "pasien";
    protected $primaryKey = "id";
    protected $fillable = ['nama', 'alamat', 'telp', 'rt_rw', 'kelurahan_id', 'tgl_lahir', 'jenis_kelamin', 'created_at', 'updated_at'];


    public function kelurahan()
    {
        return $this->belongsTo('App\Models\Kelurahan', 'kelurahan_id');
    }
}
