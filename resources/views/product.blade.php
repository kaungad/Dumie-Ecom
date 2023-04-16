@extends('master')
@section('content')
    

<div class="custom-product">
   
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($products as $item)
            <a href="detail/{{$item['id']}}">
            <div class="carousel-item {{$item ['id']==1?'active':''}}">
                <img src="{{$item['gallery']}}" class="d-block w-100 slider-img">
                <div class="slider-text carousel-caption">
                    <h3>{{$item['name']}}</h3>
                    <p>{{$item['description']}}</p>
                  </div>
            </a>
              </div>
             
            @endforeach
        </div>
        {{-- left and right control of slider --}}
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      {{-- trending-wrapper --}}
      <div class="trending-wrapper">
        <h2>Trending Products</h2>  
        @foreach ($products as $item)
        <div class="trending-item">
            <a href="detail/{{$item['id']}}">
            <img src="{{$item['gallery']}}" class="trending-image" >
            <div class="">
                <h3>{{$item['name']}}</h3>
              </div>
            </a>
          </div>
         
        @endforeach
    </div>
      </div>
</div>

@endsection
