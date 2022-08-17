@extends('layouts.app')
@section('content')
<br>
<div
    <legend> Products </legend>
    <form action="/search" class="navbar-form navbar-left">
<br><div class="form-group">
  <input type="text" name="query" class="form-control search-box"placeholder="Search">
</div>
<button type="submit" class="btn btn-default">Search</button>
  <div class="row">
    @foreach ($products as $item)
        
        <div class="image-cards col-md-3 m-2=4">
        <a href="">
            <div class="image-card">
                <div class="image-card-banner">
                <img style="height:350px; width:250px;" class="card-img-top" src="{{asset('images/'.$item->image)}}" alt="Card image cap">
                </div>
                <div class="card-details">
                    <h1><b>{{$item->name}}</b></h1>
                    <p class="cards-p"><i class=""></i>
                      price: <span id="price"> {{$item->price}}</span> taka
                  </p>
                  <a href="{{route('products.addtocart',['id'=>$item->id])}}" class="btn btn-primary" style="color:white">Add to Cart</a>
                </div>
              
            </div>
            </a>
        </div>
    
  @endforeach
  
  </div>
@endsection