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
                    <td>{{ $game->id }}</td>
                </tr>
                <tr>
                    <th>Goles Fuera</th>
                    <td>{{ $game->goles_fuera }}</td>
                </tr>
                <tr>
                    <th>Fecha</th>
                    <td>{{ $game->fecha }}</td>
                </tr>
                <tr>
                    <th>Goles Casa</th>
                    <td>{{ $game->goles_casa }}</td>
                </tr>
                <tr>
                    <th>Goal ID</th>
                    <td>{{ $game->goal_id }}</td>
                </tr>
                <tr>
                    <th>Team ID</th>
                    <td>{{ $game->team_id }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('games.edit', $game->id) }}" class="btn btn-warning">Editar</a>
</body>
</html>