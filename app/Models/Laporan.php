<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $table = 'laporans';
    protected $primaryKey = 'id';

    public function categories()
    {
        return $this->belongsTo(JenisLaporan::class, 'jenis_laporan_id','id');
    }
}
