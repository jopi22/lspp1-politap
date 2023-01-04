<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesmen extends Model
{
    use HasFactory;

    protected $table = 'elemen';

    protected $fillable = ['unikom_id', 'kriteria', 'asesmen'];

    public function unikom(){
        return $this->belongsTo(unikom::class);
    }

}
