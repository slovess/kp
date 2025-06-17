@extends('admin.layout')

@section('content')
<h1>Редактировать категорию</h1>

<form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data" style="max-width: 500px;">
    @csrf
    @method('PUT')

    <div>
        <label for="title">Название категории *</label>
        <input type="text" id="title" name="title" value="{{ old('title', $category->title) }}" required>
        @error('title')<div class="error">{{ $message }}</div>@enderror
    </div>

    <div>
        <label for="image">Изображение</label>
        <input type="file" id="image" name="image" accept="image/*">
        @error('image')<div class="error">{{ $message }}</div>@enderror

        @if($category->image)
            <div style="margin-top: 10px;">
                <img src="{{ asset('storage/' . $category->image) }}" width="120" alt="Текущее изображение">
            </div>
        @endif
    </div>

    <div class="checkbox-wrapper">
        <input type="checkbox" id="isPopular" name="isPopular" {{ old('isPopular', $category->isPopular) ? 'checked' : '' }}>
        <label for="isPopular">Популярная категория</label>
    </div>

    <button type="submit">Сохранить изменения</button>
</form>

<a href="{{ route('admin.categories.index') }}" style="display: inline-block; margin-top: 20px;">← Вернуться к списку</a>
@endsection
