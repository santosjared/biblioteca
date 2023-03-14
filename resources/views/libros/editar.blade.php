@extends('bibliotecario.home')

@section('actividad')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edicion de Libros</h4>
            <form class="forms-sample"  method="POST" action="{{route('update_libro')}}">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="titulo">Titulo del libro</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="{{$libro->titulo}}">
                </div>
                <div class="form-group">
                    <label for="autor">Autor del libro</label>
                    <input type="text" class="form-control" id="autor" name="autor" value="{{$libro->autor->first()->nombre}}">
                </div>
                <div class="form-group">
                    <label for="nacionalidad">Nacionalidad del autor</label>
                    <select class="form-control" id="nacionalidad" name="nacionalidad">
                        <option value="ar" @if($libro->autor->first()->nacionalidad=="ar")selected @endif>Argentina</option>
                        <option value="bo" @if($libro->autor->first()->nacionalidad=="bo") selected @endif>Bolivia</option>
                        <option value="br" @if($libro->autor->first()->nacionalidad=="br") selected @endif>Brazil</option>
                        <option value="ch" @if($libro->autor->first()->nacionalidad=="ch") selected @endif>Chile</option>
                        <option value="co" @if($libro->autor->first()->nacionalidad=="co") selected @endif>Colombia</option>
                        <option value="ec" @if($libro->autor->first()->nacionalidad=="ec") selected @endif>Ecuador</option>
                        <option value="pe" @if($libro->autor->first()->nacionalidad=="pe") selected @endif>Peru</option>
                        <option value="pa" @if($libro->autor->first()->nacionalidad=="pa") selected @endif>Paraguay</option>
                        <option value="ur" @if($libro->autor->first()->nacionalidad=="ur") selected @endif>Uruguay</option>
                        <option value="ve" @if($libro->autor->first()->nacionalidad=="ve") selected @endif>Venezuela</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="editorial">Editorial de libro</label>
                    <input type="text" class="form-control" id="editorial" name="editorial" value="{{$libro->editorial}}">
                </div>
                <div class="form-group">
                    <label for="anio">Año</label>
                    <input type="text" class="form-control" id="anio" name="anio" value="{{$libro->anio}}">
                </div>
                <div class="form-group">
                    <label for="volumen">Volumen</label>
                    <input type="text" class="form-control" id="volumen" name="volumen" value="{{$libro->volumen}}">
                </div>
                <div class="form-group">
                    <label for="paginas">Páginas</label>
                    <input type="text" class="form-control" id="paginas" name="paginas" value="{{$libro->paginas}}">
                </div>
                <div class="form-group">
                    <label for="resumen">Resumen</label>
                    <textarea class="form-control" id="resumen" name="resumen" rows="4">{{$libro->resumen}}</textarea>
                </div>
                <input type="text" value="{{$libro->id}}" name="id" id="id" hidden>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a class="btn btn-dark" href="{{route('home')}}">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection