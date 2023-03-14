<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lector extends Model
{
    use HasFactory;
    protected $table = 'lector';
    
    public function persona(){
        return $this->belongsTo(persona::class);
    }
    public function libro(){
        return $this->belongsToMany('\App\Models\libro','bibliotecario_lector_libro')
             ->withPivot('libro_id'); 
    }
    public static function store(array $data,$id)
    {
        $user = new lector();
        $user->ru = $data['tipoUser'];
        $user->persona_id = $id;
        $user->save();
        return $user;
    }
}
