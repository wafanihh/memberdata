<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dengan nama model
    protected $table = 'members';  // Pastikan nama tabel sesuai dengan yang Anda gunakan

    // Tentukan kolom yang bisa diisi (mass assignment)
    protected $fillable = [
        'nama_siswa',
        'nama_alat',
        'total_pinjam',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status_pengembalian',
    ];
}
