<!DOCTYPE html>
<html lang="ru">
    <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap"
    rel="stylesheet"
  />
  <title>КОРЗИНА</title>
<head>
    <style>
        .basket {
  background-color: #fff;
  overflow: hidden;
}

.header {
  background-color: #670808;
  display: flex;
  width: 100%;
  padding: 33px 38px;
  align-items: center;
  gap: 20px;
  font-family:
    Montserrat,
    -apple-system,
    Roboto,
    Helvetica,
    sans-serif;
  font-size: 16px;
  color: #e5e5e5;
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
  color: #e5e5e5;
  text-decoration: none;
}

.auth-link {
  align-self: stretch;
  margin: auto 0;
  color: #e5e5e5;
  text-decoration: none;
}

.cart-content {
  margin: 72px 33px 0;
  width: 100%;
  max-width: 1242px;
}

.content-wrapper {
  gap: 20px;
  display: flex;
}

.catalog-column {
  display: flex;
  flex-direction: column;
  align-items: stretch;
  line-height: normal;
  width: 76%;
}

.catalog-header {
  display: flex;
  width: 100%;
  flex-direction: column;
  align-items: flex-start;
  font-family:
    Montserrat,
    -apple-system,
    Roboto,
    Helvetica,
    sans-serif;
  font-size: 24px;
  color: #670808;
  font-weight: 600;
  letter-spacing: 1.2px;
}

.catalog-title-wrapper {
  display: flex;
  align-items: stretch;
  gap: 42px;

  white-space: nowrap;
}

.catalog-icon {
  aspect-ratio: 0.61;
  object-fit: contain;
  object-position: center;
  width: 30px;
  flex-shrink: 0;
}

.catalog-title {
  text-decoration: none;
  display: flex;
  margin: auto 0;
  font-size: 24px;
}

.cart-status {
  margin-top: 59px;
}

.cart-count {
  color: #868484;
}

.cart-image {
  aspect-ratio: 2.36;
  object-fit: contain;
  object-position: center;
  width: 100%;
  align-self: stretch;
  margin-top: 57px;
}

.order-column {
  display: flex;
  flex-direction: column;
  align-items: stretch;
  line-height: normal;
  width: 24%;
  margin-left: 20px;
}

.order-summary {
  display: flex;
  margin-top: 335px;
  width: 100%;
  flex-direction: column;
  align-items: flex-start;
  font-family:
    Montserrat,
    -apple-system,
    Roboto,
    Helvetica,
    sans-serif;
  font-size: 20px;
  color: #000;
  font-weight: 600;
}

.product-header {
  display: flex;
  align-items: stretch;
  gap: 26px;
  font-size: 16px;
}

.close-icon {
  object-fit: contain;
  object-position: center;
  width: 19px;
  align-self: flex-start;
  margin-top: 20px;

}

.size-info {
  margin-top: 21px;
}

.size-value {
  font-weight: 500;
  color: #670808;
}

.price {
  margin-top: 23px;
}

.checkout-button {
  background-color: #670808;
  width: 100%;
  margin-top: 23px;
  padding: 13px 28px;
  color: #fff;
  border: none;
  font-family: inherit;
  font-size: inherit;
  font-weight: inherit;
  cursor: pointer;
}

.footer {
  background-color: #670808;
  display: flex;
  margin-top: 189px;
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
  color: #e5e5e5;
  font-weight: 600;
  letter-spacing: 0.8px;
  justify-content: space-between;
}

.footer-nav {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  white-space: nowrap;
}

.footer-link {
  color: #e5e5e5;
  text-decoration: none;
}

.footer-link:not(:first-child) {
  margin-top: 22px;
}

.contact-info {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.social-link {
  color: #e5e5e5;
  text-decoration: none;
}

.social-link:not(:first-child) {
  margin-top: 22px;
}

.email-link {
  color: #e5e5e5;
  text-decoration: none;
  margin-top: 29px;
}
.hrefcat{
  text-decoration: none;
  color: #670808;
}
.in-link{
  text-decoration: none;
}
    </style>
        <header class="header">
          <img src="https://ibb.co/svWV4PPr" alt="Logo" class="logo" />
          <nav class="main-nav">
            <a href="{{url('/')}}" class="nav-link">ГЛАВНАЯ</a>
            <a href="#" class="nav-link">КОНТАКТЫ</a>
          </nav>
          <a href="{{url('register')}}" class="auth-link">РЕГИСТРАЦИЯ|ВХОД</a>
        </header>
      
        <section class="cart-content">
    <div class="content-wrapper">
        <div class="catalog-column">
            <div class="catalog-header">
                <div class="catalog-title-wrapper">
                    <a href="{{url('catalog')}}" class="hrefcat">
                        <h1 class="catalog-title">КАТАЛОГ</h1>
                    </a>
                </div>
                <p class="cart-status">
                    КОРЗИНА
                    <span class="cart-count">{{ $cartItems->count() }} товар(ов)</span>
                </p>
                @foreach ($cartItems as $cartItem)
                <img src="{{ $cartItem->image }}" alt="Cart items" class="cart-image" />
                @endforeach

            </div>
        </div>

        <div class="order-column">
            @foreach($cartItems as $item)
            <div class="order-summary">
                <div class="product-header">
                    <h2 class="product-title">{{ $item->good->name }}</h2>
                    <form action="{{ route('cart.remove', $item) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="close-icon-button">
                            <img src="img/close-icon.png" alt="Close" class="close-icon" />
                        </button>
                    </form>
                </div>
                <p class="size-info">
                    Размер:
                    <span class="size-value">{{ $item->size }}</span>
                </p>
                <p class="price">{{ $item->good->price }} руб.</p>
                <p class="quantity">Количество: {{ $item->quantity }}</p>
            </div>
            @endforeach
            <a href="#"  class="in_link">
            <button class="checkout-button">ОФОРМИТЬ ЗАКАЗ</button>
            </a>
        </div>
    </div>
</section>
      
        <footer class="footer">
          <img src="https://ibb.co/svWV4PPr" alt="Logo" class="logo" />
          <nav class="footer-nav">
            <a href="{{url('/')}}" class="footer-link">ГЛАВНАЯ</a>
            <a href="#" class="footer-link">КОНТАКТЫ</a>
            <a href="{{url('register')}}" class="footer-link">РЕГИСТРАЦИЯ|ВХОД</a>
          </nav>
          <div class="contact-info">
            <a href="#" class="social-link">НАШ TG</a>
            <a href="#" class="social-link">НАШ VK</a>
            <a href="mailto:CARTEMOUS@GMAIL.COM" class="email-link"
              >CARTEMOUS@GMAIL.COM</a
            >
          </div>
        </footer>
      </main>
    
</head>
<body>
    
</body>
</html>