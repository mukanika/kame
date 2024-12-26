<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マイページ</title>
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

</body>
</html>