@extends('admin.layout')

@section('content')
<h1>Список товаров</h1>

@if(session('success'))
    <div class="success-message">{{ session('success') }}</div>
@endif

<div style="margin-bottom: 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
    <div style="display: flex; align-items: center; gap: 10px;">
        <label for="per_page" style="font-weight: 600; margin: 0;">Показать:</label>
        <select id="per_page" onchange="changePerPage(this.value)" style="padding: 5px 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;">
            <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
            <option value="15" {{ request('per_page') == 15 || !request('per_page') ? 'selected' : '' }}>15</option>
            <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
            <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
        </select>
        <span style="color: #666; font-size: 14px;">товаров на странице</span>
    </div>
    
    <div style="color: #666; font-size: 14px;">
        Всего товаров: <strong>{{ $goods->total() }}</strong>
    </div>
</div>

<a href="{{ route('admin.goods.create') }}" style="display: inline-block; margin: 15px 0; font-weight: 600; font-size: 1.1rem;">
    ➕ Добавить товар
</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Цена</th>
            <th>Изображение</th>
            <th>Популярный</th>
            <th>Бренд</th>
            <th>Категория</th>
            <th>Локация</th>
            <th>Материал</th>
            <th>Цвет</th>
            <th>Действия</th>
        </tr>
    </thead>
    <tbody>
        @forelse($goods as $good)
            <tr>
                <td>{{ $good->id }}</td>
                <td>{{ $good->name }}</td>
                <td>{{ number_format($good->price, 2, ',', ' ') }} ₽</td>
                <td>
                    @if($good->image)
                        <img src="{{ asset('storage/' . $good->image) }}" width="80" alt="Фото товара">
                    @endif
                </td>
                <td>{{ $good->isPopular ? 'Да' : 'Нет' }}</td>
                <td>{{ $good->brand->title ?? '—' }}</td>
                <td>{{ $good->category->title ?? '—' }}</td>
                <td>{{ $good->location->title ?? '—' }}</td>
                <td>{{ $good->material->title ?? '—' }}</td>
                <td>{{ $good->color->title ?? '—' }}</td>
                <td>
                    <a href="{{ route('admin.goods.edit', $good->id) }}" title="Редактировать">✏️</a>
                    <form action="{{ route('admin.goods.destroy', $good->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="Удалить" onclick="return confirm('Удалить товар?')">🗑️</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="11" style="text-align:center;">Нет товаров</td></tr>
        @endforelse
    </tbody>
</table>

<div style="margin-top: 30px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;">
    <div style="color: #666; font-size: 14px;">
        Показано {{ $goods->firstItem() ?? 0 }}-{{ $goods->lastItem() ?? 0 }} из {{ $goods->total() }} товаров
    </div>
    
  
</div>
@endsection

<script>
function changePerPage(perPage) {
    const url = new URL(window.location);
    url.searchParams.set('per_page', perPage);
    url.searchParams.delete('page'); // Сбрасываем на первую страницу
    window.location.href = url.toString();
}
</script>

<style>
.pagination-wrapper .pagination {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
    gap: 5px;
}

.pagination-wrapper .page-item {
    display: inline-block;
}

.pagination-wrapper .page-link {
    display: block;
    padding: 8px 12px;
    text-decoration: none;
    color: #670808;
    border: 1px solid #ddd;
    border-radius: 4px;
    transition: all 0.3s ease;
    font-size: 14px;
    font-weight: 500;
}

.pagination-wrapper .page-link:hover {
    background-color: #f5f5f5;
    border-color: #670808;
}

.pagination-wrapper .page-item.active .page-link {
    background-color: #670808;
    color: white;
    border-color: #670808;
}

.pagination-wrapper .page-item.disabled .page-link {
    color: #ccc;
    cursor: not-allowed;
    background-color: #f8f9fa;
}

.pagination-wrapper .page-item.disabled .page-link:hover {
    background-color: #f8f9fa;
    border-color: #ddd;
}

@media (max-width: 768px) {
    .pagination-wrapper {
        overflow-x: auto;
        padding: 10px 0;
    }
    
    .pagination-wrapper .pagination {
        min-width: max-content;
    }
    
    .pagination-wrapper .page-link {
        padding: 6px 10px;
        font-size: 12px;
    }
}
</style>
