<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;
    protected $fillable =['Nomor_Induk','Nama','Password','Id_Kelas','Id_Jurusan'];
    public $timestamps = true;

    public function kelas()
    {
        return $this->belongsTo('App\Models\Kelas','Id_Kelas');
    }
    public function jurusan()
    {
        return $this->belongsTo('App\Models\Jurusan','Id_Jurusan');
    }
    public function jeniskelamin()
    {
        return $this->belongsTo('App\Models\Jeniskelamin','id_jeniskelamin');
    }

}

