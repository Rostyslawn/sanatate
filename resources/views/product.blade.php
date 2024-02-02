<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product name</title>
    @vite("resources/scss/index.scss")
</head>
<body>
    <div class="header block">
        <div class="logo item"><img alt="logo" src="{{asset('imgs/logo.png')}}"></div>
        <div class="central-side item">
            <div class="top">
                <div>NEW</div>
                <div>SALE</div>
                <div>О нас</div>
                <div>Контакты</div>
                <div>Доставка и оплата</div>
            </div>
            <div class="bottom">
                <label>
                    <input placeholder="Поиск">
                    <button class="search"><img alt="search" src="#"></button>
                </label>
            </div>
        </div>
        <div class="right-side item">
            <div class="top">
                <div class="phone-icon"><img alt="phone" src="{{asset('imgs/phone-icon.png')}}"></div>
                <div>+38888888</div>
                <div><img src="#" class="arrow-down"></div>
            </div>
            <div class="bottom">
                <div class="icon like"><img alt="like" src="{{asset('imgs/like.png')}}"></div>
                <div class="icon stats"><img alt="stats" src="#"></div>
                <div class="icon cart"><img alt="cart" src="#"></div>
            </div>
        </div>
    </div>
</body>
</html>
