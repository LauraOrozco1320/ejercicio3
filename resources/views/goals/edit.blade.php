<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar Gol</h1>
        <form action="{{ route('goals.update', $goal->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="minuto">Minuto:</label>
                <input type="number" class="form-control" id="minuto" name="minuto" value="{{ $goal->minuto }}" required>
            </div>
            <div class="form-group">
                <label for="desc">Descripción:</label>
                <input type="text" class="form-control" id="desc" name="desc" value="{{ $goal->desc }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
</body>
</html>