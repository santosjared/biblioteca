<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
    use HasFactory;
    protected $table='libro';
    public function bibliotecario()
    {
        return $this->belongsToMany(bibliotecario::class);
    }
    public function lector(){
        return $this->belongsToMany('\App\Models\lector','bibliotecario_lector_libro')
             ->withPivot('lector_id'); 
    }
    public function autor()
    {
        return $this->belongsToMany(autor::class)->withTimestamps();
    }
    public static function store($request)
    {
        $libro = new libro();
        $libro->titulo = $request['titulo'];
        $libro->resumen = $request['resumen'];
        $libro->editorial = $request['editorial'];
        $libro->anio = $request['anio'];
        $libro->volumen = $request['volumen'];
        $libro->paginas = $request['paginas'];
        $libro->save();
        return $libro;
    }
}
