@extends('layout')
@section('content')

<div class="container bootdey">
    <div class="col-md-12">
    <section class="panel">
          <div class="panel-body">
              <div class="col-md-6">
                  <div class="pro-img-details">
                      <img src="{{$product->preview_img}}" alt="">
                  </div>
                  <div class="pro-img-list">
                      <a href="#">
                          <img src="https://via.placeholder.com/115x100/87CEFA/000000" alt="">
                      </a>
                      <a href="#">
                          <img src="https://via.placeholder.com/115x100/FF7F50/000000" alt="">
                      </a>
                      <a href="#">
                          <img src="https://via.placeholder.com/115x100/20B2AA/000000" alt="">
                      </a>
                      <a href="#">
                          <img src="https://via.placeholder.com/120x100/20B2AA/000000" alt="">
                      </a>
                  </div>
              </div>
              <div class="col-md-6">
                  <h4 class="pro-d-title">
                      <a href="#" class="">
                          {{$product->title}}
                      </a>
                  </h4>

                  <div class="m-bot15"> <strong>Price : </strong> <span class="amount-old">${{$product->price}} </span></div>
                  <div class="form-group">
                      <label>Quantity</label>
                      <input type="quantiy" placeholder="1" class="form-control quantity">
                  </div>
                  <p>
                      <h3>Characteristics:</h3>
                    @yield('characteristics')
                    
                    <p> </p>
                      <button class="btn btn-round btn-danger" type="button"> Add to Cart</button>
                  </p>
              </div>
          </div>
      </section>
      </div>
      </div>

@endsection