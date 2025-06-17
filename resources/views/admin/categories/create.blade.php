@extends('admin.layout')

@section('content')
<h1>Добавить категорию</h1>

<form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data" style="max-width: 500px;">
    @csrf

    <div>
        <label for="title">Название категории *</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" required>
        @error('title')<div class="error">{{ $message }}</div>@enderror
    </div>

    <div>
        <label for="image">Изображение</label>
        <input type="file" id="image" name="image" accept="image/*">
        @error('image')<div class="error">{{ $message }}</div>@enderror
    </div>

    <div class="checkbox-wrapper">
        <input type="checkbox" id="isPopular" name="isPopular" {{ old('isPopular') ? 'checked' : '' }}>
        <label for="isPopular">Популярная категория</label>
    </div>

    <button type="submit">Добавить категорию</button>
</form>

<a href="{{ route('admin.categories.index') }}" style="display: inline-block; margin-top: 20px;">← Вернуться к списку</a>
@endsection

