@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            <a href="orderNow"><button type="button" class="btn btn-info btn-lg">Order Now</button></a>
            @foreach ($products as $item)
            <div class="row searched-item cartlist-divider">
               <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img src="{{$item->gallery}}" class="trending-image">
                </a>
               </div>
               <div class="col-sm-4">
                    <div class="">
                        <h2>{{$item->name}}</h3>
                        <h5>{{$item->description}}</h5>
                      </div>
               </div>
               <div class="col-sm-3">
                <a href="removeCart/{{$item->cart_id}}"><button class="btn btn-warning">Remove from cart</button></a>
               </div>
            </div>
             
            @endforeach
            </div>
            <a href="orderNow"><button type="button" class="btn btn-info btn-lg">Order Now</button></a>
      </div>
</div>
@endsection
