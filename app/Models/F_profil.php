<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class F_profil extends Model
{
    protected $fillable = ['profil','image', 'visi', 'misi', 'isi', 'motto'];
    protected $table = 'f_profil';
}
