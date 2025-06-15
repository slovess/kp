@extends('admin.layout')

@section('content')
<h1>Редактировать товар</h1>

<form action="{{ route('admin.goods.update', $good->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-columns">
        <div class="form-column">
            <div>
                <label for="name">Название *</label>
                <input type="text" id="name" name="name" value="{{ old('name', $good->name) }}" required>
                @error('name')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div>
                <label for="description">Описание*</label>
                <textarea id="description" name="description">{{ old('description', $good->description) }}</textarea>
                @error('description')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div>
                <label for="price">Цена *</label>
                <input type="number" id="price" name="price" value="{{ old('price', $good->price) }}" step="0.01" min="0" required>
                @error('price')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div>
                <label for="size">Размер*</label>
                <input type="text" id="size" name="size" value="{{ old('size', $good->size) }}">
                @error('size')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div>
                <label for="image">Изображение*</label>
                <input type="file" id="image" name="image" accept="image/*">
                @error('image')<div class="error">{{ $message }}</div>@enderror

                @if($good->image)
                    <div style="margin-top: 10px;">
                        <img src="{{ asset('storage/' . $good->image) }}" width="120" alt="Фото товара">
                    </div>
                @endif
            </div>
        </div>

        <div class="form-column">
            <div>
                <label for="brand_id">Бренд*</label>
                <select id="brand_id" name="brand_id">
                    <option value="">— Выберите бренд —</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}" {{ (old('brand_id', $good->brand_id) == $brand->id) ? 'selected' : '' }}>{{ $brand->title }}</option>
                    @endforeach
                </select>
                @error('brand_id')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div>
                <label for="category_id">Категория*</label>
                <select id="category_id" name="category_id">
                    <option value="">— Выберите категорию —</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ (old('category_id', $good->category_id) == $category->id) ? 'selected' : '' }}>{{ $category->title }}</option>
                    @endforeach
                </select>
                @error('category_id')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div>
                <label for="location_id">Локация*</label>
                <select id="location_id" name="location_id">
                    <option value="">— Выберите локацию —</option>
                    @foreach($locations as $location)
                        <option value="{{ $location->id }}" {{ (old('location_id', $good->location_id) == $location->id) ? 'selected' : '' }}>{{ $location->title }}</option>
                    @endforeach
                </select>
                @error('location_id')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div>
                <label for="material_id">Материал*</label>
                <select id="material_id" name="material_id">
                    <option value="">— Выберите материал —</option>
                    @foreach($materials as $material)
                        <option value="{{ $material->id }}" {{ (old('material_id', $good->material_id) == $material->id) ? 'selected' : '' }}>{{ $material->title }}</option>
                    @endforeach
                </select>
                @error('material_id')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div>
                <label for="color_id">Цвет*</label>
                <select id="color_id" name="color_id">
                    <option value="">— Выберите цвет —</option>
                    @foreach($colors as $color)
                        <option value="{{ $color->id }}" {{ (old('color_id', $good->color_id) == $color->id) ? 'selected' : '' }}>{{ $color->title }}</option>
                    @endforeach
                </select>
                @error('color_id')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="checkbox-wrapper">
                <input type="checkbox" name="isPopular" id="isPopular" {{ old('isPopular', $good->isPopular) ? 'checked' : '' }}>
                <label for="isPopular">Популярный</label>
            </div>

            <div class="checkbox-wrapper">
                <input type="checkbox" name="isPresence" id="isPresence" {{ old('isPresence', $good->isPresence) ? 'checked' : '' }}>
                <label for="isPresence">В наличии</label>
            </div>
        </div>
    </div>

    <button type="submit" style="margin-top: 20px;">Сохранить изменения</button>
</form>



<a href="{{ route('admin.goods.index') }}" style="display: inline-block; margin-top: 20px;">← Вернуться к списку</a>
@endsection
