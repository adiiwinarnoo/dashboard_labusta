<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\students;
use App\Models\Jeniskelamin;

class Jeniskelamin extends Model
{
    use HasFactory;
    
    public function student3()
    {
        return $this->hasMany('App\Models\students','id_jeniskelamin');
    }
}
