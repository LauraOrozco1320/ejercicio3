<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Detalles</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $goal->id }}</td>
                </tr>
                <tr>
                    <th>Minuto</th>
                    <td>{{ $goal->minuto }}</td>
                </tr>
                <tr>
                    <th>Descripción</th>
                    <td>{{ $goal->desc }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('goals.edit', $goal->id) }}" class="btn btn-warning">Editar</a>
</body>
</html>