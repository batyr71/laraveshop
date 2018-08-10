@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <h1>Добавление товара</h1>
    <div class="row justify-content-right">
        <form action="{{route('products.store')}}" method="post">
            @csrf
            <div class="col-6">
                <label for="name">Наименование</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="col-6">
                <label for="description">Описание</label>
                <input type="text" id="description" name="description">
            </div>
            <div class="col-6">
                <label for="category_id">Категория</label>
                <select name="category_id" id="category_id">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6 mt-4">
                <input type="submit" value="Добавить продукт">
            </div>
        </form>
    </div>
</div>
@endsection
