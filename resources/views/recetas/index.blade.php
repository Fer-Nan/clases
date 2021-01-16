@extends('layouts.app')

@section('botones')
    <a href="{{ route('recetas.create')}}"class="btn btn-primary mr-2 text-write">Agregar Receta</a>
@endsection
@section('content')
    <h2 class="text-center mb-5">Administra tus Recetas</h2>

    <div class="col-md-10 mx-auto bg-write p-3">
        <table class="table">
            <thead class="bg-primary text-linht">
                <tr>
                    <th scole="col">Titulo</th>
                    <th scole="col">Categoría</th>
                    <th scole="col">Acciones</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Pizza</td>
                    <td>Pizza</td>
                    <td>

                    </td>
                </tr>
        </table>

@endsection
