<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\students;
use App\Models\Jurusan;

class Jurusan extends Model
{
    use HasFactory;

    public function student2()
    {
        return $this->hasMany('App\Models\students','Id_Jurusan');
    }
}
