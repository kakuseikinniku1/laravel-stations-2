<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="映画情報">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Movies</title>
</head>
<body>
<button type="button" onclick="location.href='{{ route('create') }}' ">追加</button>
<main class="movies">
    <table class="movie-table" border="1" cellpadding="10" cellspacing="0">
        @foreach ($movies as $movie)
            <tr>
                <!-- 画像 -->
                <td class="movie-image">
                    <img src="{{ $movie->image_url }}" alt="{{ $movie->title }}の画像" width="150">
                </td>

                <!-- 映画情報 -->
                <td class="movie-content">
                    <h1 class="movie-title">{{ $movie->title }}</h1>

                    <p class="movie-meta">
                        {{ $movie->published_year }}年 /
                        @if ($movie->is_showing == 0)
                            <span class="soon">上映予定</span>
                        @else
                            <span class="now">上映中</span>
                        @endif
                    </p>

                    <p class="movie-description">
                        {{ $movie->description }}
                    </p>

                    <p class="movie-date">
                        登録日：{{ $movie->created_at }}<br>
                        更新日：{{ $movie->updated_at }}
                    </p>
                    <button type="button" onclick="location.href='{{ route('edit', $movie->id) }}' ">編集</button>
                </td>
            </tr>
        @endforeach
    </table>
</main>

</body>
</html>
