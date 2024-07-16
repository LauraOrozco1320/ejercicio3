<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar</h1>
    <form action="{{ route('games.update', $game->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="goles_fuera">Goles Fuera:</label>
            <input type="number" class="form-control" id="goles_fuera" name="goles_fuera" value="{{ $game->goles_fuera }}" required>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" class="form-control" id="fecha" name="fecha" value="{{ $game->fecha }}" required>
        </div>
        <div class="form-group">
            <label for="goles_casa">Goles Casa:</label>
            <input type="number" class="form-control" id="goles_casa" name="goles_casa" value="{{ $game->goles_casa }}" required>
        </div>
        <div class="form-group">
            <label for="goal_id">Goal ID:</label>
            <input type="number" class="form-control" id="goal_id" name="goal_id" value="{{ $game->goal_id }}" required>
        </div>
        <div class="form-group">
            <label for="team_id">Team ID:</label>
            <input type="number" class="form-control" id="team_id" name="team_id" value="{{ $game->team_id }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</body>
</html>