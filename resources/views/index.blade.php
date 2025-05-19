<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet" />
  <title>CARTEMOUS</title>
  <style>
    *{
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

    .page {
      background-color: #fff;
      display: flex;
      flex-direction: column;
      overflow: hidden;
      align-items: stretch;
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

    .page-title {
      color: rgb(103, 8, 8);
      font-size: 24px;
      font-family:
        Montserrat,
        -apple-system,
        Roboto,
        Helvetica,
        sans-serif;
      font-weight: 600;
      letter-spacing: 1.2px;
      align-self: center;
      margin-top: 81px;
    }

    .content {
      display: flex;
      margin-top: 82px;
      width: 100%;
     
      flex-direction: column;
      align-items: center;
    }

    .banner-container {
      width: 100%;
      max-width: 1255px;
    }

    .banner-grid {
      gap: 20px;
      display: flex;
    }

    .banner-column {
      display: flex;
      flex-direction: column;
      align-items: stretch;
      line-height: normal;
      width: 50%;
    }

    .banner-column:last-child {
      margin-left: 20px;
    }

    .banner-image {
      aspect-ratio: 2.46;
      object-fit: contain;
      object-position: center;
      width: 100%;
      border-radius: 3px;
      flex-grow: 1;
    }

    .banner-image-2 {
      aspect-ratio: 2.47;
      object-fit: contain;
      object-position: center;
      width: 100%;
      border-radius: 3px;
      flex-grow: 1;
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

    .categories-grid {
        padding: 0 80px; 
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

    .category-card {
      display: inline-block;
      width: 200px;
      margin: 15px;
      text-align: center;
      border: 1px solid #ddd;
      border-radius: 8px;
      transition: transform 0.3s ease;
      position: relative;
      /* Добавляем для позиционирования */
      height: 280px;
      /* Фиксированная высота блока */
    }

    .category-image-container {
      width: 100%;
      height: 180px;
      /* Фиксированная высота контейнера для изображения */
      overflow: hidden;
      /* Обрезаем всё, что выходит за границы */
      position: relative;
      margin-bottom: 15px;
    }

    .category-image {
      margin-top: 20;
      width: 100%;
      height: 100%;
      object-fit: cover;
      /* Сохраняем пропорции, заполняя контейнер */
      object-position: center;
      /* Центрируем изображение */
      display: block;
    }



    .category-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .category-title {
      font-size: 18px;
      color: #333;
      padding: 20px;
      font-weight: 400;
      letter-spacing: 0.2px;
      line-height: 1.4;
      margin: 0;
      height: 100px;
      /* Фиксированная высота для текста */
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* Адаптация для мобильных */
    @media (max-width: 768px) {
      .category-card {
        width: 220px;
        height: 300px;
      }

      .category-image-container {
        height: 200px;
      }

      .category-title {
        height: 80px;
        padding: 15px;
      }
    }

     .products-grid {
        padding: 0 80px; 
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
      /* Фиксированная высота контейнера для изображения */
      overflow: hidden;
      /* Обрезаем всё, что выходит за границы */
      position: relative;
      margin-bottom: 15px;
    }

    .product-image {
      margin-top: 20;
      width: 100%;
      height: 100%;
      object-fit: cover;
      /* Сохраняем пропорции, заполняя контейнер */
      object-position: center;
      /* Центрируем изображение */
      display: block;
    }



    .product-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .main-footer {
      background-color: rgb(103, 8, 8);
      display: flex;
      margin-top: 199px;
      width: 100%;
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
      color: rgb(229, 229, 229);
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
    }

    .footer-link {
      color: inherit;
      text-decoration: none;
      margin-top: 22px;
    }

    .footer-link:first-child {
      margin-top: 0;
    }

    .footer-contact {
      display: flex;
      flex-direction: column;
      align-items: start;
      margin-right: 80px;
    }

    .contact-link {
      color: inherit;
      text-decoration: none;
      margin-top: 22px;
    }

    .contact-link:first-child {
      margin-top: 0;
    }

    .in_link {
      text-decoration: none;
      color: #000;
      display: flex;
      gap: 5px;
    }

    .in_link1 {
      text-decoration: none;
      color: #000;

    }



 
    .category-image {
      margin-top: 20px;
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 5px;
      margin-bottom: 10px;
    }



   
    .product-info {
      margin-top: 30px;
      padding: 15px;
      text-align: center;
    }

    .product-title {
      font-size: 16px;
      color: #333;
      margin-bottom: 10px;
      font-weight: 400;
    }

    .product-price {
      font-size: 18px;
      color: #670808;
      font-weight: 700;
    }

    .product-link {
      text-decoration: none;
    }

    .site-footer {
      background-color: rgba(103, 8, 8, 1);
      display: flex;
      width: 100%;
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

    @media (max-width: 768px) {
      .products-grid {
        grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
        gap: 20px;
      }

      .product-image-container {
        height: 160px;
      }
    }

    /* Добавь в стиль */
    @media (max-width: 768px) {
      .banner-grid {
        flex-direction: column;
      }

      .banner-column {
        width: 100%;
        margin: 10px 0;
      }

      .section-header {
        align-self: center;
        font-size: 20px;
      }

      .category-title,
      .product-title {
        font-size: 16px;
      }

      .product-price {
        font-size: 16px;
      }
    }
  </style>
</head>

<body>
  <main class="page">
    @include('components.header')

    <h1 class="page-title">ГЛАВНАЯ</h1>

    <section class="content">
      <div class="banner-container">
        <div class="banner-grid">
          <div class="banner-column">
            <img
              src="{{ asset('img/banner1.png') }}"
              class="banner-image"
              alt="Banner image 1" />
          </div>
          <div class="banner-column">
            <img
              src="{{ asset('img/banner2.png') }}"
              class="banner-image-2"
              alt="Banner image 2" />
          </div>
        </div>
      </div>

      </div>
      <div class="section-header">
        <a href="{{route('categories.index')}}" class="in_link">
          <h2 class="section-title">Популярные категории</h2>
          <img src="http://127.0.0.1:8001/Polygon3.png" class="section-icon" alt="Categories icon" />
        </a>
      </div>

      <div class="categories-grid">
        @foreach($popularCategory as $category)
        <a href="{{ route('categories.show', $category->id) }}" class="category-link">
          <div class="category-card">
            <img src="{{ asset('categories/' . $category->image) }}"
              alt="{{ $category->title }}"
              class="category-image"
              onerror="this.onerror=null;this.src='{{ asset('categories/default.png') }}'">
            <h3 class="category-title">{{ $category->title }}</h3>
          </div>
        </a>
        @endforeach
      </div>

      <div class="section-header">
        <a href="{{route('catalog.index')}}" class="in_link">
          <h2 class="section-title">Популярные позиции</h2>
          <img src="http://127.0.0.1:8001/Polygon3.png" class="section-icon" alt="Popular items icon" />
        </a>
      </div>

      <section class="products-grid">
        @foreach($popularGoods as $good)
        <div class="product-card">
          <a href="{{ route('goods.show', $good->id) }}" class="product-link">
            <div class="product-image-container">
              <img src="{{ asset('goods/' . $good->image) }}"
                alt="{{ $good->name }}"
                class="product-image"
                onerror="this.src='{{ asset('goods/yojibomber.png')}}'">
            </div>
            <div class="product-info">
              <h3 class="product-title">{{ $good->name }}</h3>
              <p class="product-price">{{ number_format($good->price, 0, '', ' ') }} ₽</p>
            </div>
          </a>
        </div>
        @endforeach
      </section>


      @include('components.footer')
  </main>
</body>

</html>