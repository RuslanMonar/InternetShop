@extends('layout')
@section('content')
<div class="container">
    <div  class="row list-group">
        <form method="POST" action="{{ route('store') }}">
          <select name = 'select' class="form-control dynamic" id="productable_type">
            <option value="">Select Type Of Product</option>
            @foreach ($product_types as $product_type)
                <option value='{{$product_type}}'>{{$product_type}}</option>             
            @endforeach

          </select>
          <div class="form-group" >
            <label for="exampleInputPassword1">Preview Image Link</label>
            <input name="preview_img"  class="form-control" >
            <label >Title</label>
            <input name= "title" class="form-control">
            <label >Price</label>
            <input name= "price" class="form-control">
            <label >Quantity</label>
            <input name= "quantity" class="form-control">
          </div>
            <div class="form-group" id='productFields'>
            
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            {{ csrf_field() }}
        </form>
    </div>
</div>



@endsection
