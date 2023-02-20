@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Apellido paterno</th>
                            <th>Nombre</th>
                            <th> Fecha de Nacimiento</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->paterno}}</td>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->fechaNacimiento}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection