<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Muestra una lista de todos los juegos.
     */
    public function index()
    {
        $games = Game::all();
        return view('games.index', compact('games'));
    }

    /**
     * Muestra el formulario para crear un nuevo juego.
     */
    public function create()
    {
        return view('games.create');
    }

    /**
     * Guarda un nuevo juego en la base de datos.
     */
    public function store(Request $request)
    {
        $game = new Game();
        $game->goles_fuera = $request->goles_fuera;
        $game->fecha = $request->fecha;
        $game->goles_casa = $request->goles_casa;
        $game->goal_id = $request->goal_id;
        $game->team_id = $request->team_id;
        $game->save();
    
        return redirect()->route('games.index');
    }
    

    /**
     * Muestra el juego especificado.
     */
    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }

    /**
     * Muestra el formulario para editar un juego existente.
     */
    public function edit(Game $game)
    {
        return view('games.edit', compact('game'));
    }

    /**
     * Actualiza el juego especificado en la base de datos.
     */
    public function update(Request $request, Game $game)
    {
        $request->validate([
            'goles_fuera' => 'required|integer',
            'fecha' => 'required|string',
            'goles_casa' => 'required|integer',
            'goal_id' => 'required|exists:goals,id',
            'team_id' => 'required|exists:teams,id',
        ]);

        $game->update($request->all());

        return redirect()->route('games.index')
            ->with('success', 'Juego actualizado correctamente.');
    }

    /**
     * Elimina el juego especificado de la base de datos.
     */
    public function destroy(Game $game)
    {
        $game->delete();

        return redirect()->route('games.index')
            ->with('success', 'Juego eliminado correctamente.');
    }
}
