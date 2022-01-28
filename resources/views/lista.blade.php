@extends('layouts.app')

@section('body')
<div id="tabla_de_alumnos">
    <table>
        <thead>
            <tr id="thead">
                <th>ID</th>
                <th>Matricula</th>
                <th>Nombre</th>
                <th>Fecha de nacimiento</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if($cantidad > 0)
            @foreach($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->id }}</td>
                    <td>{{ $alumno->matricula }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->fecha_nacimiento }}</td>
                    <td>{{ $alumno->email }}</td>
                    <td>
                        <a href="{{ route('detalle') }}">Ver informacion</a>
                        <a href="{{ route('borrar2') }}">Eliminar</a>
                    </td>
                </tr>
            @endforeach
            @else
        </tbody>
            <tr>
                <td colspan="6" style="text-align:center"><h3>No se encontraron registros</h3></td>
            </tr>
        @endif
    </table>
</div>
@endsection
