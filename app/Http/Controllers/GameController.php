<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function create(){
        return view('game.create');
    }

    public function store(Request $request){

        $game = new Game();
        $game->title = $request->title;
        $game->producer = $request->producer;
        $game->description = $request->description;


        dd($game);
    }
}
