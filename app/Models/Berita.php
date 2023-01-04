<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $dates = ['created_at'];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
}
