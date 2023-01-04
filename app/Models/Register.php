<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_register',
        'skema_id',
        'user_name',
        'user_id',
        'skema_name',
        'created_at',
        'status'
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }
}
