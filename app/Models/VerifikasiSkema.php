<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerifikasiSkema extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function skemas(){
        return $this->hasMany(Skema::class);
    }
}
