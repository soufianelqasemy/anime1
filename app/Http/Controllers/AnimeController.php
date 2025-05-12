<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    public function index()
    {
        // We'll use Jikan API to fetch anime data
        $response = Http::get('https://api.jikan.moe/v4/top/anime', [
            'limit' => 15
        ]);

        $animes = $response->json()['data'];
        return view('anime.index', compact('animes'));
    }

    public function show($id)
    {
        $response = Http::get("https://api.jikan.moe/v4/anime/{$id}");
        $anime = $response->json()['data'];
        return view('anime.show', compact('anime'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $response = Http::get('https://api.jikan.moe/v4/anime', [
            'q' => $query,
            'limit' => 15
        ]);

        $animes = $response->json()['data'];
        return view('anime.index', compact('animes'));
    }
}
