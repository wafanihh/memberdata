<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone_number',
        'position',
        'address',
        'joining_date',
        'status',
    ];

    public function institution()
    {
        $this->belongsTo(Institution::class);
    }

}
