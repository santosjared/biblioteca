@extends('lector.home')
@section('actividad')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <!-- A Lista de Libros -->
            <div class="d-flex flex-row justify-content-between">
                <h4 class="card-title mb-1">Lista de libros</h4>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="preview-list">
                        <!-- php -->
                        @foreach($libros as $libro)
                        <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="mdi mdi-library-books"></i>
                                </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                    <h6 class="preview-subject">{{$libro->titulo}}</h6>
                                    <p class="text-muted mb-0">Autor: {{$libro->autor->first()->nombre}}</p>
                                    <p class="text-muted mb-0">Nacionalidad:
                                        @if($libro->autor->first()->nacionalidad=='ar') Argentina @endif
                                        @if($libro->autor->first()->nacionalidad=='bo') Bolivia @endif
                                        @if($libro->autor->first()->nacionalidad=='br') Brazil @endif
                                        @if($libro->autor->first()->nacionalidad=='ch') Chile @endif
                                        @if($libro->autor->first()->nacionalidad=='co') Colombia @endif
                                        @if($libro->autor->first()->nacionalidad=='ec') Ecuador @endif
                                        @if($libro->autor->first()->nacionalidad=='pa') Paraguay @endif
                                        @if($libro->autor->first()->nacionalidad=='pe') Peru @endif
                                        @if($libro->autor->first()->nacionalidad=='ur') Uruguay @endif
                                        @if($libro->autor->first()->nacionalidad=='ve') Venezuela @endif
                                    </p>
                                    <p class="text-muted mb-0">Editorial: {{$libro->editorial}}</p>
                                    <p class="text-muted mb-0">Año: {{$libro->anio}}</p>
                                    <p class="text-muted mb-0">Volumen: {{$libro->volumen}}</p>
                                    <p class="text-muted mb-0">Paginas: {{$libro->paginas}}</p>
                                    <p class="text-muted mb-0">Resumen: {{$libro->resumen}}</p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                    <a href="{{route('prestar_libro')}}" onclick="event.preventDefault();
                                                                          document.getElementById('prestar-libro{{$libro->id}}').submit();" class="btn btn-outline-success">
                                        Prestarse</a>
                                    <form id="prestar-libro{{$libro->id}}" action="{{ route('prestar_libro') }}" method="POST">
                                        {!! csrf_field() !!}
                                        <input type="text" value="{{$libro->id}}" name="id" hidden>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- aqui finaliza la lista -->
    </div>
</div>
@endsection