<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Materia;


class Sigla extends Model
{
    use HasFactory;

     protected $fillable = [
        'sigla'
    ];
   protected $primaryKey = "id";
   protected $table "siglas";

    public function materias(){
    	return $this->hasMany(Materia::class);
    	//return $this->belongsTo(Profesores::class);
    }
}
