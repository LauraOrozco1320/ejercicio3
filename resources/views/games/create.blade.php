<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hola desde Create</h1>
        <form action="{{ route('games.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="goles_fuera">Goles Fuera:</label>
                <input type="number" class="form-control" id="goles_fuera" name="goles_fuera" required>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>
            <div class="form-group">
                <label for="goles_casa">Goles Casa:</label>
                <input type="number" class="form-control" id="goles_casa" name="goles_casa" required>
            </div>
            <div class="form-group">
                <label for="goal_id">Goal ID:</label>
                <input type="number" class="form-control" id="goal_id" name="goal_id" >
            </div>
            <div class="form-group">
                <label for="team_id">Team ID:</label>
                <input type="number" class="form-control" id="team_id" name="team_id" >
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
</body>
</html>