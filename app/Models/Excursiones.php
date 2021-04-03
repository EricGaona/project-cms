<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excursiones extends Model
{
    use HasFactory;
    protected $table = 'excursiones';
    protected $fillable = [
        'titulo', 'portada', 'id_categoria', 'descripcion'
    ];
    public $timestamps = false;

    public function categoria(){
// ESTA FUNCION ES PARA QUE MUESTRE EL NOMBRE DE LA CATEGORIA
        return $this->belongsTo(Categorias::class, 'id_categoria');
    }
}
