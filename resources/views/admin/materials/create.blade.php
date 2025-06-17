@extends('admin.layout')

@section('content')
<h1>Добавить материал</h1>

<form action="{{ route('admin.materials.store') }}" method="POST" style="max-width: 500px;">
    @csrf

    <div>
        <label for="title">Название материала *</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" required>
        @error('title')<div class="error">{{ $message }}</div>@enderror
    </div>

    <button type="submit">Добавить материал</button>
</form>

<a href="{{ route('admin.materials.index') }}" style="display: inline-block; margin-top: 20px;">← Вернуться к списку</a>
@endsection
