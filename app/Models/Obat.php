<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    protected $table = 'obats'; // nama tabel

    // Field yang boleh diisi (mass assignment)
    protected $fillable = [
        'nama',
        'kategori',
        'stok',
        'harga',
    ];
}
