<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class semester extends Model
{
     protected $table = 'semester';
    protected $primaryKey = 'id_semester';
    protected $fillable = ['nama_semester'];
    public $timestamps = false;
}
