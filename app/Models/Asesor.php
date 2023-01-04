<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{
    use HasFactory;

    protected $table = 'asesor';
    protected $fillable = [
        'nik',
        'nama',
        'image',
        'alamat',
        'sex',
        'email',
        'no_hp' ,
        'skema' ,
        'status'];

    public function skemas(){
        return $this->hasMany(Skema::class);
    }

}
