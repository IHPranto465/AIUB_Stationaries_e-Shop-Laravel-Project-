@extends('layouts.app')
@section("content")
<div class="custom-product">
    <div class="trending-wrapper">
        <h3>Trending Products</h3>
        @foreach($product as $item)
        <div class="searched-item">
        <img style="height:350px; width:250px;" class="card-img-top" src="{{asset('images/'.$item->image)}}" alt="Card image cap">

                <img class="trending-image" src="{{$item['gallery']}}">
                <div class="">
                    <h2><h3>Name:</h3>{{$item['name']}}</h2>
                    <h5><h3>Price:</h3>{{$item['price']}}</h5>
</div>
</a>
</div>
@endforeach
</div>
</div>
@endsection

