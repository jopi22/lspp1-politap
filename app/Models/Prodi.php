<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Skema;

class Prodi extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'prodi'];
    protected $table = 'prodi';

    public function skema(){
        return $this->hasMany(Skema::class);
    }
}
