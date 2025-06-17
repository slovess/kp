@extends('admin.layout')

@section('content')
<h1>Добавить цвет</h1>

<form action="{{ route('admin.colors.store') }}" method="POST" style="max-width: 500px;">
    @csrf

    <div>
        <label for="title">Название цвета *</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" required>
        @error('title')<div class="error">{{ $message }}</div>@enderror
    </div>

    <button type="submit">Добавить цвет</button>
</form>

<a href="{{ route('admin.colors.index') }}" style="display: inline-block; margin-top: 20px;">← Вернуться к списку</a>
@endsection

