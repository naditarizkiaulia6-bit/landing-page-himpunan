<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    //
    protected $fillable = [
        'nama',
        'email',
        'nim',
        'no_whatsapp',
        'departemen_pilihan_pertama',
        'departemen_pilihan_kedua',
    ];
}
