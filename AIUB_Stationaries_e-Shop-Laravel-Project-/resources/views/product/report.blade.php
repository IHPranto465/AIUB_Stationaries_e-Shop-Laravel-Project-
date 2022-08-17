@extends('layouts.app')
@section('content')
<form action="{{ route('report') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row ">
            <div class="form-group">
                    <input type="text" name="name" placeholder="Describe the Problem Here" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <input type="number" name="price" Placeholder="Enter the Customer ID"class="form-control">
                </div>
    
                <br>
                <div class="form-group">
                    <input type="file" name="image" class="form-control">
                </div>
     
                <br>
                <div class="form-group">
                    <button type="Submit Report" class="btn btn-success">Upload a document</button>
                </div>
     
            </div>
            </div>
            
        </form>
        
@endsection