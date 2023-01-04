<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xnxx extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'kode',
        'unikom_id',
        'unikom_name',
        'data_register_id',
        'image',
        'status',
        'user_id',
        'skema_name',
        'skema_id',
        'koreksi',
        'unikom_kode',
        'kriteria',
        'asesmen_name',
        'kode_elemen'
    ];

    public function data_register(){
        return $this->belongsTo(Data_register::class);
    }
}
