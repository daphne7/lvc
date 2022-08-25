<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Sigla;
use App\Models\Curso;


class Materias extends Model
{
    use HasFactory;

    protected $fillable = [
        'materia','sigla_id'
    ];
    protected $primaryKey = "id";
    protected $table = "materias";
    

    /*una materia tendra una sigla*/
    public function siglas(){
          return $this->belongsTo(Sigla::class);
    }

     public function cursos(){
        return $this->hasMany(Curso::class);
        //return $this->belongsTo(Profesores::class);
    }

      
}
