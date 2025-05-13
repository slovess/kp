<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>КАТАЛОГ</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      background-color: #FFFFFF;
    align-items: center;
    font-size: 16px;
    color: #E5E5E5;
    font-weight: 600;
    font-family:
    Montserrat,
    -apple-system,
    Roboto,
    Helvetica,
    sans-serif;
    overflow: none;
    }

    .header {
      background-color: #670808;
      display: flex;
      width: 100%;
      padding: 31px 38px;
      align-items: center;
      justify-content: space-between;
      color: #e5e5e5;
      font-size: 16px;
      font-weight: 600;
      letter-spacing: 0.8px;
    }

    .logo {
      object-fit: contain;
      width: 75px;
    }

    .main-nav {
      display: flex;
      gap: 100px;
    }

    .nav-link {
      color: #e5e5e5;
      text-decoration: none;
    }

    .auth-link {
     margin-right: 100px;
      color: #e5e5e5;
      text-decoration: none;
    }

    
    .catalog-main {
      display: flex;
      flex-direction: column;
      align-items: stretch;
      color: #000;
    }

    .catalog-title {
      color: #670808;
      font-size: 24px;
      font-weight: 600;
      letter-spacing: 1.2px;
      text-align: center;
      margin-top: 73px;
    }

    .content-wrapper {
      display: flex;
      margin: 27px 38px;
      gap: 20px;
    }

    .filters {
      width: 25%;
      min-width: 250px;
    }

    .filter-container {
      border: 1px solid #868484;
      padding: 1px;
    }

    .filter-title {
      font-size: 24px;
      font-weight: 600;
      text-align: center;
      margin: 23px 0 18px;
    }

    .filter-content {
      padding: 5px 40px;
    }

    .filter-divider {
      border: 4px solid #000;
      margin: 0 18px;
      height: 9px;
    }

    .filter-section {
      margin-top: 31px;
    }

    .filter-heading {
      font-size: 16px;
      font-weight: 300;
      margin: 0 0 17px 22px;
    }

    .filter-option {
      display: flex;
      align-items: center;
      gap: 16px;
      margin: 18px;
      font-size: 14px;
      font-weight: 300;
      cursor: pointer;
    }

    .filter-checkbox {
      width: 29px;
      height: 29px;
      border: 1px solid #868484;
      border-radius: 5px;
      appearance: none;
      cursor: pointer;
    }

    .filter-checkbox:checked {
      background-color: #670808;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='white'%3E%3Cpath d='M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: center;
      background-size: 60%;
    }

    .price-range-slider {
      display: flex;
      flex-direction: column;
      gap: 20px;
      margin: 15px 0;
    }

    .price-slider {
      width: 100%;
      height: 5px;
      background: #d3d3d3;
      outline: none;
      border-radius: 5px;
    }

    .price-slider::-webkit-slider-thumb {
      -webkit-appearance: none;
      appearance: none;
      width: 20px;
      height: 20px;
      background: #670808;
      cursor: pointer;
      border-radius: 50%;
    }

    .price-range-values {
      display: flex;
      justify-content: space-between;
      font-size: 12px;
      font-weight: 600;
    }

    .filter-buttons {
      display: flex;
      flex-direction: column;
      gap: 10px;
      margin: 20px 0;
    }

    .apply-button, .reset-button {
      padding: 10px;
      cursor: pointer;
      font-size: 14px;
      font-weight: 600;
      border-radius: 5px;
    }

    .apply-button {
      background-color: #670808;
      color: white;
      border: none;
    }

    .reset-button {
      background-color: #f0f0f0;
      border: 1px solid #ccc;
    }

    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      width: 100%;
    }

    .product-card {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      border: 1px solid #e5e5e5;
      padding: 15px;
      border-radius: 5px;
      transition: transform 0.3s ease;
    }

    .product-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .product-image {
      width: 100%;
      height: 300px;
      object-fit: cover;
      border-radius: 3px;
    }

    .product-title {
      color: #000;
      font-size: 14px;
      font-weight: 400;
      margin: 15px 0 10px;
    }

    .product-price {
      color: #000;
      font-size: 18px;
      font-weight: 700;
      letter-spacing: 0.9px;
      margin: 0;
    }

    .pagination {
      font-size: 18px;
      font-weight: 700;
      letter-spacing: 0.9px;
      text-align: center;
      margin: 89px 0 26px;
    }

    .current-page {
      color: #670808;
    }

    .page-dots {
      color: #9a9696;
    }

    .footer {
      background-color: #670808;
      display: flex;
      padding: 36px 50px;
      justify-content: space-between;
      align-items: flex-start;
      color: #e5e5e5;
      font-size: 16px;
      font-weight: 600;
      letter-spacing: 0.8px;
    }

    .footer-nav {
      display: flex;
      flex-direction: column;
      gap: 22px;
    }

    .social-links {
      display: flex;
      flex-direction: column;
      gap: 22px;
    }

    .social-link {
      color: #e5e5e5;
      text-decoration: none;
    }

    .no-results {
      grid-column: 1 / -1;
      text-align: center;
      padding: 50px;
      font-size: 18px;
      color: #670808;
    }

  </style>
