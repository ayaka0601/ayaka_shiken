@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register__content">
  <div class="register-form__heading">
    <h2>新規会員登録</h2>
    <div>STEP1体重データの入力</div>
  </div>
  <form class="form" action="/register/step2" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">現在の体重</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="weight" placeholder="現在の体重を入力" value="{{ old('weight') }}" />kg
        </div>
        <div class="form__error">
          @error('name')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">目標の体重</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="target_weight" placeholder="目標の体重を入力" value="{{ old('target_weight') }}" />kg
        </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">アカウント作成</button>
    </div>
  </form>
  <div class="login__link">
    <a class="login__button-submit" href="/login">ログインはこちら</a>
  </div>
</div>
@endsection
