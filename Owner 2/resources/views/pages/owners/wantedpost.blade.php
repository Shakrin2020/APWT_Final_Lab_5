@extends('layouts.app')
@section('content')
    <form action="{{route('owners.wantedpost')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}

        <div class="col-md-4 form-group">
        <label for="type">Post Type:</label>
        <select id="type" name="type">
        <option value="natural">Natural</option>
        <option value="vintage">Vintage</option>
        <option value="modern">Modern</option>
        
        </select>
        </div>

        <div class="col-md-4 form-group">
            <span>Post Budget</span>
            <input type="text" name="budget" value="{{old('budget')}}" class="form-control">
        </div>

        <div class="col-md-4 form-group">
            <span>Post Description</span>
            <input type="text" name="desc" value="{{old('desc')}}" class="form-control">
        </div>
        @php 
        echo "\n";
        @endphp
       
        <br><br>

        <input type="submit" class="btn btn-success btn-lg" value="Post" >
    </form>
@endsection

