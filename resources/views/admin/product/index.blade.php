@extends('welcome')
@section('title', 'Страница создания товара')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 mt-5">
                <h2 class="text-center">Товары интернет-магазина</h2>
                <div class="row">
                    @foreach($products as $product)
                       <div class="col-4">
                           <div class="card mt-3" style="width: 100%">
                               <img style="width: 80px" src="/public/storage/{{$product->photo}}" alt="{{$product->name}}" class="card-img-top">
                               <div class="card-body">
                                   <h5 class="card-title">{{$product->name}}</h5>
                                   <div class="card-text">{{$product->description}}</div>
                                   <a href="{{route('admin.product.show', ['product' => $product->id])}}" class="btn btn-primary">Поодробнее</a>
                               </div>
                           </div>
                       </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
