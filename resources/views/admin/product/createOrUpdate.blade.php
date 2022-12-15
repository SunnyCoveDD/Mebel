@extends('welcome')
@section('title', 'Страница создания товара')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
                <div class="col-6 mt-5">
                    @if(session()->has('success'))
                        <div class="alert alert-success">Товар добавлен!</div>
                    @endif
                    <form action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h2 class="text-center">Создание нового товара</h2>
                        <div class="mb-3">
                            <label for="name" class="form-label">Наименование товара</label>
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" id="name">
                            @error('name')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Описание товара</label>
                            <input name="description" type="text" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}" id="description">
                            @error('description')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Цена товара</label>
                            <input name="price" type="text" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}" id="price">
                            @error('price')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="made" class="form-label">Страна производитель товара</label>
                            <input name="made" type="text" class="form-control @error('made') is-invalid @enderror" value="{{old('made')}}" id="made">
                            @error('made')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="photo_file" class="form-label">Фото товара</label>
                            <input name="photo_file" type="file" class="form-control @error('photo_file') is-invalid @enderror" value="{{old('photo_file')}}" id="photo_file">
                            @error('photo_file')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </form>
                </div>
        </div>
    </div>
@endsection
