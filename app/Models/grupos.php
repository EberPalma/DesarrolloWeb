<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grupos extends Model
{
    use HasFactory;
    protected $id = "id";
    protected $table = "td_grupos";
    protected $fillable = [
        'nombre',
        'clave'
    ];
}
