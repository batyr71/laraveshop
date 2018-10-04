@extends('layouts.app')

@section('content')

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<div class="container">
    <div class="row justify-content-between">
        <div class="col-8">
            <div class="row">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                      <div class="carousel-item active">
                      <img class="d-block w-100" src="https://placeimg.com/800/400/people" alt="First slide">
                      </div>
                      <div class="carousel-item">
                      <img class="d-block w-100" src="https://placeimg.com/800/400/nature" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                      <img class="d-block w-100" src="https://placeimg.com/800/400/animals" alt="Third slide">
                      </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
              </div>
            </div>
            <div class="row justify-content-between my-3">
              @foreach($products as $product)
                <div class="card mb-3" style="width: calc(100% / 3 - 8px);">
                    <img class="card-img-top" src="https://placeimg.com/286/180/people" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                        <a href="/products/{{$product->id}}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
        <div class="col-4 pl-5">
            <div class="row mb-3">
                <ul class="list-group col-12">
                    <li class="list-group-item active">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>

            <div class="row mb-5">
                <ul class="list-group col-12">
                    <li class="list-group-item active">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>

            <div class="row mb-5">
                <ul class="list-group col-12">
                    <li class="list-group-item active">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>

            <div class="row mb-5">
                <ul class="list-group col-12">
                    <li class="list-group-item active">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>

            <div class="row  mb-5">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with peopleone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>

    </div>
    
    <div class="row">
        <div class="jumbotron col-12" style="background-image: url('https://placeimg.com/960/424/people')">
          <div style="background-color: #acecbd6b;" class="p-3">
            <h1 class="display-4">Доставка во все регионы России!</h1>
            <p class="lead">Вы делаете покупки, а мы с любовью доставляем ваш заказ в любой уголок нашей необъятной родины. А за заказ от 2 500 рублей доставка будет абсолютно бесплатной.</p>
            <hr class="my-4">
            <p>Средняя скорость доставки по России до 3 дней</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Подробнее</a>
          </div>
        </div>
    </div>

    <div class="row justify-content-between">

        <div class="card" style="width: calc(90% / 3);">
            <img class="card-img-top" src="https://placeimg.com/286/180/people" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: calc(90% / 3 );">
            <img class="card-img-top" src="https://placeimg.com/286/180/people" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: calc(90% / 3 );">
            <img class="card-img-top" src="https://placeimg.com/286/180/people" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

    </div>
</div>
@endsection
