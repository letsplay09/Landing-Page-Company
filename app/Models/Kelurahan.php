<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    protected $table = "kelurahan";
    protected $primaryKey = "id";
    protected $fillable = ['kelurahan', 'kecamatan', 'kota', 'created_at', 'updated_at'];
}
