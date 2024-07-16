<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hola desde Create</h1>
    <form action="{{ route('goals.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="minuto">Minuto:</label>
            <input type="number" class="form-control" name="minuto" required>
        </div>
        <div class="form-group">
            <label for="desc">Descripción:</label>
            <input type="text" class="form-control" name="desc" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</body>
</html>