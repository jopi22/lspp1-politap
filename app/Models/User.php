<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use app\Models\Sex;
use app\Models\Semester;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $table = 'users';

    protected $dates = ['created_at'];

    protected $fillable = [
        'id',
        'role',
        'name',
        'email',
        'password',
        'kode',
        'id',
        'nim',
        'nama',
        'institusi',
        'tgl_lahir',
        'sex_id',
        'negara',
        'alamat',
        'postal',
        'no_hp',
        'jabatan',
        'email3',
        'ktp',
        'telp',
        'proses',
        'fax',
        'tamatan_id',
        'image',
        'alamat_kantor',
        'email2',
        'jurusan_id',
        'semester_id',
        'tempat_lahir',
        'kode_post',
        'rmh',
        'tmt',
        'ktr',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sex(){
        return $this->belongsTo(Sex::class);
    }

    public function jurusan(){
        return $this->belongsTo(Jurusan::class);
    }

    public function semester(){
        return $this->belongsTo(Semester::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

}
