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
            <div><a href="#">NEW</a></div>
            <div><a href="#">SALE</a></div>
            <div><a href="#">О нас</a></div>
            <div><a href="#">Контакты</a></div>
            <div><a href="#">Доставка и оплата</a></div>
        </div>
        <div class="bottom">
            <label>
                <input placeholder="Поиск">
                <button class="search"><img alt="search" src="{{asset('imgs/search.png')}}"></button>
            </label>
        </div>
    </div>
    <div class="right-side item">
        <div class="top">
            <div class="phone-icon"><img alt="phone" src="{{asset('imgs/phone-icon.png')}}"></div>
            <div>+38888888</div>
            <div class="arrow-down"><img src="{{asset('imgs/leftarrow.png')}}" class="arrow-down"></div>
        </div>
        <div class="bottom">
            <div class="icon like">
                <button><img alt="like" src="{{asset('imgs/like.png')}}"></button>
                <span>0</span>
            </div>
            <div class="icon stats">
                <button><img alt="stats" src="{{asset('imgs/stats.png')}}"></button>
                <span>0</span>
            </div>
            <div class="icon cart">
                <button><img alt="cart" src="{{asset('imgs/cart.png')}}"></button>
                <span>0</span>
            </div>
        </div>
    </div>
</div>
<div class="nav block">
    <button class="all-categories">
        <img src="#">
        <span>Все категории</span>
        <div class="arrow-down"><img src="{{asset('imgs/leftarrow.png')}}"></div>
    </button>
    <div class="items">
        <div><img src="#" alt=""></div>
        <div><img src="#" alt=""></div>
        <div><img src="#" alt=""></div>
        <div><img src="#" alt=""></div>
        <div><img src="#" alt=""></div>
        <div><img src="#" alt=""></div>
        <div><img src="#" alt=""></div>
        <div><img src="#" alt=""></div>
        <div><img src="#" alt=""></div>
    </div>
    <button class="language">RU</button>
</div>
<div class="content">
    <div class="product">
        <div class="imgs">
            <div class="small">
                <img src="#" alt="product image">
                <img src="#" alt="product image">
                <img src="#" alt="product image">
                <img src="#" alt="product image">
            </div>
            <div class="big">
                <img src="#" alt="product image">
            </div>
        </div>
        <div class="product-info">
            1
        </div>
    </div>
</div>
</body>
</html>
