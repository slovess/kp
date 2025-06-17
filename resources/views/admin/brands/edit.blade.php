@extends('admin.layout')

@section('content')
<h1>Редактировать бренд</h1>

<form action="{{ route('admin.brands.update', $brand->id) }}" method="POST" style="max-width: 500px;">
    @csrf
    @method('PUT')

    <div>
        <label for="title">Название бренда *</label>
        <input type="text" id="title" name="title" value="{{ old('title', $brand->title) }}" required>
        @error('title')<div class="error">{{ $message }}</div>@enderror
    </div>

    <button type="submit">Сохранить изменения</button>
</form>

<a href="{{ route('admin.brands.index') }}" style="display: inline-block; margin-top: 20px;">← Вернуться к списку</a>
@endsection
