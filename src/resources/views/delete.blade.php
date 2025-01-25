<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weight Logを追加</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>

@section('content')
<table>
    <tr>
      <th>user_id</th>
      <td>{{$weigh_log->user_id}}</td>
    </tr>
    <tr>
      <th>date</th>
      <td>{{$weigh_log->date}}</td>
    </tr>
    <tr>
      <th>weight</th>
      <td>{{$weigh_log->weight}}</td>
    </tr>
    <tr>
      <th>calories</th>
      <td>{{$weigh_log->calories}}</td>
    </tr>
    <tr>
      <th>exercise_time</th>
      <td>{{$weigh_log->exercise_time}}</td>
    </tr>
    <tr>
      <th>exercise_content</th>
      <td>{{$weigh_log->exercise_content}}</td>
    </tr>
    <tr>
      <th></th>
      <td>
        <form action="/weight_logs/{:weightLogId}/delete" method="POST">
            @csrf
            <button>送信</button>
        </form>
    </td>
    </tr>
</table>

@endsection