@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('link')
<a class="header__link" href="/register">会員登録</a>
@endsection

@section('content')
<div class="login__form">
  <h2 class="login-form__heading content__heading">ログイン</h2>
  <div class="login-form__inner">
    <form class="form" action="/login" method="post">
      @csrf
      <div class="form__group">
        <div class="form__group-title">
        <span class="form__label--item">ユーザー名/メールアドレス</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">パスワード</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="password" name="password" />
        </div>
        <div class="form__error">
          @error('password')
          {{ $message }}
          @enderror
        </div>
      </div>
     </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">ログイン</button>
    </div>
</div>
  </form>
  <div class="register__link">
    <a class="register__button-submit" href="/register">会員登録の方はこちら</a>
  </div>
</div>
@endsection