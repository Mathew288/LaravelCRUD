<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Formulario</title>
</head>

<body>
    @csrf

    <form action="" class="container">
        @foreach ($preguntas as $p)
            <div class="row">
                <h3>Pregunta: {{$p->id}}</h3>
                <label for="{{$p->id}}">{{ $p->Titulo_pregunta }}</label>
                <select name="" id="" class="form-select form-select-sm mb-3">
                    @foreach ($tipo_respuestas as $tr)
                        <option value="">{{$tr->titulo_tipo_respuesta}}</option>
                    @endforeach
                </select>
            </div>
        @endforeach
            <input type="submit" value="Enviar" class="btn btn-primary my-5">
    </form>
</body>

</html>
 