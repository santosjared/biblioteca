<?php

namespace App\Http\Controllers;
use App\Models\libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class prestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = auth::user();
        return view('lector.prestados')->with('user',$user);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id=$request['id'];
        $libro = libro::find($id);
        $user = auth::user();
        return view('lector.prestar')->with('user',$user)->with('libro',$libro);
    }
    public function store(Request $request)
    {
        $user = Auth::user();
        $user->persona->lector->libro()->attach($request['id'],['inicio'=>$request['inicio'],'fin'=>$request['fin']]);
        
        return redirect()->route('mis_libros');

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user = Auth::user();
        $user->persona->lector->libro()->detach($request['id']);
        
        return redirect()->route('mis_libros');
    }
}
