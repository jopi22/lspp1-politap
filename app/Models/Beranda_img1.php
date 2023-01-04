<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beranda_img1 extends Model
{
    protected $fillable = ['id', 'keterangan', 'judul', 'image'];
    protected $table = 'carousel';
}
