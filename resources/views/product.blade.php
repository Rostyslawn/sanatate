<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$product->name}}</title>
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
			<div><a href="#">Продавцы</a></div>
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
                <span>{{$product->likes}}</span>
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
        <div><img src="{{asset('imgs/categories/wine-bottle.png')}}" alt="Alcohol"></div>
        <div><img src="{{asset('imgs/categories/electronics.png')}}" alt="Electronics"></div>
        <div><img src="{{asset('imgs/categories/cosmetics.png')}}" alt="Cosmetics"></div>
        <div><img src="{{asset('imgs/categories/geympad.png')}}" alt="Games"></div>
        <div><img src="{{asset('imgs/categories/home.png')}}" alt="House products"></div>
        <div><img src="{{asset('imgs/categories/paws.png')}}" alt="Products for animals"></div>
        <div><img src="{{asset('imgs/categories/plumbing.png')}}" alt="Plumbing"></div>
        <div><img src="{{asset('imgs/categories/school-bag.png')}}" alt="Products for school"></div>
    </div>
    <button class="language">RU</button>
</div>
<div class="content">
    <div class="product">
        <div class="imgs">
            <div class="small">
                @foreach($productImages as $image)
                    <img src="{{$image->image}}" alt="{{$product->name}}">
                @endforeach
            </div>
            <div class="big">
                <img src="{{$product->image}}" alt="{{$product->name}}">
            </div>
        </div>
        <div class="product-info">
            <h2>{{$product->name}}</h2>
            <div class="product-data">
                <div class="product-code">
                    <span class="code">Код товара:</span>
                    <span>{{$product->code}}</span>
                </div>
                <div class="image share"><img alt="share" src="{{asset('imgs/share.png')}}"></div>
                <div class="image like"><img alt="like" src="{{asset('imgs/like-gray.png')}}"></div>
                <div class="company-logo"><img alt="company logo" src="{{asset('imgs/company-logo.png')}}"></div>
            </div>
            <div class="prices margins">
                @if($product->price)
                    <span class="price">{{$product->price}} грн</span>
                    <span class="old-price">{{$product->old_price}} грн</span>
                @else
                    <span class="price">{{$product->old_price}} грн</span>
                @endif
            </div>
            <div class="count-and-buy">
                <div class="count">
                    <button onclick="minus()" class="minus"><span></span></button>
                    <span class="count-span">1</span>
                    <button onclick="plus()" class="plus"><span></span></button>
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
                <form class="buy">
                    <button type="submit">
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
<div class="data block">
    <div class="description">
        <h3>Описание</h3>
        {{$product->description}}
    </div>
    <div class="characteristics">
        <h3>Характеристики</h3>
        <div class="general">
            <span>Общие характеристики</span>
            <div class="text">
                <div class="producer">Производитель <span>{{$product->producer}}</span></div>
                <div class="type">Тип <span>{{$product->type}}</span></div>
                <div class="color">Цвет <span>{{$product->color}}</span></div>
            </div>
        </div>
    </div>
</div>
<h2 class="similar-products">Похожие товары</h2>
<div class="another-products block">
    {{-- shuffle = inRandomOrder   --}}
    @foreach($allProducts->shuffle()->take(4) as $product)
        <div class="product">
            <div class="img"><img src="{{$product->image}}"></div>
            <span class="product-name">
                {{$product->name}}
            </span>
            <div class="prices">
                @if($product->price)
                    <span class="price">{{$product->price}} грн</span>
                    <span class="old-price">{{$product->old_price}} грн</span>
                @else
                    <span class="price">{{$product->old_price}} грн</span>
                @endif
            </div>
            <div class="buttons">
                <div class="like">
                    <img src="{{asset('imgs/like-gray.png')}}" alt="like">
                </div>
                <div class="compare">
                    <img src="{{asset('imgs/compare.png')}}" alt="compare">
                </div>
                <button class="buy">
                    <span>Купить</span>
                    <div class="cart"><img src="{{asset('imgs/cart.png')}}"></div>
                </button>
            </div>
        </div>
    @endforeach
</div>
<script src="{{asset('js/count.js')}}"></script>
</body>
</html>
