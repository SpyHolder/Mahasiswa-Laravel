<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nis';
    protected $fillable = ['nis','nama','jenis_kelamin','tanggal_lahir','alamat','IPK','id_jurusan','id_semester'];
    public $timestamps = false;
    public function jurusan(){
        return $this->belongsTo('App\Models\jurusan','id_jurusan','id_jurusan');
    }
    public function semester(){
        return $this->belongsTo('App\Models\semester','id_semester','id_semester');
    }
}
