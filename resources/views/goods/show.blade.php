<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet" />
    <title></title>

</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .top-nav {
            background-color: rgba(103, 8, 8, 1);
            display: flex;
            padding: 31px 39px;
            align-items: center;
            gap: 20px;
            font-family:
                Montserrat,
                -apple-system,
                Roboto,
                Helvetica,
                sans-serif;
            font-size: 16px;
            color: rgba(229, 229, 229, 1);
            font-weight: 600;
            white-space: nowrap;
            letter-spacing: 0.8px;
            justify-content: space-between;
        }

        .logo {
            object-fit: contain;
            object-position: center;
            width: 75px;
            align-self: stretch;
            flex-shrink: 0;
        }

        .main-nav {
            align-self: stretch;
            display: flex;
            margin: auto 0;
            align-items: stretch;
            gap: 100px;
        }

        .nav-link {
            color: inherit;
            text-decoration: none;
        }

        .auth-link {
            align-self: stretch;
            margin: auto 0;
            color: inherit;
            text-decoration: none;
        }

        .product-content {
            display: flex;
            margin-top: 50px;
            padding: 0 43px;
            flex-direction: column;
            align-items: stretch;
        }

        .product-details {
            display: flex;
            justify-content: center;
        }

        .product-layout {
            gap: 20px;
            display: flex;
            line-height: 1;
        }

        .product-gallery {
            display: flex;
            flex-direction: column;
            align-items: stretch;
            line-height: normal;
            margin-left: 0;
            width: 300px;
            height: 300px;

        }



        .product-info {
            display: flex;
            gap: 20px;
            margin-top: 36px;
            flex-grow: 1;
            flex-direction: column;
            align-items: start;
            font-family:
                Montserrat,
                -apple-system,
                Roboto,
                Helvetica,
                sans-serif;
            color: rgba(0, 0, 0, 1);
        }

        .size-label {
            font-size: 20px;
            font-weight: 600;
        }

        .size-option {
            font-weight: 500;
        }

        .size-option-selected {
            font-weight: 500;
            color: rgba(103, 8, 8, 1);
        }

        .price-color {
            display: flex;
            gap: 5px;
            align-items: stretch;
        }

        .product-price {
            font-size: 20px;
            font-weight: 600;
        }

        .color-label {
            font-size: 16px;

            align-self: start;
            font-weight: bold;

        }

        .color-label1 {
            font-size: 16px;
            margin-top: 13px;

        }

        .color-preview {
            aspect-ratio: 1.65;
            object-fit: contain;
            object-position: center;
            width: 43px;

        }

        .product-summary {
            font-size: 20px;
            font-weight: 600;

        }

        .product-title {
            font-size: 16px;
            font-weight: 300;
            align-self: stretch;

        }

        .buy-button {
            background-color: rgba(103, 8, 8, 1);
            border: none;
            align-self: stretch;
            margin-top: 49px;
            padding: 10px 70px 16px;
            font-size: 20px;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            white-space: nowrap;
            cursor: pointer;
        }

        .product-tabs {
            border: 1px solid rgba(0, 0, 0, 1);
            align-self: center;
            display: flex;
            margin-top: 69px;
            width: 100%;
            max-width: 1264px;
            padding-bottom: 59px;
            flex-direction: column;
            align-items: start;
            font-family:
                Montserrat,
                -apple-system,
                Roboto,
                Helvetica,
                sans-serif;
            color: rgba(0, 0, 0, 1);
        }

        .tabs-header {
            display: flex;
            margin-left: 24px;
            align-items: stretch;
            gap: 30px;
            font-size: 16px;
            white-space: nowrap;
        }

        .tab-active {
            font-weight: 600;
            margin: auto 0;
            flex-grow: 1;
        }

        .tabs-divider {
            display: flex;
            align-items: stretch;
            gap: 9px;
            font-weight: 300;
            flex-grow: 1;
            flex-shrink: 1;
            flex-basis: auto;
        }

        .divider {
            border-left: 1px solid rgba(134, 132, 132, 1);
            width: 1px;
            flex-shrink: 0;
            height: 55px;
        }

        .tab {
            margin: auto 0;
            flex-basis: auto;
            font-size: 16px;
            font-weight: 300;
        }

        .tab-separator {
            border: none;
            border-top: 1px solid rgba(0, 0, 0, 1);
            align-self: stretch;
            margin: 0;
            flex-shrink: 0;
            height: 1px;
        }

        .description-text {
            font-size: 20px;
            font-weight: 400;
            margin: 46px 0 0 65px;
        }

        .popular-products {
            margin-top: 61px;
        }

        .section-header {
            align-self: start;
            display: flex;
            margin-top: 72px;
            align-items: stretch;
            gap: 23px;
            font-family:
                Montserrat,
                -apple-system,
                Roboto,
                Helvetica,
                sans-serif;
            font-size: 24px;
            color: #000;
            font-weight: 700;
            letter-spacing: 1.2px;
        }

        .section-title {
            flex: 1;
            margin: 0;
            font-size: inherit;
        }

        .section-icon {
            aspect-ratio: 0.72;
            object-fit: contain;
            object-position: center;
            width: 18px;
            align-self: start;
            flex-shrink: 0;
        }

        .product-info1 {
            margin-top: -5px;
            padding: 15px;
            text-align: center;
        }

        .product-title1 {
            font-size: 16px;
            color: #333;
            margin-bottom: 10px;
            font-weight: 400;
        }

        .product-price1 {
            font-size: 18px;
            color: #670808;
            font-weight: 700;
        }


        .in_link {
            text-decoration: none;
            color: #000;
            display: flex;
            gap: 5px;

        }

        .product-link {
            text-decoration: none;
        }

        .section-link {
            text-decoration: none;
            font-family:
                Montserrat,
                -apple-system,
                Roboto,
                Helvetica,
                sans-serif;
            color: rgba(0, 0, 0, 1);
            gap: 30px;
        }

        .section-link1 {
            text-decoration: none;
            font-family:
                Montserrat,
                -apple-system,
                Roboto,
                Helvetica,
                sans-serif;
            color: rgba(0, 0, 0, 1);
            gap: 30px;
        }

        .product-grid {
            display: flex;
            margin-top: 59px;
            align-items: start;
            gap: 20px;
            font-family:
                Montserrat,
                -apple-system,
                Roboto,
                Helvetica,
                sans-serif;
            justify-content: space-between;
        }



        .site-footer {
            background-color: rgba(103, 8, 8, 1);
            display: flex;
            margin-top: 99px;
            padding: 36px 50px;
            align-items: stretch;
            gap: 20px;
            font-family:
                Montserrat,
                -apple-system,
                Roboto,
                Helvetica,
                sans-serif;
            font-size: 16px;
            color: rgba(229, 229, 229, 1);
            font-weight: 600;
            letter-spacing: 0.8px;
            justify-content: space-between;
        }

        .footer-logo {
            aspect-ratio: 1.1;
            object-fit: contain;
            object-position: center;
            width: 75px;
            margin: auto 0;
            flex-shrink: 0;
        }

        .footer-nav {
            display: flex;
            flex-direction: column;
            align-items: start;
            white-space: nowrap;
        }

        .footer-link {
            color: inherit;
            text-decoration: none;
            margin-top: 22px;
        }

        .footer-link:first-child {
            margin-top: 0;
        }

        .social-links {
            display: flex;
            flex-direction: column;
            align-items: start;
        }

        .social-link {
            color: inherit;
            text-decoration: none;
            margin-top: 22px;
        }

        .social-link:first-child {
            margin-top: 0;
        }

        .products-grid {

            display: flex;
            margin-top: 68px;
            width: 100%;
            max-width: 1655px;
            align-items: stretch;
            font-family: 'Montserrat', -apple-system, Roboto, Helvetica, sans-serif;
            font-size: 16px;
            color: #000;
            font-weight: 400;
            text-align: center;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-left: 20px;
        }

        .product-card {
            display: inline-block;
            width: 200px;
            margin: 15px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 8px;

            transition: transform 0.3s ease;
            position: relative;
            /* Добавляем для позиционирования */
            height: 300px;
            /* Фиксированная высота блока */
        }

        .product-image-container {
            width: 100%;
            height: 180px;
            overflow: hidden;
            position: relative;
            margin-bottom: 15px;
        }

        .product-image1 {
            margin-top: 80px;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
        }

        .product-image {
            margin-top: 10px;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
        }



        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .buy-link {
            text-decoration: none;
        }

        .main-header {
            background-color: rgb(103, 8, 8);
            display: flex;
            width: 100%;
            padding: 32px 38px;
            align-items: center;
            gap: 20px;
            font-family:
                Montserrat,
                -apple-system,
                Roboto,
                Helvetica,
                sans-serif;
            font-size: 16px;
            color: rgb(229, 229, 229);
            font-weight: 600;
            white-space: nowrap;
            letter-spacing: 0.8px;
            justify-content: space-between;
        }

        .logo {
            aspect-ratio: 1.1;
            object-fit: contain;
            object-position: center;
            width: 75px;
            align-self: stretch;
            flex-shrink: 0;
        }

        .main-nav {
            align-self: stretch;
            display: flex;
            margin: auto 0;
            align-items: stretch;
            gap: 100px;
        }

        .nav-link {
            color: inherit;
            text-decoration: none;
        }

        .auth-link {
            align-self: stretch;
            margin-right: 80px;
            margin-top: 25px;
            color: inherit;
            text-decoration: none;
        }

        .in-link {
            text-decoration: none;
        }



        /* Мобильная адаптивность */
        @media (max-width: 768px) {
            .product-info1 {
                margin-top: -20px;
                padding: 0px;
            }

            .product-content {
                padding: 0 20px;
                margin-top: 20px;
            }

            .product-layout {
                flex-direction: column;
                align-items: center;
                gap: 20px;
            }

            .product-gallery {
                width: 100%;
                max-width: 300px;
                height: auto;
                order: 1;
            }

            .product-image1 {
                margin-top: 20px;
                width: 100%;
                height: auto;
                max-height: 300px;
                object-fit: contain;
            }

            .product-info {
                margin-top: 0;
                width: 100%;
                gap: 20px;
                order: 2;
            }

            .size-label,
            .product-price {
                font-size: 16px;
            }

            .color-label {
                font-size: 14px;
            }

            .color-label1 {
                font-size: 14px;
                margin-top: 8px;
            }

            .price-color {
                justify-content: center;
                flex-direction: column;
                align-items: center;
                gap: 10px;
            }

            .buy-button {
                margin-top: 25px;
                padding: 12px 40px;
                font-size: 16px;
                width: 100%;
                max-width: 300px;
            }

            .product-tabs {
                margin-top: 40px;
                padding-bottom: 40px;
            }

            .tabs-header {
                margin-left: 15px;
                font-size: 14px;
            }

            .description-text {
                font-size: 16px;
                margin: 25px 0 0 20px;
                padding-right: 20px;
            }

            .section-header {
                margin-top: 40px;
                font-size: 18px;
                justify-content: center;
            }

            .in_link {
                margin-left: 0;
            }

            .products-grid {
                margin-top: 30px;
                padding: 0 15px;
                justify-content: center;
            }

            .product-card {
                width: 160px;
                height: 260px;
                margin: 8px;
            }

            .product-image {
                height: 120px;
            }

            .product-title1 {
                font-size: 14px;
            }

            .product-price1 {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .product-content {
                padding: 0 15px;
            }

            .product-gallery {
                max-width: 250px;
            }

            .product-image1 {
                max-height: 250px;
            }

            .size-label,
            .product-price {
                font-size: 15px;
            }

            .color-label,
            .color-label1 {
                font-size: 13px;
            }

            .buy-button {
                padding: 10px 30px;
                font-size: 15px;
                max-width: 250px;
            }

            .product-tabs {
                margin-top: 30px;
            }

            .tabs-header {
                margin-left: 10px;
                font-size: 13px;
            }

            .description-text {
                font-size: 14px;
                margin: 20px 0 0 15px;
                padding-right: 15px;
            }

            .section-header {
                font-size: 16px;
                margin-top: 30px;
            }

            .section-icon {
                width: 14px;
            }

            .products-grid {
                padding: 0 10px;
                gap: 10px;
            }

            .product-card {
                width: 140px;
                height: 240px;
                margin: 5px;
            }

            .product-image {
                height: 100px;
            }

            .product-title1 {
                font-size: 13px;
            }

            .product-price1 {
                font-size: 15px;
            }
        }

        @media (max-width: 360px) {
            .product-info1 {
                margin-top: -20px;
                padding: 0px;
            }

            .product-content {
                padding: 0 10px;
            }

            .product-gallery {
                max-width: 200px;
            }

            .product-image1 {
                max-height: 200px;
            }

            .size-label,
            .product-price {
                font-size: 14px;
            }

            .buy-button {
                padding: 8px 20px;
                font-size: 14px;
                max-width: 200px;
            }

            .description-text {
                font-size: 13px;
                margin: 15px 0 0 10px;
                padding-right: 10px;
            }

            .products-grid {
                gap: 8px;
            }

            .product-card {
                width: 100%;
                height: 220px;
                margin: 3px;
            }

            .product-image {
                height: 90px;
            }

            .product-title1 {
                font-size: 12px;
            }

            .product-price1 {
                font-size: 14px;
            }
        }
    </style>
    @include('components.header')


    <main class="product-content">
        <article class="product-details" data-el="div-1">
            <div class="product-layout">
                <section class="product-gallery">
                    <img src="{{ asset('storage/' . $good->image) }}" class="product-image1" alt="Product Image" />
                </section>

                <section class="product-info">
                    <h2 class="">{{ strtoupper($good->name) }}</h2>

                    <div class="size-selector">
                        <p class="size-label">
                            Размер:
                            <span class="size-option">{{ $good->size }}</span>

                        </p>
                    </div>
                    <div class="price">

                        <p class="product-price">{{ $good->price }} руб.</p>     
                     </div>
                        <div class="price-color">
                        </div>
                        <h2 class="color-label">цвет:</h2>
                        <div class="color-label1">{{ $good->color->title }} </div>
              
                    @if($inCart)
                    <button class="buy-button disabled" disabled>Уже в корзине</button>
                    @else
                    <form action="{{ route('cart.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="goods_id" value="{{ $good->id }}">
                        <button type="submit" class="buy-button">КУПИТЬ</button>
                    </form>
                    @endif
                    @if(session('error'))
                    <div class="session-error-message">
                        {{ session('error') }}
                    </div>
                    @endif

                    @if(session('success'))
                    <div class="session-success-message">
                        {{ session('success') }}
                    </div>
                    @endif
                </section>
            </div>
        </article>

        <section class="product-tabs">
            <div class="tabs-header">
                <h2 class="tab-active">описание</h2>

            </div>
            <hr class="tab-separator" />
            <p class="description-text">
                {{ $good->description }}
            </p>
        </section>

        <div class="section-header">
            <a href="#" class="in_link">
                <h2 class="section-title">Популярные позиции</h2>
                <img src="http://127.0.0.1:8000/Polygon3.png" class="section-icon" alt="Popular items icon" />
            </a>
        </div>

        <section class="products-grid">
            @foreach($popularGoods as $good)
            <div class="product-card">
                <a href="{{ route('goods.show', $good->id) }}" class="product-link">
                    <div class="product-image-container">
                        <img src="{{ asset('storage/' . $good->image) }}"
                            alt="{{ $good->name }}"
                            class="product-image"
                            onerror="this.src='{{ asset('goods/yojibomber.png')}}'">
                    </div>
                    <div class="product-info1">
                        <h3 class="product-title1">{{ $good->name }}</h3>
                        <p class="product-price1">{{ number_format($good->price, 0, '', ' ') }} ₽</p>
                    </div>
                </a>
            </div>
            @endforeach
        </section>
    </main>


    @include('components.footer')

</body>

</html>