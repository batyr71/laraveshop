@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="row justify-content-center">
        @foreach($products as $product)
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$product->name}}</div>

                <div class="card-body">
                    {{$product->description}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
