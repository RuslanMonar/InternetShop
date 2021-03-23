@extends('layout')
@section('content')

<div class="container">
    <div id="products" class="row list-group">
        @foreach ($products as $product)
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <!--<img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" /> -->
                <img class="group list-group-image" src="{{$product->preview_img}}" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        {{$product->title}}</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                ${{$product->price}}</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="{{ route('show.type.id', ['id'=>$product->id, 'type'=>$product->productable_type]) }}">Watch full</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection