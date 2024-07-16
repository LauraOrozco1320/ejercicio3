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
                <th>Goles Fuera</th>
                <th>Fecha</th>
                <th>Goles Casa</th>
                <th>Goal ID</th>
                <th>Team ID</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
                <tr>
                    <td>{{ $game->id }}</td>
                    <td>{{ $game->goles_fuera }}</td>
                    <td>{{ $game->fecha }}</td>
                    <td>{{ $game->goles_casa }}</td>
                    <td>{{ $game->goal_id }}</td>
                    <td>{{ $game->team_id }}</td>
                    <td>
                        <a href="{{ route('games.show', $game->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('games.edit', $game->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('games.destroy', $game->id) }}" method="POST" style="display: inline-block;">
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