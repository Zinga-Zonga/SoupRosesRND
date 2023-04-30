@extends('layouts.admin')

@section('content')
    <div class="row">
        <form class="col-6" action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="productTitle" class="form-label">Название товара</label>
                <input type="text" class="form-control" id="productTitle" name="title">

            </div>
            @error('title')
            <div class="text-danger">
                Это поле обязательно к заполнению!
            </div>
            @enderror
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Описание</label>
                <textarea class="form-control" id="productDescription" rows="3" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="productTitle" class="form-label">Цена</label>
                <input type="text" class="form-control" id="productPrice" name="price">
            </div>
            @error('price')
            <div class="text-danger">
                Это поле обязательно к заполнению!
            </div>
            @enderror
            <div class="form-group">
                <label for="exampleFormControlFile1">Загрузить фото</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" accept=".jpg,.jpeg,.png" name="image">
            </div>
            @error('image')
            <div class="text-danger">
                Это поле обязательно к заполнению!
            </div>
            @enderror
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>

    </div>
@endsection
