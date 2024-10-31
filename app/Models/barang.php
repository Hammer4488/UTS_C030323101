<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class barang extends Model
{
    //
    use HasFactory;

    protected $table='barangs';
    protected $fillable=[
        'kode_barang',
        'nama',
        'deskripsi',
        'berat',
        'harga',
    ];

    const CREATED_AT='created_at';
    const UPDATED_AT='updated_at';

    protected$casts=[
        'created_at'=>'datetime:Y-m-d',
        'updated_at'=>'datetime:Y-m-d',
    ];

}
