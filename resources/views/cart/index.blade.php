<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>КОРЗИНА</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
        }

        .main-header,
        .site-footer {
            background-color: #670808;
            color: #e5e5e5;
            padding: 32px 38px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
        }

        .logo {
            width: 75px;
        }

        .main-nav {
            display: flex;
            gap: 100px;
        }

        .nav-link,
        .auth-link {
            color: inherit;
            text-decoration: none;
        }

        .cart-content {
            max-width: 1240px;
            margin: 72px auto;
            padding: 0 20px;
            min-height: 50vh;
        }

        .catalog-header {
            margin-bottom: 40px;
            color: #670808;
            font-weight: 600;
        }

        .cart-status {
            margin-top: 10px;
            color: #868484;
        }

        .content-wrapper {
            display: flex;
            gap: 30px;
        }

        .catalog-column {
            flex: 3;
        }

        .order-column {
            flex: 1;
        }

        .cart-item {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
        }

        .cart-image {
            width: 180px;
            height: auto;
            object-fit: cover;
            border-radius: 8px;
        }

        .order-summary {
            flex: 1;
        }

        .product-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .close-icon-button {
            background: transparent;
            border: none;
            cursor: pointer;
        }

        .close-icon {
            width: 19px;
        }

        .size-info,
        .price,
        .quantity,
        .item-total {
            margin-top: 10px;
        }

        .quantity-buttons {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .quantity-button {
            background-color: #670808;
            color: white;
            border: none;
            padding: 4px 10px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }

        .quantity-value {
            font-weight: 600;
        }

        .total-summary {
            margin-top: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        .checkout-button {
            background-color: #670808;
            color: white;
            border: none;
            padding: 12px 20px;
            margin-top: 20px;
            width: 100%;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            border-radius: 5px;
        }

        .checkout-button:disabled {
            background-color: #aaa;
            cursor: not-allowed;
        }

        .site-footer {
            flex-wrap: wrap;
            gap: 20px;
        }

        .footer-logo {
            width: 75px;
        }

        .footer-nav,
        .social-links {
            display: flex;
            flex-direction: column;
        }

        .footer-link,
        .social-link {
            text-decoration: none;
            color: inherit;
            margin-top: 10px;
        }

        /* Бургер-меню стили */
        .burger-menu {
            display: none;
            flex-direction: column;
            gap: 4px;
            background: none;
            border: none;
            cursor: pointer;
            padding: 8px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .burger-menu:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .burger-line {
            width: 25px;
            height: 3px;
            background: #e5e5e5;
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        .burger-menu.active .burger-line:nth-child(1) {
            transform: rotate(45deg) translate(6px, 6px);
        }

        .burger-menu.active .burger-line:nth-child(2) {
            opacity: 0;
        }

        .burger-menu.active .burger-line:nth-child(3) {
            transform: rotate(-45deg) translate(6px, -6px);
        }

        /* Планшеты */
        @media (max-width: 1024px) {
            .cart-content {
                max-width: 100%;
                margin: 50px auto;
                padding: 0 30px;
            }

            .catalog-header {
                margin-bottom: 30px;
            }

            .content-wrapper {
                gap: 20px;
            }

            .cart-image {
                width: 150px;
            }

            .order-column {
                min-width: 200px;
            }
        }

        /* Мобильные устройства */
        @media (max-width: 768px) {

            .main-header,
            .site-footer {
                padding: 20px;
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
            }

            .logo {
                width: 60px;
            }

            .main-nav {
                display: none;
            }

            .auth-link {
                display: none;
            }

            .burger-menu {
                display: flex;
            }

            .cart-content {
                margin: 30px auto;
                padding: 0 20px;
            }

            .catalog-header a {
                font-size: 20px;
            }

            .cart-status {
                font-size: 14px;
                margin-top: 8px;
            }

            .content-wrapper {
                flex-direction: column;
                gap: 30px;
            }

            .catalog-column {
                order: 2;
            }

            .order-column {
                width: 100%;
                order: 1;
                background-color: #f9f9f9;
                padding: 20px;
                border-radius: 8px;
            }

            .cart-item {
                flex-direction: column;
                gap: 15px;
                padding-bottom: 20px;
                text-align: center;
            }

            .cart-image {
                width: 100%;
                max-width: 200px;
                margin: 0 auto;
            }

            .order-summary {
                width: 100%;
            }

            .product-header {
                flex-direction: column;
                align-items: center;
                gap: 10px;
            }

            .close-icon-button {
                order: -1;
                align-self: flex-end;
            }

            .product-title {
                font-size: 16px;
                text-align: center;
            }

            .size-info,
            .quantity,
            .item-total {
                text-align: center;
                margin-top: 8px;
            }

            .quantity-buttons {
                justify-content: center;
            }

            .total-summary {
                text-align: center;
                font-size: 20px;
            }

            .checkout-button {
                padding: 15px 20px;
                font-size: 18px;
            }
        }

        @media (max-width: 480px) {

            .main-header,
            .site-footer {
                padding: 15px;
            }

            .logo {
                width: 50px;
            }

            .cart-content {
                margin: 20px auto;
                padding: 0 15px;
            }

            .catalog-header a {
                font-size: 18px;
            }

            .cart-status {
                font-size: 13px;
            }

            .cart-item {
                margin-bottom: 20px;
                padding-bottom: 15px;
            }

            .cart-image {
                max-width: 150px;
            }

            .product-title {
                font-size: 14px;
            }

            .size-info,
            .quantity,
            .item-total {
                font-size: 14px;
            }

            .quantity-button {
                padding: 6px 12px;
                font-size: 14px;
            }

            .total-summary {
                font-size: 18px;
            }

            .checkout-button {
                padding: 12px 16px;
                font-size: 16px;
            }

            .close-icon {
                width: 16px;
            }
        }

        @media (max-width: 360px) {

            .main-header,
            .site-footer {
                padding: 10px;
            }

            .logo {
                width: 45px;
            }

            .cart-content {
                padding: 0 10px;
            }

            .catalog-header a {
                font-size: 16px;
            }

            .cart-image {
                max-width: 120px;
            }

            .product-title {
                font-size: 13px;
            }

            .size-info,
            .quantity,
            .item-total {
                font-size: 13px;
            }

            .total-summary {
                font-size: 16px;
            }

            .checkout-button {
                padding: 10px 14px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    @include('components.header')

    <section class="cart-content">
        <div class="catalog-header">
            <a href="{{ url('catalog') }}" class="catalog-title"
                style="font-size: 24px; text-decoration: none; color: #670808;">КАТАЛОГ</a>
            <p class="cart-status">КОРЗИНА <span class="cart-count">{{ $cartItems->count() }} товар(ов)</span></p>
        </div>

        <div class="content-wrapper">
            <div class="catalog-column">
                @foreach ($cartItems as $item)
                    @if ($item->good)
                        <div class="cart-item">
                            <img src="{{ asset('storage/' . $item->good->image) }}" alt="{{ $item->good->name }}"
                                class="cart-image" onerror="this.src='{{ asset('categories/default.jpg') }}'">

                            <div class="order-summary">
                                <div class="product-header">
                                    <h2 class="product-title">{{ $item->good->name }}</h2>
                                    <form action="{{ route('cart.remove', $item) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="close-icon-button">
                                            <img src="https://cdn-icons-png.flaticon.com/512/1828/1828843.png"
                                                alt="Удалить" class="close-icon" />
                                        </button>
                                    </form>
                                </div>

                                <p class="size-info">Размер: <span class="size-value">{{ $item->good->size }}</span></p>

                                <div class="quantity">
                                    <form action="{{ route('cart.update', $item) }}" method="POST" class="update-form">
                                        @csrf
                                        @method('PATCH')
                                        <div class="quantity-buttons">
                                            Количество:
                                            <span class="quantity-value">{{ $item->quantity }}</span>

                                        </div>
                                    </form>
                                </div>

                                @php
                                    $itemTotal = $item->good->price * $item->quantity;
                                @endphp

                                <p class="item-total">Сумма: {{ number_format($itemTotal, 2, ',', ' ') }} руб.</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="order-column">
                @php
                    $total = 0;
                    foreach ($cartItems as $item) {
                        if ($item->good) {
                            $total += $item->good->price * $item->quantity;
                        }
                    }
                @endphp

                <div class="total-summary">Итого: {{ number_format($total, 2, ',', ' ') }} руб.</div>

                @if ($cartItems->count() > 0)
                    <form action="{{ url('/') }}" method="GET">
                        <button type="submit" class="checkout-button">ОФОРМИТЬ ЗАКАЗ</button>
                    </form>
                @else
                    <button class="checkout-button" disabled>КОРЗИНА ПУСТА</button>
                @endif
            </div>
        </div>
    </section>

    @include('components.footer')

</body>

</html>
