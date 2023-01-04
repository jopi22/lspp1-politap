<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_register extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_skema',
        'kode_skema',
        'nim',
        'surel',
        'skema_name',
        'skema_id',
        'user_id',
        'user_name',
        'status',
        'tmpt_lahir',
        'tgl_lahir',
        'sex_id',
        'negara',
        'alamat',
        'kode_post',
        'no_hp',
        'provinsi',
        'kabupaten',
        'kota',
        'kecamatan',
        'tamatan_id',
        'image',
        'jurusan_id',
        'semester_id',
        'kode',
        'ktp',
        'khs',
        'ktm',
        'lain',
        'koreksi',
        'date',
        'time',
        'tuk_id',
        'asesor_id',
        'keterangan',
        'institusi',
        'jabatan',
        'email3',
        'fax',
        'telp',
        'postal',
        'jenis',
        'ktr',
        'tmt',
        'rmh',
        'alamat_kantor',

    ];

    protected $dates = ['tgl_lahir', 'date', 'created_at', 'updated_at'];

    // protected $dates = ['created_at'];

    public function xnxxes(){
        return $this->hasMany(Xnxx::class);
    }

    public function upload_files(){
        return $this->hasMany(Upload_file::class);
    }

    public function jurusan(){
        return $this->belongsTo(Jurusan::class);
    }

    public function semester(){
        return $this->belongsTo(Semester::class);
    }

    public function sex(){
        return $this->belongsTo(Sex::class);
    }

    public function asesor(){
        return $this->belongsTo(Asesor::class);
    }


    public function tuk(){
        return $this->belongsTo(Tuk::class);
    }
}
