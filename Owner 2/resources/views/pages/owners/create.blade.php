@extends('layouts.app')
@section('content')
    <form action="{{route('owners.create')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}

        <div class="col-md-4 form-group">
            <span>User Name</span>
            <input type="text" name="uname" value="{{old('uname')}}" class="form-control">
            @error('uname')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
        </div>
        
        <div class="col-md-4 form-group">
            <span>Password</span>
            <input type="text" name="password" value="{{old('password')}}" class="form-control">
        </div>

       <div class="col-md-4 form-group">
            <span>Phone</span>
            <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
        </div>

        <div class="col-md-4 form-group">
            <span>Email</span>
            <input type="text" name="email" value="{{old('email')}}" class="form-control">
        </div>

        <div class="col-md-4 form-group">
            <span>DOB</span>
            <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
        </div>

        <div class="col-md-4 form-group">
            <span>Gender</span>
            <input type="text" name="gender" value="{{old('gender')}}" class="form-control">
        </div>
        <div class="col-md-4 form-group">
            <span>Address</span>
            <input type="text" name="address" value="{{old('address')}}" class="form-control">
        </div>

       <br><br>

        <input type="submit" class="btn btn-success" value="Click to Add!" >
    </form>
@endsection

