@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My Orders</h4>
            @foreach ($orders as $item)
            <div class="row searched-item cartlist-divider">
               <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img src="{{$item->gallery}}" class="trending-image">
                </a>
               </div>
               <div class="col-sm-4">
                    <div class="">
                        <h2>Name : {{$item->name}}</h3>
                        <h5>Delivery_Status :{{$item->status}}</h5>
                        <h5>Address : {{$item->address}}</h5>
                        <h5>Payment_status : {{$item->payment_status}}</h5>
                        <h5>Payament_Method : {{$item->payment_method}}</h5>
                      </div>
               </div>
            </div>
             
            @endforeach
            </div>
      </div>
</div>
@endsection
