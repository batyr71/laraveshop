@extends('layouts.app')

@section('content')

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <h1>Adminка</h1>
    </div>
</div>
@endsection
