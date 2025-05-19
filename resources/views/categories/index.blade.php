<!doctype html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>КАТЕГОРИИ</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat :wght@400;600&display=swap" rel="stylesheet" />
  <style>
    .category {
      background-color: #FFFFFF;
      display: flex;
      flex-direction: column;
      align-items: center;
      font-family: Montserrat, -apple-system, Roboto, Helvetica, sans-serif;
      font-size: 16px;
      color: #E5E5E5;
      font-weight: 600;
      overflow: none;
    }

    .main-header {
      background-color: #670808;
      align-self: stretch;
      display: flex;
      width: 100%;
      padding: 32px 35px;
      align-items: center;
      gap: 20px;

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
      margin-top: auto;
      margin-bottom: auto;
      align-items: stretch;
      gap: 100px;
    }

    .nav-link,
    .auth-link {
      margin-right: 50px;
      color: #E5E5E5;
      text-decoration: none;
    }

    .category-title {
      color: #670808;
      font-size: 24px;
      letter-spacing: 1.2px;
      margin-top: 84px;
      margin-left: 17px;
    }

    .category-grid {
      display: flex;
      width: 100%;
      max-width: 1255px;
      align-items: stretch;
      gap: 20px;
      color: #000000;
      font-weight: 400;
      text-align: center;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .top-grid {
      margin-top: 80px;
    }

    .bottom-grid {
      margin-top: 154px;
    }

    .category-card {
      display: flex;
      flex-direction: column;
      align-items: stretch;
    }

    .category-image {
      aspect-ratio: 0.92;
      object-fit: contain;
      object-position: center;
      width: 198px;
      border-radius: 3px;
    }

    .category-name {
      align-self: center;
      margin-top: 49px;
      font-size: 16px;
      font-weight: 400;
    }

    .main-footer {
      background-color: #670808;
      align-self: stretch;
      display: flex;
      margin-top: 143px;
      width: 100%;
      padding: 37px 50px;
      align-items: stretch;
      gap: 20px;
      letter-spacing: 0.8px;
      justify-content: space-between;
    }

    .footer-nav {
      display: flex;
      flex-direction: column;
      align-items: start;
      white-space: nowrap;
    }

    .footer-link {
      color: #E5E5E5;
      text-decoration: none;
      margin-top: 22px;
    }

    .footer-link:first-child {
      margin-top: 0;
    }

    .contact-info {
      display: flex;
      flex-direction: column;
      align-items: start;
    }

    .contact-link {
      color: #E5E5E5;
      text-decoration: none;
      margin-top: 22px;
      margin-right: 70px;
    }

    .contact-link:first-child {
      margin-top: 0;
    }


    .category-card:nth-child(5) .category-image {
      width: 195px;
      aspect-ratio: 0.9;
    }

    .bottom-grid .category-card:nth-child(1) .category-image {
      width: 187px;
    }

    .bottom-grid .category-card:nth-child(2) .category-image {
      width: 195px;
      aspect-ratio: 0.95;
      margin-top: 32px;
    }

    .bottom-grid .category-card:nth-child(2) .category-name {
      margin-top: 29px;
    }

    .bottom-grid .category-card:nth-child(3) .category-image {
      width: 186px;
      aspect-ratio: 0.8;
    }

    .bottom-grid .category-card:nth-child(3) .category-name {
      margin-top: 31px;
    }


    .bottom-grid .category-card:nth-child(5) {

      margin-top: 59px;
    }

    .bottom-grid .category-card:nth-child(5) .category-image {
      width: 145px;
      aspect-ratio: 1.04;
    }

    .bottom-grid .category-card:nth-child(5) .category-name {
      margin-top: 65px;
    }

    .cat_link {
      text-decoration: none;
      color: #000000;
    }
  </style>
</head>

<body>
  <div class="category">
    @include('components.header')


    <h1 class="category-title">КАТЕГОРИИ</h1>

    <section class="category-grid top-grid">
      @foreach($categories as $index => $category)
      @if($index < 5)
        <article class="category-card">
        <a href="{{ route('categories.show', $category->id) }}" class="cat_link">
          <img src="{{  asset('categories/' . $category->image) }}" alt="{{ $category['title'] }}" class="category-image" />
          <h2 class="category-name">{{ $category['title'] }}</h2>
        </a>
        </article>
        @endif
        @endforeach
    </section>

    <section class="category-grid bottom-grid">
      @foreach($categories as $index => $category)
      @if($index >= 5)
      <article class="category-card">
        <a href="#" class="cat_link">
          <img src="{{ $category->getImagePath() }}" alt="{{ $category->title }}" class="category-image" />
          <h2 class="category-name">{{ $category['title'] }}</h2>
        </a>
      </article>
      @endif
      @endforeach
    </section>

    <footer class="main-footer">
      <img src="https://i.ibb.co/VWwqGNN8/logo.png " alt="Logo" class="logo" />

      <nav class="footer-nav">
        <a href="{{ url('/') }}" class="footer-link">ГЛАВНАЯ</a>
        <a href="#" class="footer-link">КОНТАКТЫ</a>
        <a href="{{ route('login') }}" class="footer-link">РЕГИСТРАЦИЯ|ВХОД</a>
      </nav>

      <div class="contact-info">
        <a href="#" class="contact-link">НАШ TG</a>
        <a href="#" class="contact-link">НАШ VK</a>
        <a href="mailto:CARTEMOUS@GMAIL.COM" class="contact-link">CARTEMOUS@GMAIL.COM</a>
      </div>
    </footer>
  </div>
</body>

</html>