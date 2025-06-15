<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>КАТАЛОГ</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <style> 
          * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style-type: none;
}

body {
  padding: 0;
  background-color: #FFFFFF;
  align-items: center;
  font-size: 16px;
  color: #E5E5E5;
  font-weight: 600;
  font-family: Montserrat, -apple-system, Roboto, Helvetica, sans-serif;
  overflow-x: hidden;
}

.catalog-main {
  display: flex;
  flex-direction: column;
  align-items: stretch;
  color: #000;
}

.catalog-title {
  color: #670808;
  font-size: 48px;
  font-weight: 800;
  letter-spacing: 2px;
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
  margin-bottom: 20px;
  border-bottom: 1px solid #ddd;
  padding-bottom: 15px;
}

.filter-heading {
  font-size: 16px;
  font-weight: 300;
  margin: 0 0 17px 22px;
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.arrow {
  font-size: 14px;
  transition: transform 0.3s;
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

.filter-actions {
  margin-top: 10px;
  display: flex;
  gap: 10px;
}

.filter-actions button {
  color: black;
  border: none;
  padding: 6px 12px;
  border-radius: 4px;
  cursor: pointer;
  font-size: 14px;
  transition: background-color 0.3s ease;
}

.product-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
  width: 100%;
  height: 100%;
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
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
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
  color: #670808;
  font-size: 18px;
  font-weight: 700;
  letter-spacing: 0.9px;
  margin: 0;
}

.pagination {
  display: flex;
  justify-content: center;
  margin-top: 30px;
}

.pagination nav {
  display: flex;
  gap: 8px;
}

.pagination .page-link {
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  text-decoration: none;
  color: #670808;
}

.pagination .page-item.active .page-link {
  background-color: #670808;
  color: white;
}

.pagination .page-item.disabled .page-link {
  color: #ccc;
  pointer-events: none;
}

.no-results {
  grid-column: 1 / -1;
  text-align: center;
  padding: 50px;
  font-size: 18px;
  color: #670808;
}

.link {
  text-decoration: none;
}

.hidden-brand, .hidden-color {
  display: none;
}

.filter-options.collapsed {
  display: none;
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
    .filter-options.collapsed {
    display: none;
}
.filter-section {
    margin-bottom: 20px;
    border-bottom: 1px solid #ddd;
    padding-bottom: 15px;
}

.filter-actions {
    margin-top: 10px;
    display: flex;
    gap: 10px;
}

.filter-actions button {
    color: black;
    border: none;
    padding: 6px 12px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
    transition: background-color 0.3s ease;
}

.toggle-heading {
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.arrow {
    font-size: 14px;
    transition: transform 0.3s;
}

  .filter-option {
        display: block;
        margin-bottom: 6px;
    }

    .hidden-brand, .hidden-color {
        display: none;
    }

    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 30px;
    }

    .pagination nav {
        display: flex;
        gap: 8px;
    }

    .pagination .page-link {
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        text-decoration: none;
        color: #670808;
    }

    .pagination .page-item.active .page-link {
        background-color: #670808;
        color: white;
       
    }

    .pagination .page-item.disabled .page-link {
        color: #ccc;
        pointer-events: none;
    }

   

    .no-results {
        margin-top: 20px;
        font-size: 18px;
        color: #777;
        text-align: center;
    }
.link{
    text-decoration: none;
}
    /* Мобильная адаптивность */
@media (max-width: 1024px) {
  .catalog-title {
    font-size: 20px;
    margin-top: 50px;
  }
  
  .content-wrapper {
    margin: 20px 30px;
    gap: 15px;
  }
  
  .filters {
    width: 30%;
    min-width: 220px;
  }
  
  .filter-content {
    padding: 5px 20px;
  }
  
  .product-grid {
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 15px;
  }
  
  .product-image {
    height: 250px;
  }
}

/* Мобильные устройства */
@media (max-width: 768px) {
  .catalog-title {
    font-size: 18px;
    margin-top: 30px;
  }
  
  .content-wrapper {
    flex-direction: column;
    margin: 15px 20px;
    gap: 20px;
  }
  
  .filters {
    width: 100%;
    min-width: auto;
    order: 1;
  }
  
  .filter-container {
    margin-bottom: 20px;
  }
  
  .filter-title {
    font-size: 20px;
    margin: 15px 0 12px;
  }
  
  .filter-content {
    padding: 5px 15px;
  }
  
  .filter-heading {
    font-size: 14px;
    margin: 0 0 12px 10px;
  }
  
  .filter-option {
    margin: 12px 10px;
    font-size: 13px;
  }
  
  .filter-checkbox {
    width: 24px;
    height: 24px;
  }
  
  .filter-buttons {
    flex-direction: row;
    gap: 10px;
  }
  
  .apply-button, .reset-button {
    flex: 1;
    padding: 12px;
    font-size: 13px;
  }
  
  .product-grid {
    grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
    gap: 15px;
    order: 2;
  }
  
  .product-card {
    padding: 10px;
  }
  
  .product-image {
    height: 180px;
  }
  
  .product-title {
    font-size: 13px;
    margin: 10px 0 8px;
  }
  
  .product-price {
    font-size: 16px;
  }
  
  .pagination {
    margin-top: 20px;
  }
  
  .pagination .page-link {
    padding: 8px 12px;
    font-size: 14px;
  }
}

/* Маленькие мобильные */
@media (max-width: 480px) {
  .catalog-title {
    font-size: 16px;
    margin-top: 20px;
  }
  
  .content-wrapper {
    margin: 10px 15px;
  }
  
  .filter-title {
    font-size: 18px;
  }
  
  .filter-content {
    padding: 5px 10px;
  }
  
  .filter-option {
    margin: 10px 5px;
    font-size: 12px;
  }
  
  .filter-checkbox {
    width: 20px;
    height: 20px;
  }
  
  .filter-actions button {
    font-size: 12px;
    padding: 4px 8px;
  }
  
  .product-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
  }
  
  .product-card {
    padding: 8px;
  }
  
  .product-image {
    height: 140px;
  }
  
  .product-title {
    font-size: 12px;
    margin: 8px 0 6px;
  }
  
  .product-price {
    font-size: 14px;
  }
  
  .pagination .page-link {
    padding: 6px 8px;
    font-size: 12px;
  }
}

/* Очень маленькие экраны */
@media (max-width: 360px) {
  .content-wrapper {
    margin: 8px 10px;
  }
  
  .filter-content {
    padding: 3px 8px;
  }
  
  .filter-actions {
    flex-direction: column;
    gap: 5px;
  }
  
  .filter-actions button {
    font-size: 11px;
    padding: 6px;
  }
  
  .product-grid {
    gap: 8px;
  }
  
  .product-card {
    padding: 6px;
  }
  
  .product-image {
    height: 120px;
  }
  
  .product-title {
    font-size: 11px;
    margin: 6px 0 4px;
  }
  
  .product-price {
    font-size: 13px;
  }
  
  .pagination .page-link {
    padding: 4px 6px;
    font-size: 11px;
  }
}
    </style>
</head>

<body>
    @include('components.header')
<main class="catalog-main">
    <h1 class="catalog-title">КАТАЛОГ</h1>

    <div class="content-wrapper">
        <aside class="filters">
            <div class="filter-container">
                <h2 class="filter-title">ФИЛЬТРЫ</h2>
                <div class="filter-content">

                    <div class="filter-divider"></div>

                    {{-- Производитель --}}
                    <section class="filter-section">
                        <h3 class="filter-heading toggle-heading">Производитель </h3>
                        <div class="filter-content-wrapper">
                            <div class="filter-options brand-options">
                                @foreach($brands as $index => $brand)
                                    <label class="filter-option {{ $index >= 5 ? 'hidden-brand' : '' }}" style="{{ $index >= 5 ? 'display: none;' : '' }}">
                                        <input type="checkbox" class="filter-checkbox" data-filter="brand" value="{{ $brand->title }}" />
                                        <span>{{ $brand->title }}</span>
                                    </label>
                                @endforeach
                            </div>
                            <div class="filter-actions">
                                <button type="button" class="show-all-button" data-target="brand">Показать все бренды</button>
                                <button type="button" class="hide-all-button" data-target="brand">Скрыть бренды</button>
                            </div>
                        </div>
                    </section>

                    {{-- Цвет --}}
                    <section class="filter-section">
                        <h3 class="filter-heading toggle-heading">Цвет </h3>
                        <div class="filter-content-wrapper">
                            <div class="filter-options color-options">
                                @foreach($colors as $index => $color)
                                    <label class="filter-option {{ $index >= 5 ? 'hidden-color' : '' }}" style="{{ $index >= 5 ? 'display: none;' : '' }}">
                                        <input type="checkbox" class="filter-checkbox" data-filter="color" value="{{ $color->title }}" />
                                        <span>{{ $color->title }}</span>
                                    </label>
                                @endforeach
                            </div>
                            <div class="filter-actions">
                                <button type="button" class="show-all-button" data-target="color">Показать все цвета</button>
                                <button type="button" class="hide-all-button" data-target="color">Скрыть цвета</button>
                            </div>
                        </div>
                    </section>

                    {{-- Цена --}}
                    <section class="filter-section">
                        <h3 class="filter-heading toggle-heading">Цена <span class="arrow">▼</span></h3>
                        <div class="filter-options">
                            <div class="price-filter">
                                <div class="price-range-slider">
                                    <input type="range" id="min-price" class="price-slider" min="{{ $minPrice }}" max="{{ $maxPrice }}" value="{{ $minPrice }}" step="1000">
                                    <input type="range" id="max-price" class="price-slider" min="{{ $minPrice }}" max="{{ $maxPrice }}" value="{{ $maxPrice }}" step="1000">
                                </div>
                                <div class="price-range-values">
                                    <span id="min-price-value">{{ number_format($minPrice, 0, '.', ' ') }} р.</span>
                                    <span id="max-price-value">{{ number_format($maxPrice, 0, '.', ' ') }} р.</span>
                                </div>
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
            @foreach($products as $product)
                <article class="product-card" data-id="{{ $product->id }}" data-brand="{{ $product->brand->title }}" data-color="{{ $product->color->title }}" data-price="{{ $product->price }}">
                    <a href="{{ route('goods.show', $product->id) }}" class="link">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="product-image" />
                        <div class="product-info">
                            <h3 class="product-title">{{ $product->name }}</h3>
                            <p class="product-price">{{ number_format($product->price, 0, '.', ' ') }} руб.</p>
                        </div>
                    </a>
                </article>
            @endforeach
        </section>
    </div>

    <div class="pagination">
        {{ $products->links('pagination::bootstrap-4') }}
    </div>
</main>

@include('components.footer')

<script>
document.addEventListener('DOMContentLoaded', function () {
    const minPriceSlider = document.getElementById('min-price');
    const maxPriceSlider = document.getElementById('max-price');
    const minPriceValue = document.getElementById('min-price-value');
    const maxPriceValue = document.getElementById('max-price-value');

    minPriceSlider.addEventListener('input', function () {
        minPriceValue.textContent = formatPrice(this.value) + ' р.';
        if (parseInt(this.value) > parseInt(maxPriceSlider.value)) {
            maxPriceSlider.value = this.value;
            maxPriceValue.textContent = formatPrice(this.value) + ' р.';
        }
    });

    maxPriceSlider.addEventListener('input', function () {
        maxPriceValue.textContent = formatPrice(this.value) + ' р.';
        if (parseInt(this.value) < parseInt(minPriceSlider.value)) {
            minPriceSlider.value = this.value;
            minPriceValue.textContent = formatPrice(this.value) + ' р.';
        }
    });

    document.getElementById('apply-filters').addEventListener('click', applyFilters);
    document.getElementById('reset-filters').addEventListener('click', resetFilters);

    // Тоггл раскрытия фильтров (скрывает/показывает и фильтры и кнопки)
    document.querySelectorAll('.toggle-heading').forEach((heading) => {
        heading.addEventListener('click', () => {
            const contentWrapper = heading.nextElementSibling; // теперь .filter-content-wrapper
            contentWrapper.classList.toggle('collapsed');
            heading.querySelector('.arrow').textContent = contentWrapper.classList.contains('collapsed') ? '►' : '▼';
        });
    });

    // Показать все / Скрыть все (бренды, цвета)
    document.querySelectorAll('.show-all-button').forEach(button => {
        button.addEventListener('click', () => {
            const target = button.dataset.target;
            document.querySelectorAll('.hidden-' + target).forEach(el => el.style.display = 'block');
        });
    });

    document.querySelectorAll('.hide-all-button').forEach(button => {
        button.addEventListener('click', () => {
            const target = button.dataset.target;
            document.querySelectorAll('.hidden-' + target).forEach(el => el.style.display = 'none');
        });
    });
});

function applyFilters() {
    const selectedBrands = Array.from(document.querySelectorAll('input[data-filter="brand"]:checked')).map(cb => cb.value);
    const selectedColors = Array.from(document.querySelectorAll('input[data-filter="color"]:checked')).map(cb => cb.value);
    const minPrice = parseInt(document.getElementById('min-price').value);
    const maxPrice = parseInt(document.getElementById('max-price').value);
    const productCards = document.querySelectorAll('.product-card');

    productCards.forEach(card => {
        const brand = card.dataset.brand;
        const color = card.dataset.color;
        const price = parseInt(card.dataset.price);
        const brandMatch = selectedBrands.length === 0 || selectedBrands.includes(brand);
        const colorMatch = selectedColors.length === 0 || selectedColors.includes(color);
        const priceMatch = price >= minPrice && price <= maxPrice;
        card.style.display = (brandMatch && colorMatch && priceMatch) ? '' : 'none';
    });

    const productsGrid = document.getElementById('product-grid');
    const existingNoResults = productsGrid.querySelector('.no-results');
    if (existingNoResults) {
        productsGrid.removeChild(existingNoResults);
    }

    const visibleProducts = document.querySelectorAll('.product-card:not([style*="display: none"])');
    if (visibleProducts.length === 0) {
        const noResults = document.createElement('div');
        noResults.className = 'no-results';
        noResults.textContent = 'Товары не найдены. Попробуйте изменить параметры фильтрации.';
        productsGrid.appendChild(noResults);
    }
}

function resetFilters() {
    document.querySelectorAll('.filter-checkbox').forEach(cb => cb.checked = false);
    const minPriceSlider = document.getElementById('min-price');
    const maxPriceSlider = document.getElementById('max-price');
    minPriceSlider.value = minPriceSlider.min;
    maxPriceSlider.value = maxPriceSlider.max;
    document.getElementById('min-price-value').textContent = formatPrice(minPriceSlider.min) + ' р.';
    document.getElementById('max-price-value').textContent = formatPrice(maxPriceSlider.max) + ' р.';
    document.querySelectorAll('.product-card').forEach(card => card.style.display = 'block');

    const existingNoResults = document.querySelector('.no-results');
    if (existingNoResults) {
        existingNoResults.remove();
    }
}

function formatPrice(price) {
    return parseInt(price).toLocaleString('ru-RU');
}

</script>


</html>


