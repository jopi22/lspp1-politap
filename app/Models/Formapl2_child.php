<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formapl2_child extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function formapl2(){
        return $this->belongsTo(Formapl2::class);
    }
}
