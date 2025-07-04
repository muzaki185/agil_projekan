<?php 

// app/Models/Transaksi.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pelanggan',
        'nama_obat',
        'jumlah',
        'harga_satuan',
        'total_harga',
        'tanggal_transaksi'
    ];
}