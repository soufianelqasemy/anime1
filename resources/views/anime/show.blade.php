<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $anime['title'] }} - Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <a href="{{ route('anime.index') }}" class="inline-block mb-8 text-blue-500 hover:text-blue-600">
            ← Back to Anime List
        </a>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="md:flex">
                <div class="md:w-1/3">
                    <img src="{{ $anime['images']['jpg']['large_image_url'] }}" alt="{{ $anime['title'] }}" class="w-full h-auto">
                </div>
                <div class="md:w-2/3 p-6">
                    <h1 class="text-3xl font-bold mb-4">{{ $anime['title'] }}</h1>
                    <p class="text-gray-600 mb-4">{{ $anime['title_japanese'] }}</p>
                    
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div>
                            <p class="font-semibold">Episodes:</p>
                            <p>{{ $anime['episodes'] ?? 'Unknown' }}</p>
                        </div>
                        <div>
                            <p class="font-semibold">Score:</p>
                            <p>{{ $anime['score'] ?? 'N/A' }}/10</p>
                        </div>
                        <div>
                            <p class="font-semibold">Status:</p>
                            <p>{{ $anime['status'] }}</p>
                        </div>
                        <div>
                            <p class="font-semibold">Aired:</p>
                            <p>{{ $anime['aired']['string'] }}</p>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h2 class="text-xl font-semibold mb-2">Synopsis</h2>
                        <p class="text-gray-600">{{ $anime['synopsis'] }}</p>
                    </div>

                    <div>
                        <h2 class="text-xl font-semibold mb-2">Genres</h2>
                        <div class="flex flex-wrap gap-2">
                            @foreach($anime['genres'] as $genre)
                            <span class="px-3 py-1 bg-gray-200 rounded-full text-sm">{{ $genre['name'] }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
