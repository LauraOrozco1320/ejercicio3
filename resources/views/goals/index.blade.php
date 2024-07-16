<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Minuto</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($goals as $goal)
                <tr>
                    <td>{{ $goal->id }}</td>
                    <td>{{ $goal->minuto }}</td>
                    <td>{{ $goal->desc }}</td>
                    <td>
                        <a href="{{ route('goals.show', $goal->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('goals.edit', $goal->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('goals.destroy', $goal->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>