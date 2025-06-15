<!doctype html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>КАТЕГОРИИ</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet" />
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


    .top-grid {
      margin-top: 80px;
    }

    .bottom-grid {
      margin-top: 154px;
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


    .category-image {
      margin-top: 20px;
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 5px;
      margin-bottom: 10px;
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


 
    .cat_link {
      text-decoration: none;
      color: #000000;
    }
    .page-title {
      color: rgb(103, 8, 8);
      font-size: 48px;
      font-family:
        Montserrat,
        -apple-system,
        Roboto,
        Helvetica,
        sans-serif;
      font-weight: 800;
      letter-spacing: 1.2px;
      align-self: center;
      margin-top: 81px;
    }
    .category-title {
    color: #000;
    font-size: 16px;
    font-weight: normal;
}
.category-name {
      align-self: center;
      margin-top: 20px;
      font-size: 16px;
      font-weight: 400;
    }
    .product-price {
      font-size: 18px;
      color: #670808;
      font-weight: 900;
      margin-bottom: 10px;
    }

/* Мобильная адаптивность */
@media (max-width: 768px) {
  .category {
    font-size: 14px;
  }
  
  .main-header {
    flex-direction: column;
    padding: 15px 20px;
    gap: 15px;
  }
  
  .logo {
    width: 60px;
  }
  
  .main-nav {
    gap: 30px;
    flex-wrap: wrap;
    justify-content: center;
  }
  
  .nav-link, .auth-link {
    margin-right: 0;
    font-size: 14px;
  }
  
  .page-title {
    font-size: 18px;
    margin-top: 40px;
  }
  
  .category-grid {
    padding: 0 20px;
    margin-top: 40px;
    justify-content: center;
    gap: 15px;
    order: 1;
  }
  
  .category-card {
    width: 160px;
    height: 260px;
    margin: 8px;
  }
  
  .category-image {
    height: 120px;
    margin-top: 10px;
  }
  
  .category-name {
    font-size: 14px;
    margin-top: 15px;
  }
  
  .product-price {
    font-size: 16px;
  }
  
  .main-footer {
    flex-direction: column;
    align-items: center;
    margin-top: 80px;
    padding: 20px 15px;
    gap: 15px;
  }
  
  .footer-nav, .contact-info {
    align-items: center;
    margin-top: 15px;
  }
  
  .footer-link, .contact-link {
    margin-top: 15px;
    margin-right: 0;
    font-size: 14px;
  }
}

@media (max-width: 480px) {
  .main-header {
    padding: 12px 15px;
  }
  
  .logo {
    width: 50px;
  }
  
  .main-nav {
    gap: 20px;
  }
  
  .nav-link, .auth-link {
    font-size: 13px;
    padding: 5px;
  }
  
  .page-title {
    font-size: 16px;
    margin-top: 30px;
  }
  
  .category-grid {
    padding: 0 15px;
    margin-top: 30px;
    gap: 10px;
  }
  
  .category-card {
    width: 140px;
    height: 240px;
    margin: 5px;
  }
  
  .category-image {
    height: 100px;
  }
  
  .category-name {
    font-size: 13px;
    margin-top: 12px;
  }
  
  .product-price {
    font-size: 15px;
  }
  
  .main-footer {
    margin-top: 60px;
    padding: 15px 10px;
  }
  
  .footer-link, .contact-link {
    font-size: 13px;
    margin-top: 12px;
  }
}

@media (max-width: 360px) {
  .main-nav {
    gap: 15px;
    flex-direction: column;
    align-items: center;
  }
  
  .page-title {
    font-size: 15px;
  }
  
  .category-grid {
    grid-template-columns: 1fr 1fr;
    gap: 8px;
    padding: 0 10px;
  }
  
  .category-card {
    width: 100%;
    max-width: 130px;
    height: 220px;
  }
  
  .category-image {
    height: 90px;
  }
  
  .category-name {
    font-size: 12px;
    margin-top: 10px;
  }
  
  .product-price {
    font-size: 14px;
  }
}
  </style>
</head>

<body>
    @include('components.header')
  <div class="category">



    <h1 class="page-title">{{ $category->title }}</h1>

    <section class="category-grid top-grid">
      @foreach($goods as $good)
        <article class="category-card">
        <a href="{{ route('goods.show', $good->id) }}" class="cat_link">
          <img src="{{  asset('storage/' . $good->image) }}" alt="{{ $good['title'] }}" class="category-image" />
          <h3 class="category-name">{{ $good->name }}</h3>
          <p class="product-price">{{ number_format($good->price, 0, '', ' ') }} ₽</p>
        </a>
        </article>
        @endforeach
    </section>




  </div>
    @include('components.footer')
</body>

</html>
