@extends('layouts.app')
@section('content')
<form action="{{route('owners.edit')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="h_id" value="{{$owner->h_id}}">
        <div class="col-md-4 form-group">
            <span>User name</span>
            <input type="text" name="h_uname" value="{{$owner->h_uname}}" class="form-control">
            @error('uname')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
       <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="h_name" value="{{$owner->h_name}}"class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <span>Password</span>
            <input type="text" name="h_password " value="{{$owner->h_password}}"class="form-control">
        </div>

        <div class="col-md-4 form-group">
            <span>Phone</span>
            <input type="text" name="h_phone" value="{{$owner->h_phone}}" class="form-control">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group">
            <span>Email</span>
            <input type="text" name="h_email" value="{{$owner->h_email}}" class="form-control">
        </div>
        
        <div class="col-md-4 form-group">
            <span>DOB</span>
            <input type="date" name="h_dob" value="{{$owner->h_dob}}" class="form-control">
        </div>

        
        <div class="col-md-4 form-group">
            <span>Gender</span>
            <input type="text" name="h_gender" value="{{$owner->h_gender}}" class="form-control">
        </div>

        
        <div class="col-md-4 form-group">
            <span>Address</span>
            <input type="text" name="h_address" value="{{$owner->h_address}}" class="form-control">
        </div>
        
        
        <input type="submit" class="btn btn-success" value="Edit" >
    </form>
@endsection