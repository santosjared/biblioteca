<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bibliotecario extends Model
{
    use HasFactory;
    protected $table = 'bibliotecario';
    public function persona()
    {
        return $this->belongsTo(persona::class);
    }
    public function libro(){
        return $this->belongsToMany('\App\libro','bibliotecario_lector_libro')
             ->withPivot('libro_id'); 
    }
    public static function store(array $data,$id)
    {
        $user = new bibliotecario();
        $user->item = $data['tipoUser'];
        $user->persona_id = $id;
        $user->save();
        return $user;
    }
}
