<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
    use HasFactory;
    protected $id = "id";
    protected $table = "td_alumnos";
    protected $fillable = [
        'matricula',
        'nombre',
        'fecha_nacimiento',
        'genero',
        'email',
        'direccion',
        'id_grupo',
        'password',
        'foto'
    ];
}
