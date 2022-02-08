@extends('layouts.app')

@section('body')
    <div class="detalle">
        <h2>Informacion del alumno</h2>
        <form action="" method="post">
            @method('PUT')
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>Matricula</td>
                    <td>{{ $alumno->matricula }}</td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td>{{ $alumno->nombre }}</td>
                </tr>
                <tr>
                    <td>Fecha de nacimiento</td>
                    <td>{{ $alumno->fecha_nacimiento}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $alumno->email }}</td>
                </tr>
                <tr>
                    <td>Grupo</td>
                    <td>{{ $grupo->clave }}</td>
                </tr>
                <tr>
                    <td>Genero</td>
                    <td>{{ $alumno->genero }}</td>
                </tr>
                <tr>
                    <td><button>Editar</button></td>
                    <td><a href="{{route('index')}}">Volver</a></td>
                </tr>
            </table>
        </form>
    </div>
@endsection