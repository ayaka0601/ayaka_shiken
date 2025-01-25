@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
  <form class="form" action="/weight_logs" method="post">
  @csrf
    <input class="search-form__date" type="date" name="date" value="{{request('date')}}">
      <div class="search-form__actions">
        <input class="search-form__search-btn btn" type="submit" value="検索">
        <input class="reset-form__reset-btn btn" type="submit" value="リセット" name="reset">
        <a class="header-nav__link" href="/weight_logs/create">データ追加</a>
      </div>
  </form>
    <table class="admin__table">
      <tr class="admin__row">
        <th class="admin__label">日付</th>
        <th class="admin__label">体重</th>
        <th class="admin__label">食事摂取カロリー</th>
        <th class="admin__label">運動時間</th>
        <th class="admin__label"></th>
      </tr>
      @foreach($weight_logs as $weight_log)
      <tr class="admin__row">
        <td class="admin__data">{{$weight_log->date}}</td>
        <td class="admin__data">{{$weight_log->weight}}</td>
        <td class="admin__data">{{$weight_log->calories}}</td>
        <td class="admin__data">{{$weight_log->exercise_time}}</td>
        <td class="admin__data">{{$weight_log->exercise_content}}</td>
        <td class="admin__data">
          <a class="admin__detail-btn" href="#{{$weight_log->id}}">更新</a>
        </td>
      </tr>

      <div class="modal" id="{{$weight_log->id}}">
        <a href="#!" class="modal-overlay"></a>
          <div class="modal__inner">
            <div class="modal__content">
              <form class="modal__detail-form" action="/delete" method="post">
              @csrf
                <div class="modal-form__group">
                  <label class="modal-form__label" for="">日付</label>
                  <p>{{$weight_log->date}}</p>必須
                </div>

                <div class="modal-form__group">
                  <label class="modal-form__label" for="">体重</label>
                  <p>{{$weight_log->weight}}</p>必須
                </div>

                <div class="modal-form__group">
                  <label class="modal-form__label" for="">摂取カロリー</label>
                  <p>{{$weight_log->calories}}</p>必須
                </div>

                <div class="modal-form__group">
                  <label class="modal-form__label" for="">運動時間</label>必須
                  <p>{{$weight_log->exercise_time}}</p>
                </div>

                <div class="modal-form__group">
                  <label class="modal-form__label" for="">運動内容</label>
                  <p>{{$weight_log->exercise_content}}</p>
                </div>
                  <input type="hidden" name="id" value="{{ $weight_log->id }}">
                    <input class="modal-form__delete-btn btn" type="submit" value="削除">
              </form>
            </div>
              <a href="#" class="modal__close-btn">×</a>
          </div>
      </div>
      @endforeach
    </table>
@endsection