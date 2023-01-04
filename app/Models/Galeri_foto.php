<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri_foto extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'group_galeri_id'];

    public function group_galeri(){
        return $this->belongsTo(Group_galeri::class);
    }
}
