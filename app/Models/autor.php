<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autor extends Model
{
    use HasFactory;
    protected $table='autor';
    public function libro()
    {
        return $this->belongsToMany(libro::class)->withTimestamps();
    }
    public static function store($request)
    {
        $autor = new autor();
        $autor->nombre= $request['autor'];
        $autor->nacionalidad = $request['nacionalidad'];
        $autor->save();
        return $autor;
    }
}
