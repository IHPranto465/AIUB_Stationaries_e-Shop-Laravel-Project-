@extends('layouts.app')
@section('content')
<form action="{{ route('report') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row ">
            <div class="form-group">
                    <input type="text" name="name" placeholder="Sent the information to the delivery man" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <input type="number" name="price" Placeholder="Enter your phone number"class="form-control">
                </div>
    
                <br>
                <div class="form-group">
                    <input type="file" name="Picture of the location" class="form-control">
                </div>
     
                <br>
                <div class="form-group">
                    <button type="Submit Report" class="btn btn-success">Sent the information</button>
                </div>
     
            </div>
            </div>
            
        </form>
        
@endsection