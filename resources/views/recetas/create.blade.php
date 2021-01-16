@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" integrity="sha512-5m1IeUDKtuFGvfgz32VVD0Jd/ySGX7xdLxhqemTmThxHdgqlgPdupWoSN8ThtUSLpAGBvA8DY2oO7jJCrGdxoA==" crossorigin="anonymous" />
@endsection

@section('botones')
    <a href="{{ route('recetas.index')}}"class="btn btn-primary mr-2 text-write">Volver</a>
@endsection

@section('content')
    <h2 class="text-center mb-5">Agregar Nueva Receta</h2>
    
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <form method="POST" action="{{ route('recetas.store')}}" enctype="multipart/form-data" ovalidate>
                @csrf 
                {{-- INICIO CAMPO TITULO  * --}}
                <div class="form-group">
                    <label for="titulo">Titulo Receta</label>

                        <input type="text"
                            name="titulo"
                            class="form-control @error('titulo') is-invalid @enderror"
                            id="titulo"
                            placeholder="Titulo Receta"
                            value={{old('titulo')}}
                        >

                        @error('titulo')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                </div>
                {{-- FIN CAMPO TITULO  * --}}

             {{-- inicio combobox categorias * --}}

             <div class="from-group">
                <label for="categorias">Categoria</label>

                <select 
                    name="categorias"
                    class="form-control @error('categorias') is-invalid @enderror"
                    id="categorias"
                >

                    <option value="">-- Seleccione --</option>
                    @foreach($categorias as $id => $categorias)
                        <option 
                            value="{{$id}}" 
                            {{old('categorias') == $id ? 'selected' : ''}} 
                        >{{$categorias}}</option>                        
                    @endforeach
                </select>

                @error('categorias')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror

            </div>

            
            {{-- fin combobox categorias * --}}


            {{-- INICIO CAMPO Ingredientes TRIX  * --}}
            <div class="form-group mt-3">
                <label for="ingredientes">Ingredientes</label>

                <input id="ingredientes" type="hidden" name="ingredientes" value="{{ old('ingredientes')}}">

                <trix-editor 
                    class="form-control @error('ingredientes') is-invalid @enderror"
                    input="ingredientes"
                ></trix-editor>

                @error('ingredientes')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>

        {{-- FIN CAMPO Ingredientes TRIX  * --}}

         {{-- INICIO CAMPO Preparacion TRIX  * --}}
         <div class="form-group mt-3">
            <label for="ingredientes">Preparacion</label>

            <input id="preparacion" type="hidden" name="preparacion" value="{{ old('preparacion')}}">

            <trix-editor 
                class="form-control @error('preparacion') is-invalid @enderror"
                input="preparacion"
            ></trix-editor>

            @error('preparacion')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>

    {{-- FIN CAMPO Preparacion TRIX  * --}}
     {{-- INICIO CAMPO IMAGEN  * --}}
     <div class="form-group mt-3">
        <label for="imagen">Elige la imagen</label>
        
        <input
            id="imagen"
            type="file"
            class="form-control @error('imagen') is-invalid @enderror"
            name="imagen"
        >

        @error('imagen')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
    </div>
    {{-- FIN CAMPO IMAGEN  * --}}

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Agregar Receta">
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous"></script>
@endsection