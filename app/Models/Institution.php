<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'jumlah_alat',
        'status_alat',
        'kode_unik',
    ];

    public function members()
    {
        return $this->hasMany(Member::class);
    }
}
