<?php

namespace App\Console\Commands;

use App\Models\Pokemon;
use App\Models\Sprite;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class SeedDbFromApi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:seed-from-api';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed data from Pokemon API';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $pokemonList = Http::get(env('POKEMON_API_BASE_PATH').'/pokemon')['results'];

        foreach($pokemonList as $pokemon) {
            $pokemonDetails = Http::get(env('POKEMON_API_BASE_PATH').'/pokemon/'.$pokemon['name'])->json();
            
            $model = new Pokemon();
            $model->name = $pokemonDetails['name'];
            $model->pokemon_id = $pokemonDetails['id'];
            $model->types = implode(',', array_map(function($type) {
                return $type['type']['name'];
            }, $pokemonDetails['types']));
            $model->weight = $pokemonDetails['weight'];
            $model->height = $pokemonDetails['height'];
            
            $model->save();

            $sprite = new Sprite();
            $sprite->url = $pokemonDetails['sprites']['front_default'];
            $sprite->pokemon_id = $model->id;

            
            $sprite->save();
        }
    }
}
