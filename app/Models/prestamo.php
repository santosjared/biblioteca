<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestamo extends Model
{
    use HasFactory;
    protected $table = 'bibliotecario_lector_libro';
    
    public function lector()
    {
        return $this->belongsToMany(lector::class);
    }
    public function bibliotecario()
    {
        return $this->belongsToMany(bibliotecario::class);
    }
    public function libro()
    {
        return $this->belongsToMany(libro::class);
    }

    public static function store($request)
    {
        $date1 = date_create($request['inicio']);
        $date2 = date_create($request['fin']);
        $interval = date_diff($date1,$date2);
        $timeInteval = array();
        foreach ($interval as $key => $value) {
            $timeInteval[]=$value;
        }
        $dias = $timeInteval[11];

        $prestamo = new prestamo();
        $prestamo->inicio = $request['inicio'];
        $prestamo->dias = $dias;
        $prestamo->fin = $request['fin'];
        $prestamo->save();
        return $prestamo;

    }
}
