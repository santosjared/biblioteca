<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth::user();
        $libros = libro::all();
        if($user->name=='Bibliotecario')
        {
            return view('bibliotecario.home')->with('user',$user)->with('libros',$libros);
        }
        if($user->name=='Lector')
        {
            return view('lector.list')->with('user',$user)->with('libros',$libros);
        }
    }
}
