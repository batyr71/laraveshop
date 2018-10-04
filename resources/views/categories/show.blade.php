@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <h1>{{$category}}</h1>

    <div class="row justify-content-between my-3">
      @foreach($products as $product)
        <div class="card mb-3" style="width: calc(100% / 3 - 8px);">
            <img class="card-img-top" src="https://placeimg.com/286/180/any" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">{{$product->description}}</p>
                <a href="/products/{{$product->id}}" class="btn btn-primary">Details</a>
            </div>
        </div>
      @endforeach
    </div>
</div>
@endsection
