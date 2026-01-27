<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="映画情報">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <title>index</title>
</head>
<body>
    @foreach ($movies as $movie)
    <section class="movie-info">
        <div class="border">
            <h1>{{ $movie->title }}</h1>
            <dl class="info">
                <dt><img src="{{ $movie->image_url }}" alt="映画画像"></dt>
                <dd>{{ $movie->created_at }}</dd>
                <dd>{{ $movie->updated_at }}</dd>
            </dl>
        </div>
    </section>
    @endforeach ()
</body>
</html>