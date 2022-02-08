@extends('layouts.app')

@section('body')
<div class="formulario">
    <form action="{{ route('guardar') }}" method="post" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                @if(count($errors)>0)
                    @foreach($errors as $error)
                        <td colspan=2>
                            {{$error}}
                        </td>
                    @endforeach
                @endif
            </tr>
            <tr>
                <td>Matricula:</td>
                <td><input type="text" name="matricula" id="input-matricula" value="{{ old('matricula') }}"></td>
            </tr>
            <tr>
                <td>Nombre completo:</td>
                <td><input type="text" name="nombre" id="input-nombre" value="{{ old('nombre') }}"></td>
            </tr>
            <tr>
                <td>Fecha de nacimiento:</td>
                <td><input type="date" name="fecha_nacimiento" id="input-fechaNacimiento" value="{{ old('fecha_nacimiento') }}"></td>
            </tr>
            <tr>
                <td>Genero:</td>
                <td><input type="text" name="genero" id="input-genero" value="{{ old('genero') }}"></td>
            </tr>
            <tr>
                <td>Direccion:</td>
                <td><input type="text" name="direccion" id="input-direccion" value="{{ old('direccion') }}"></td>
            </tr>
            <tr>
                <td>Grupo:</td>
                <td><select name="grupo" id="input-grupo">
                    @foreach($grupos as $grupo)
                        <option value="{{ $grupo->id }}">
                            {{ $grupo->clave }}
                        </option>
                    @endforeach
                </select></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" id="input-email" value="{{ old('email') }}"></td>
            </tr>
            <tr>
                <td>Contraseña</td>
                <td><input type="password" name="password" id="input-password"></td>
            </tr>
            <tr>
                <td>Foto de perfil</td>
                <td><input type="file" name="foto" id="input-foto"></td>
            </tr>
            <tr>
                <td colspan=2> <input type="submit" value="Guardar"></td>
            </tr>
        </table>
    </form>
</div>
@endsection