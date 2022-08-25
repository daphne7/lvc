<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Curso;

class Horario extends Model
{
    use HasFactory;

     protected $fillable = [
        'dia',
        'hora',
        'fec_ini',
        'fec_fin'
    ];
    protected $primaryKey = "id"; 
    protected $table "horarios";

    public function cursos(){
    	return $this->hasMany(Curso::class);
    	//return $this->belongsTo(Profesores::class);
    }
}
