<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\students;
use App\Models\Kelas;

class Kelas extends Model
{
    use HasFactory;
    protected $fillable =['kelas'];
    public $timestamp = true;
    
    public function student()
    {
        return $this->hasMany('App\Models\students','Id_Kelas');
    }
}
