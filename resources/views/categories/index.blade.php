@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="row justify-content-between">
        @foreach($categories as $category)
        <div class="card mb-3" style="width: calc(100% / 4 - 15px);">
            <img class="card-img-top" src="https://placeimg.com/280/180/any" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$category->name}}</h5>
                <p class="card-text">{{$category->description}}</p>
                <a href="/categories/{{$category->id}}" class="btn btn-primary">Посмотреть все {{$category->name}}</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
