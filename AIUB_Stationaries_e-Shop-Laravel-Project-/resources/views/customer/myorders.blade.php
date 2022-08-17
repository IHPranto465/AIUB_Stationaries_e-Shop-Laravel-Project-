@extends('layouts.app')
@section('content')
    <table class="table table-bordered">
        <tr>
            
            <th>Order Code</th>
            <th>Price</th>
            <th>Status</th>
        </tr>
        @foreach($orders as $item)
            <tr>
                <td><a href="{{route('customer.myorders.details',['id'=>$item->id])}}">{{$item->id}}</a></td>
                <td>{{$item->price}}</td>
                <td>{{$item->status}}</td>
              
                <td><a href="{{route('customer.myorders.details',['id'=>$item->id])}}" class="btn btn-info">Details of Order</a></td>
                <td><a href="{{route('customer.deliverymandetails')}}" class="btn btn-info">Track Delivery Man</a></td>
                <td><a href="{{route('customer.Sellerdetails')}}" class="btn btn-info">Details of the Seller</a></td>
                <td><a href="{{route('customer.myorders.deletedetails',['id'=>$item->id])}}" class="btn btn-info">DELETE</a></td>

            </tr>
        @endforeach
    </table>
@endsection