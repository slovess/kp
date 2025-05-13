@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Все товары</h1>
    <a href="{{ route('goods.create') }}" class="btn btn-primary">Добавить товар</a>
    
    <div class="goods-grid mt-4">
        @foreach($goods as $good)
        <div class="good-card">
            <img src="{{ asset('storage/' . $good->image) }}" alt="{{ $good->name }}">
            <h3>{{ $good->name }}</h3>
            <p>{{ $good->price }} ₽</p>
            <a href="{{ route('goods.show', $good->id) }}" class="btn btn-info">Подробнее</a>
        </div>
        @endforeach
    </div>
</div>
@endsection