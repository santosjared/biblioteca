@extends('bibliotecario.home')

@section('actividad')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Registro de Libros</h4>
            <form class="forms-sample"  method="POST" action="{{route('guardar_libro')}}">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="titulo">Titulo del libro</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo">
                </div>
                <div class="form-group">
                    <label for="autor">Autor del libro</label>
                    <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor del libro">
                </div>
                <div class="form-group">
                    <label for="nacionalidad">Nacionalidad del autor</label>
                    <select class="form-control" id="nacionalidad" name="nacionalidad">
                        <option value="ar">Argentina</option>
                        <option value="bo">Bolivia</option>
                        <option value="br">Brazil</option>
                        <option value="ch">Chile</option>
                        <option value="co">Colombia</option>
                        <option value="ec">Ecuador</option>
                        <option value="pe">Peru</option>
                        <option value="pa">Paraguay</option>
                        <option value="ur">Uruguay</option>
                        <option value="ve">Venezuela</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="editorial">Editorial de libro</label>
                    <input type="text" class="form-control" id="editorial" name="editorial" placeholder="Editorial de libro">
                </div>
                <div class="form-group">
                    <label for="anio">Año</label>
                    <input type="text" class="form-control" id="anio" name="anio" placeholder="Año">
                </div>
                <div class="form-group">
                    <label for="volumen">Volumen</label>
                    <input type="text" class="form-control" id="volumen" name="volumen" placeholder="Volumen">
                </div>
                <div class="form-group">
                    <label for="paginas">Páginas</label>
                    <input type="text" class="form-control" id="paginas" name="paginas" placeholder="Páginas">
                </div>
                <div class="form-group">
                    <label for="resumen">Resumen</label>
                    <textarea class="form-control" id="resumen" name="resumen" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a class="btn btn-dark" href="{{route('home')}}">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection