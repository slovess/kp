@extends('admin.layout')

@section('content')
<h1>Управление категориями</h1>

@if(session('success'))
    <div class="success-message">{{ session('success') }}</div>
@endif

@if(session('error'))
    <div class="error-message">{{ session('error') }}</div>
@endif

<div style="margin-bottom: 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
    <div style="display: flex; align-items: center; gap: 10px;">
        <label for="sort_by" style="font-weight: 600; margin: 0;">Сортировка:</label>
        <select id="sort_by" onchange="changeSorting()" style="padding: 5px 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;">
            <option value="id" {{ request('sort_by') == 'id' || !request('sort_by') ? 'selected' : '' }}>По номеру</option>
            <option value="title" {{ request('sort_by') == 'title' ? 'selected' : '' }}>По названию</option>
            <option value="isPopular" {{ request('sort_by') == 'isPopular' ? 'selected' : '' }}>По популярности</option>
            <option value="created_at" {{ request('sort_by') == 'created_at' ? 'selected' : '' }}>По дате создания</option>
        </select>
        
        <select id="sort_order" onchange="changeSorting()" style="padding: 5px 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;">
            <option value="desc" {{ request('sort_order') == 'desc' || !request('sort_order') ? 'selected' : '' }}>По убыванию</option>
            <option value="asc" {{ request('sort_order') == 'asc' ? 'selected' : '' }}>По возрастанию</option>
        </select>
    </div>
    
    <div style="color: #666; font-size: 14px;">
        Всего категорий: <strong>{{ $categories->total() }}</strong>
    </div>
</div>

<a href="{{ route('admin.categories.create') }}" class="add-button">➕ Добавить категорию</a>

<table>
    <thead>
        <tr>
            <th>Номер</th>
            <th>Название</th>
            <th>Изображение</th>
            <th>Популярная</th>
            <th>Количество товаров</th>
            <th>Дата создания</th>
            <th>Действия</th>
        </tr>
    </thead>
    <tbody>
        @forelse($categories as $category)
            <tr>
                <td data-label="ID">{{ $category->id }}</td>
                <td data-label="Название">{{ $category->title }}</td>
                <td data-label="Изображение">
                    @if($category->image)
                        <img src="{{ asset('storage/' . $category->image) }}" width="60" alt="Изображение категории">
                    @else
                        —
                    @endif
                </td>
                <td data-label="Популярная">{{ $category->isPopular ? 'Да' : 'Нет' }}</td>
                <td data-label="Товаров">{{ $category->goods()->count() }}</td>
                <td data-label="Создана">{{ $category->created_at->format('d.m.Y') }}</td>
                <td data-label="Действия">
                    <a href="{{ route('admin.categories.edit', $category->id) }}" title="Редактировать">✏️</a>
                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="Удалить" onclick="return confirm('Удалить категорию?')">🗑️</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="7" style="text-align:center;">Нет категорий</td></tr>
        @endforelse
    </tbody>
</table>

<div class="pagination-wrapper">
    {{ $categories->links() }}
</div>

<script>
function changeSorting() {
    const url = new URL(window.location);
    const sortBy = document.getElementById('sort_by').value;
    const sortOrder = document.getElementById('sort_order').value;
    
    url.searchParams.set('sort_by', sortBy);
    url.searchParams.set('sort_order', sortOrder);
    url.searchParams.delete('page');
    window.location.href = url.toString();
}
</script>
@endsection