</head>
<body>
  <header class="header">
    <img src="https://ibb.co/svWV4PPr" alt="Logo" class="logo" />
    <nav class="main-nav">
      <a href="{{url('/')}}" class="nav-link">ГЛАВНАЯ</a>
      <a href="#" class="nav-link">КОНТАКТЫ</a>
    </nav>
    <a href="{{url('register')}}" class="auth-link">РЕГИСТРАЦИЯ|ВХОД</a>
  </header>

  <main class="catalog-main">
    <h1 class="catalog-title">КАТАЛОГ</h1>
  
    <div class="content-wrapper">
      <aside class="filters">
        <div class="filter-container">
          <h2 class="filter-title">ФИЛЬТРЫ</h2>
          <div class="filter-content">
            <div class="filter-divider"></div>
  
            <section class="filter-section">
              <h3 class="filter-heading">Производитель</h3>
              <label class="filter-option">
                <input type="checkbox" class="filter-checkbox" data-filter="brand" value="Balenciaga" />
                <span>Balenciaga</span>
              </label>
              <label class="filter-option">
                <input type="checkbox" class="filter-checkbox" data-filter="brand" value="Chrome hearts" />
                <span>Chrome hearts</span>
              </label>
              <label class="filter-option">
                <input type="checkbox" class="filter-checkbox" data-filter="brand" value="Alexander McQueen" />
                <span>Alexander McQueen</span>
              </label>
            </section>
  
            <section class="filter-section">
              <h3 class="filter-heading">Цвет</h3>
              <label class="filter-option">
                <input type="checkbox" class="filter-checkbox" data-filter="color" value="Красный" />
                <span>Красный</span>
              </label>
              <label class="filter-option">
                <input type="checkbox" class="filter-checkbox" data-filter="color" value="Белый" />
                <span>Белый</span>
              </label>
              <label class="filter-option">
                <input type="checkbox" class="filter-checkbox" data-filter="color" value="Чёрный" />
                <span>Чёрный</span>
              </label>
            </section>
  
            <section class="filter-section">
              <div class="price-filter">
                <h3 class="filter-heading">Цена</h3>
                <div class="price-range-slider">
                  <input type="range" id="min-price" class="price-slider" min="0" max="200000" value="0" step="1000">
                  <input type="range" id="max-price" class="price-slider" min="0" max="200000" value="200000" step="1000">
                </div>
                <div class="price-range-values">
                  <span id="min-price-value">0 р.</span>
                  <span id="max-price-value">200 000 р.</span>
                </div>
              </div>
            </section>
            
            <div class="filter-buttons">
              <button id="apply-filters" class="apply-button">Применить фильтры</button>
              <button id="reset-filters" class="reset-button">Сбросить фильтры</button>
            </div>
          </div>
        </div>
      </aside>
  
      <section class="product-grid" id="product-grid">

      </section>
    </div>
  
    <div class="pagination">
      <span class="current-page">1</span>
      <span class="page-dots">... 10</span>
    </div>
  </main>
  
  <footer class="footer">
    <img src="https://ibb.co/svWV4PPr" alt="Logo" class="logo" />
    <nav class="footer-nav">
      <a href="#" class="nav-link">ГЛАВНАЯ</a>
      <a href="#" class="nav-link">КОНТАКТЫ</a>
      <a href="#" class="nav-link">РЕГИСТРАЦИЯ|ВХОД</a>
    </nav>
    <div class="social-links">
      <a href="#" class="social-link">НАШ TG</a>
      <a href="#" class="social-link">НАШ VK</a>
      <a href="mailto:CARTEMOUS@GMAIL.COM" class="social-link">CARTEMOUS@GMAIL.COM</a>
    </div>
  </footer>

  <script>
 
    const products = [
      { 
        id: 1, 
        name: "Толстовка enfants riches derrpimes", 
        brand: "enfants riches derrpimes", 
        color: "Чёрный", 
        price: 45000,
        image: "https://cdn.builder.io/api/v1/image/assets/TEMP/fd1ab1f82c630bbd4b44b6343eda3231bd9ad26f?placeholderIfAbsent=true&apiKey=aa24ac2c4fd2421ebb42fa015f34fea4"
      },
      { 
      
        id: 2, 
        name: "Футболка julius", 
        brand: "julius", 
        color: "Черный", 
        price: 15000,
        image: "https://cdn.builder.io/api/v1/image/assets/TEMP/54780e622336686f7c485713f914482e68aa07b8?placeholderIfAbsent=true&apiKey=aa24ac2c4fd2421ebb42fa015f34fea4"
      },
      { 
        id: 3, 
        name: "Свитер raf simons emelcodery", 
        brand: "raf simons", 
        color: "Серый", 
        price: 38000,
        image: "https://cdn.builder.io/api/v1/image/assets/TEMP/f5428418a6eb16f1f28ceab9604bd1c7602cf8d0?placeholderIfAbsent=true&apiKey=aa24ac2c4fd2421ebb42fa015f34fea4"
      },
      { 
        id: 4, 
        name: "Рубашка vetements hi-speed", 
        brand: "vetements", 
        color: "Черный", 
        price: 35000,
        image: "https://cdn.builder.io/api/v1/image/assets/TEMP/5a28bfa67bb459d1ab7e6620ef53e6199fbdb1c6?placeholderIfAbsent=true&apiKey=aa24ac2c4fd2421ebb42fa015f34fea4"
      },
      { 
        id: 5, 
        name: "Джинсы Chrome hearts", 
        brand: "Chrome hearts", 
        color: "Мульти", 
        price: 150000,
        image: "https://cdn.builder.io/api/v1/image/assets/TEMP/5a28bfa67bb459d1ab7e6620ef53e6199fbdb1c6?placeholderIfAbsent=true&apiKey=aa24ac2c4fd2421ebb42fa015f34fea4"
      },
   
    ];


    document.addEventListener('DOMContentLoaded', function() {
    
      renderProducts(products);
      
    
      const minPriceSlider = document.getElementById('min-price');
      const maxPriceSlider = document.getElementById('max-price');
      const minPriceValue = document.getElementById('min-price-value');
      const maxPriceValue = document.getElementById('max-price-value');
      
      minPriceSlider.addEventListener('input', function() {
        minPriceValue.textContent = formatPrice(this.value) + ' р.';
        if (parseInt(this.value) > parseInt(maxPriceSlider.value)) {
          maxPriceSlider.value = this.value;
          maxPriceValue.textContent = formatPrice(this.value) + ' р.';
        }
      });
      
      maxPriceSlider.addEventListener('input', function() {
        maxPriceValue.textContent = formatPrice(this.value) + ' р.';
        if (parseInt(this.value) < parseInt(minPriceSlider.value)) {
          minPriceSlider.value = this.value;
          minPriceValue.textContent = formatPrice(this.value) + ' р.';
        }
      });
      
  
      document.getElementById('apply-filters').addEventListener('click', applyFilters);
      
   
      document.getElementById('reset-filters').addEventListener('click', resetFilters);
    });
    
 
    function applyFilters() {
      
      const selectedBrands = Array.from(document.querySelectorAll('input[data-filter="brand"]:checked'))
        .map(checkbox => checkbox.value);
      
     
      const selectedColors = Array.from(document.querySelectorAll('input[data-filter="color"]:checked'))
        .map(checkbox => checkbox.value);
      
    
      const minPrice = parseInt(document.getElementById('min-price').value);
      const maxPrice = parseInt(document.getElementById('max-price').value);
      
    
      const filteredProducts = products.filter(product => {
     
        const brandMatch = selectedBrands.length === 0 || selectedBrands.includes(product.brand);
        

        const colorMatch = selectedColors.length === 0 || selectedColors.includes(product.color);
        
 
        const priceMatch = product.price >= minPrice && product.price <= maxPrice;
        
        return brandMatch && colorMatch && priceMatch;
      });
      

      renderProducts(filteredProducts);
    }
    

    function resetFilters() {
      
      document.querySelectorAll('.filter-checkbox').forEach(checkbox => {
        checkbox.checked = false;
      });
      
      
      const minPriceSlider = document.getElementById('min-price');
      const maxPriceSlider = document.getElementById('max-price');
      minPriceSlider.value = 0;
      maxPriceSlider.value = 200000;
      document.getElementById('min-price-value').textContent = '0 р.';
      document.getElementById('max-price-value').textContent = '200 000 р.';
      
      
      renderProducts(products);
    }
    

    function renderProducts(productsToRender) {
      const productsGrid = document.getElementById('product-grid');
      productsGrid.innerHTML = '';
      
      if (productsToRender.length === 0) {
        productsGrid.innerHTML = '<div class="no-results">Товары не найдены. Попробуйте изменить параметры фильтрации.</div>';
        return;
      }
      
      productsToRender.forEach(product => {
        const productCard = document.createElement('article');
        productCard.className = 'product-card';
        productCard.innerHTML = `
          <img src="${product.image}" alt="${product.name}" class="product-image" />
          <div class="product-info">
            <h3 class="product-title">${product.name}</h3>
            <p class="product-price">${formatPrice(product.price)} руб.</p>
          </div>
        `;
        productsGrid.appendChild(productCard);
      });
    }
    
    function formatPrice(price) {
      return parseInt(price).toLocaleString('ru-RU');
    }
  </script>
</body>
</html>