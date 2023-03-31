<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPembeli extends Model
{
    use HasFactory;

    protected $table = 'datapembeli';

    protected $fillable = [
        'nama',
        'umur',
        'gender',
        'alamat',
        'agama',
    ];

}
