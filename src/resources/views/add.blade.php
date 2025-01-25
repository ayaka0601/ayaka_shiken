<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weight Logを追加</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>
<body>
    <main class="main-contents">
        <h1>Weight Logを追加</h1>
        @section('content')
        <form class="form" action="/weight_logs/create" method="post">
        @csrf
            <label class="label">日付<span class="require">必須</span></label>
            <input type="date" placeholder="年/月/日" name="weight_log_date" class="date">
            @error('weight_log_date')
                <span class="input_error">
                    <p class="input_error_message">{{$errors->first('weight_log_date')}}</p>
                </span>
            @enderror
            <label class="label">体重<span class="require">必須</span></label>
            <input type="number" class="number" placeholder="52.2" name="weight_log_weight">
            @error('weight_log_weight')
                <span class="input_error">
                    <p class="input_error_message">{{$errors->first('weight_log_weight')}}</p>
                </span>
            @enderror
            <label class="label">摂取カロリー<span class="require">必須</span></label>
            <input type="number" class="number" placeholder="1200" name="weight_log_calories">
            @error('weight_log_calories')
                <span class="input_error">
                    <p class="input_error_message">{{$errors->first('weight_log_calories')}}</p>
                </span>
            <label class="label">運動時間<span class="require">必須</span></label>
            <input type="time" class="time" placeholder="00:00" name="weight_log_exercise_time">
            @error('weight_log_exercise_time')
                <span class="input_error">
                    <p class="input_error_message">{{$errors->first('weight_log_exercise_time')}}</p>
                </span>
            @enderror
            <label class="label">運動内容<span class="require"></span></label>
            <textarea cols="30" rows="5" placeholder="商品の説明を入力" name="weight_log_exercise_content" class="textarea"></textarea>
            <div class="button-content">
                <a href="/weight_logs" class="back">戻る</a>
                <button type="submit" class="button-register">登録</button>
            </div>
        </form>
        @endsection
    </main>
</body>
</html>
