<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formapl2 extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function formapl2_childs(){
        return $this->hasMany(Formapl2_child::class);
    }
}
