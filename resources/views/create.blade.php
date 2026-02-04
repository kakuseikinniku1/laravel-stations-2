<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="映画登録">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>映画登録</title>
</head>
<body>

<main class="movie-form">
    <h1>映画登録フォーム</h1>

    <form action="{{ route("movie-store") }}" method="POST">
        @csrf

        <table border="1" cellpadding="10" cellspacing="0">
            <!-- タイトル -->
            <tr>
                <th>タイトル</th>
                <td>
                    <input type="text" name="title" required>
                </td>
            </tr>

            <!-- 公開年 -->
            <tr>
                <th>公開年</th>
                <td>
                    <input type="number" name="published_year" min="1900" max="2100" required>
                </td>
            </tr>

            <!-- 上映状況 -->
            <tr>
                <th>上映状況</th>
                <td>
                    <label>
                        <input type="radio" name="is_showing" value="1" checked>
                        上映中
                    </label>
                    <label>
                        <input type="radio" name="is_showing" value="0">
                        上映予定
                    </label>
                </td>
            </tr>

            <!-- 画像URL -->
            <tr>
                <th>画像URL</th>
                <td>
                    <input type="text" name="image_url">
                </td>
            </tr>

            <!-- 説明 -->
            <tr>
                <th>説明</th>
                <td>
                    <textarea name="description" rows="5"></textarea>
                </td>
            </tr>

            <!-- 送信 -->
            <tr>
                <td colspan="2" style="text-align:center;">
                    <button type="submit">登録する</button>
                    @if(isset($success))
                        <p>{{ $success}}</p>
                    @endif
                    @if(isset($error))
                        <p>{{ $error }}</p>
                    @endif
                </td>
            </tr>
        </table>
    </form>
</main>

</body>
</html>
