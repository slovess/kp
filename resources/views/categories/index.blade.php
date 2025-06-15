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


    .category-image {
      aspect-ratio: 0.92;
      object-fit: contain;
      object-position: center;
      width: 198px;
      border-radius: 3px;
    }

    .category-name {
      align-self: center;
      margin-top: 30px;
      font-size: 16px;
      font-weight: 400;
    }



    .top-grid {
      margin-top: 80px;
    }

    .bottom-grid {
      margin-top: 154px;
    }

  
    .category-image {
      aspect-ratio: 0.92;
      object-fit: contain;
      object-position: center;
      width: 198px;
      border-radius: 3px;
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

.category-title {
      font-size: 18px;
      color: #333;
      margin-bottom: 10px;
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
    .category-image {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 5px;
      margin-bottom: 10px;
    }

   
    .cat_link {
      text-decoration: none;
      color: #000000;
    }
    .category-grid {
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
    .category-image {
    margin-top: 20px;
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-radius: 5px;
    margin-bottom: 10px;
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
      height: 300px;
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




    .category-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
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
      letter-spacing: 2px;
      align-self: center;
      margin-top: 81px;
    }
    .category-title {

    color: #000;
    font-size: 16px;

    font-weight: normal;
}

  </style>
</head>

<body>
  <div class="category">
    @include('components.header')


    <h1 class="page-title">КАТЕГОРИИ</h1>

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
        <a href="{{ route('categories.show', $category->id) }}" class="cat_link">
          <img src="{{ $category->getImagePath() }}" alt="{{ $category->title }}" class="category-image" />
          <h2 class="category-title">{{ $category['title'] }}</h2>
        </a>
      </article>
      @endif
      @endforeach
    </section>

  @include('components.footer')
  </div>
</body>

</html>