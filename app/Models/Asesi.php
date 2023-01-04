<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Jurusan;
use app\Models\Semester;

class Asesi extends Model
{
    use HasFactory;

    protected $table = 'asesi_data';

    protected $fillable = [
        'id',
        'nim',
        'nama',
        'tmpt_lahir	',
        'tgl_lahir',
        'sex',
        'negara',
        'alamat',
        'kode_pos',
        'no_hp',
        'provinsi',
        'kabupaten',
        'kota',
        'kecamatan',
        'tamatan_id',
        'image',
        'ttd',
        'jurusan_id',
        'semester_id',
        'surel',
        'email2',
        'email'
    ];

    public function jurusan(){
        return $this->belongsTo(Jurusan::class);
    }

    public function semester(){
        return $this->belongsTo(Semester::class);
    }

}
