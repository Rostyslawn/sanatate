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
        <img class="categories" src="{{asset('imgs/categories.png')}}">
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
                <img class="active" src="{{asset('imgs/img.jpg')}}" alt="product image">
                <img src="{{asset('imgs/img.jpg')}}" alt="product image">
                <img src="{{asset('imgs/img.jpg')}}" alt="product image">
                <img src="{{asset('imgs/img.jpg')}}" alt="product image">
            </div>
            <div class="big">
                <img src="{{asset('imgs/img.jpg')}}" alt="product image">
            </div>
        </div>
        <div class="product-info">
            <h2>Название товара</h2>
            <div class="product-data">
                <div class="product-code">
                    <span class="code">Код товара:</span>
                    <span>111111</span>
                </div>
                <div class="image share"><img alt="share" src="{{asset('imgs/share.png')}}"></div>
                <div class="image like"><img alt="like" src="{{asset('imgs/like-gray.png')}}"></div>
                <div class="company-logo"><img alt="company logo" src="{{asset('imgs/img.jpg')}}"></div>
            </div>
            <div class="prices margins">
                <span class="price">730 грн</span>
                <span class="old-price">700 грн</span>
            </div>
            <div class="count-and-buy">
                <div class="count">
                    <button class="minus">-</button>
                    <span class="count-span">1</span>
                    <button class="plus">+</button>
                </div>
                <button class="into-cart">В корзину</button>
            </div>
            <hr class="margins">
            <div class="guarantee-delivery">
                <div class="column">
                    <div class="guarantee">
                        <div class="img"><img alt="guarantee" src="{{asset('imgs/guarantee.png')}}"></div>
                        <span>Гарантия 1 год</span>
                    </div>
                    <div class="delivery">
                        <div class="img"><img alt="delivery" src="{{asset('imgs/delivery.png')}}"></div>
                        <div class="spans">
                            <span>По Киеву 100 грн</span>
                            <span>По Украине 1000 грн</span>
                        </div>
                    </div>
                </div>
                <form class="buy"> {{-- action="{{ route("buyProduct", ["product_name" => $product->name]) }}" method="post" --}}
{{--                    @csrf--}}
                    <button>
                        <div class="img">
                            <img src="{{asset('imgs/cursor.png')}}">
                        </div>
                        <span>Купить в <br> 1 клик</span>
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/count.js')}}"></script>
</body>
</html>
