<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    public function jenisLaporan(){
        return $this->belongsTo(JenisLaporan::class, 'jenis_pengaduan_id', 'id');
    }
}
