<?php

namespace App\Http\Controllers;

use App\Models\autor;
use App\Models\libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class libroController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth::user();
        $libros = libro::all();
        return view('libros.newLibro')->with('user',$user)->with('libros',$libros);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $autor=autor::store($request);
        $libro=libro::store($request);
        $autor->libro()->attach($libro->id);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $request['id'];
        $libro = libro::find($id);
        $user = auth::user();
        $libros = libro::all();
        return view('libros.editar')->with('user',$user)->with('libros',$libros)->with('libro',$libro);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request['id'];
        $libro = libro::find($id);
        $libro->titulo = $request['titulo'];
        $libro->resumen = $request['resumen'];
        $libro->editorial = $request['editorial'];
        $libro->anio = $request['anio'];
        $libro->volumen = $request['volumen'];
        $libro->paginas = $request['paginas'];
        $libro->save();
        $autor = autor::find($libro->id);
        $autor->nombre= $request['autor'];
        $autor->nacionalidad = $request['nacionalidad'];
        $autor->save();

        return redirect()->route('home');

    }
    public function destroy(Request $request)
    {
        $id = $request['id'];
        $libro = libro::find($id);
        $autor = autor::find($libro->id);
        $libro->autor()->detach($autor->id);
        $libro ->delete();
        $autor->delete();

        return redirect()->route('home');
    }
}
