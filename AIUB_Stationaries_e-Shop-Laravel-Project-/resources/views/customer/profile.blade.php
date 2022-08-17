@extends('layouts.app')
@section('content')

    <form action="{{ route('profileSubmit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row ">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="email" class="form-control" value="{{$c->email}}">
                </div>
                <br>
                    <label>Name</label>
                <div class="form-group">
                    <input type="text" name="name" placeholder="Name" class="form-control" value="{{$c->name}}">
                </div>
                <br>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
     
            </div>
            </div>
            
        </form>
@endsection