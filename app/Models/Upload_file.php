<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload_file extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_register_id',
        'name',
        'kode',
        'kode_dokumen',
        'koreksi',
        'status',
        'user_id',
        'y',
        'n',
        'z',
        'image'
    ];

    public function data_register(){
        return $this->belongsTo(Data_register::class);
    }
}
