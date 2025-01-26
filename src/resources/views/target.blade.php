@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="register__content">
  <div class="register-form__heading">
    <h2>目標体重設定</h2>
  </div>
  <form class="form" action="/wight_logs/goal_setting" method="post">
  @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">現在の体重</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="weight" placeholder="目標の体重を入力" value="{{ old('weight') }}" />kg
        </div>
        <div class="form__error">
          @error('weight')
          {{ $message }}
          @enderror
        </div>
      </div>
    <div class="button-content">
      <a href="/weight_logs" class="back">戻る</a>
      <button type="submit" class="button-register">更新</button>
    </div>
</div>
@endsection