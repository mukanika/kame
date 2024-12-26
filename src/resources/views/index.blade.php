<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>
<header class="header">
    <div class="header__inner">
      <div class="header-utilities">
        <a class="header__logo" href="/mypage/profile">
          <img src="img/logo.svg" alt="coachtech">
          <input type="text" placeholder="なにをお探しですか？" name="product_name" class="text">
          <a href="/">ログアウト</a>
          <a href="/?tab=mylist">マイページ</a>
        </a>
      </div>
    </div>
  </header>
  <a href="/">おすすめ</a>
  <a href="/?tab=mylist">マイリスト</a>

  <div class="itemlist">
    <p>
      <img src="{{asset('storage/app/public/images/udedokei.jpg')}}" alt="腕時計">
      <div class="item-body">
        <p>腕時計 15000円</p>
        <div class="item-form">
        </div>
      </div>
    </p>

    <p>
      <img src="{{asset('storage/hdd.jpg')}}" alt="HDD">
      <div class="item-body">
        <p>HDD 5000円</p>
        <div class="item-form">
        </div>
      </div>
    </p>
  </div>
</body>
</html>