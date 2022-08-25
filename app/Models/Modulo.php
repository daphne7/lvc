<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Curso;

class Modulo extends Model
{
    use HasFactory;

    protected $fillable = [
        'modulo'
    ];
   
    protected $primaryKey = "id";
     protected $table "modulos";

    public function cursos(){
    	return $this->hasMany(Curso::class);
    	//return $this->belongsTo(Profesores::class);
    }
}
