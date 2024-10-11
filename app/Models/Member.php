<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_siswa',
        'nama_alat',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status_pengembalian',
    ];

    public function institution()
    {
        $this->belongsTo(Institution::class);
    }

}
