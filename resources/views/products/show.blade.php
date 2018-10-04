@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <h1>{{$product->name}}</h1>
    <p>{{$product->description}}</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Купить</a>

</div>
@endsection
