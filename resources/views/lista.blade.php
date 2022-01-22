<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Matricula</th>
            <th>Nombre</th>
            <th>Fecha de nacimiento</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
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
            <tr>
                <td colspan="6" style="text-align:center"><h3>No se encontraron registros</h3></td>
            </tr>
        @endif
    </table>
</body>
</html>