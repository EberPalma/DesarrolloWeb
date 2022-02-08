<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script type="text/javascript">
        let grupo = "IDGS-82";
        //alert(grupo);
    </script>
</head>
<body>
    <h2>Prueba 01 con JS</h2>
    <div class="grupo">Aqui no hay grupo</div>
    <div class="info"></div>
    <input type="text" name="" id="num1">
    <input type="text" name="" id="num2">
    <p id="salida">Soy un parrafo</p>

    <input type="submit" value="Calcular" id="calcular">
    <p class="resultado">Soy el resultado</p>
    <script>
        document.querySelector(".grupo").innerHTML = grupo;
        $(document).ready(()=>{
            $('div').html("Mi grupo es " + grupo);
            $('body').css({'color': '#08C'});
            $('.info').text("Grupo " + grupo);
            $('#num1').keyup(()=>{
                let info = $('#num1').val();
                $('#salida').html(info);
            });
            $('#calcular').click(()=>{
                let num1 = $('#num1').val();
                let num2 = $('#num2').val();
                let res = num1 + num2;
                $('.resultado').html(res);
            });
        });
    </script>
</body>
</html>