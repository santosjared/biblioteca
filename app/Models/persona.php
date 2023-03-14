<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    protected $table = 'persona';
    public function user()
    {
        return $this->hasOne(user::class);
    }
    public function lector()
    {
        return $this->hasOne(lector::class);
    }
    public function bibliotecario()
    {
        return $this->hasOne(bibliotecario::class);
    }

    public static function store(array $request)
    {
        $persona = new persona();
        $persona->nombre = $request['nombre'];
        $persona->apellidos = $request['apellido'];
        $persona->ci = $request['ci'];
        $persona->telefono = $request['telefono'];
        $persona->direccion = $request['direccion'];
        $persona->save();
        return $persona;
    }
    public static function upadte($request,$id)
    {
        $persona = persona::find($id);
        $persona->nombre = $request['nombre'];
        $persona->apellidos = $request['apellido'];
        $persona->ci = $request['ci'];
        $persona->telefono = $request['telefono'];
        $persona->direccion = $request['direccion'];
        $persona->save();
        return $persona;
    }
}
