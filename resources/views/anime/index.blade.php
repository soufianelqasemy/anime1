<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anime List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8 text-center">Popular Anime</h1>
        
        <!-- Search Form -->
        <form action="{{ route('anime.search') }}" method="GET" class="mb-8">
            <div class="flex justify-center">
                <input type="text" name="query" placeholder="Search anime..." class="px-4 py-2 w-full max-w-xl rounded-l-lg border-t border-b border-l">
                <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-r-lg hover:bg-blue-600">Search</button>
            </div>
        </form>

        <!-- Anime Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($animes as $anime)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ $anime['images']['jpg']['image_url'] }}" alt="{{ $anime['title'] }}" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">{{ $anime['title'] }}</h2>
                    <p class="text-gray-600 mb-2">Episodes: {{ $anime['episodes'] ?? 'Unknown' }}</p>
                    <p class="text-gray-600 mb-4">Score: {{ $anime['score'] ?? 'N/A' }}/10</p>
                    <a href="{{ route('anime.show', $anime['mal_id']) }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Details</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
