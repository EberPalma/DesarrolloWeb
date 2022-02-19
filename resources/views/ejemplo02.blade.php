<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
</head>
<body>
    <h1>Ejemplo 02 -- Areglos y eventos</h1>
    <div id="lista">**************</div>
    <select name="" id="seleccion"></select>

    <table>
        <tr>
            <td>Buscar</td>
            <td><input type="text" name="" id="inputBuscar"></td>
            <td><input type="button" value="Buscar" id="btnBuscar"></td>
        </tr>
        <tr>
            <td>Agregar</td>
            <td><input type="text" name="" id="inputAgregar"></td>
            <td><input type="button" value="Agregar" id="btnAgregar"></td>
        </tr>
        <tr>
            <td>Eliminar</td>
            <td><input type="text" name="" id="inputEliminar"></td>
            <td><input type="button" value="Eliminar" id="btnEliminar"></td>
        </tr>
    </table>
    <script type="text/javascript">
        $(document).ready(()=>{
            let lista = ['Huevo', 'Jamon', 'Queso', 'Totopos', 'Salsa'];
            //alert(lista);

            // * Buscar elementos
            $('#btnBuscar').click(()=>{

                // * Mostrar todos los elementos
                if($('#inputBuscar').val() == ""){
                    elementos(lista);
                }else{
                    // * Mostrar un elemento
                    lista.forEach((e)=>{
                        $('#lista').html('');

                        $('#seleccion').empty();
                        if(e == $('#inputBuscar').val()){
                            // * Esta linea añade un elemento al contenedor existente
                            $('#lista').append(e + '<br>');

                            // * Esta line añade una etiqueta <option> al select
                            $('#seleccion').append('<option>'+e+'</option>'); 
                        }
                    });
                }

            });

            // * Agregar un elemento
            $('#btnAgregar').click(()=>{
                if($('#inputAgregar').val() != ""){
                    lista.push($('#inputAgregar').val());
                    elementos(lista);
                }
            });

            // * Eliminar un elemento
            $('#btnEliminar').click(()=>{
                if($('#inputEliminar').val() != ""){
                    let count = 0;
                    lista.forEach((e)=>{
                        if(e == $('#inputEliminar').val()){
                            lista.splice(count, 1);
                        }
                        console.log(count);
                        count = count + 1;
                    });
                    elementos(lista);
                }
            });

            $('#seleccion').on('change', ()=>{
                let dato1 = $('#seleccion').val();
                console.log('Opcion seleccionada: ' + dato1);
            });
        });

        // * Funcion que realiza la carga de los elementos
        function elementos(lista){

            // * Limpiamos los elementos de la lista
            $('#lista').html('');

            $('#seleccion').empty();

            // * Llamamos la lista a un forEach para añadirlos a sus respectivos contenedores
            lista.forEach((e)=>{
                // * Esta linea añade un elemento al contenedor existente
                $('#lista').append(e + '<br>');

                // * Esta line añade una etiqueta <option> al select
                $('#seleccion').append('<option>'+e+'</option>');
            });
        }
    </script>
</body>
</html>