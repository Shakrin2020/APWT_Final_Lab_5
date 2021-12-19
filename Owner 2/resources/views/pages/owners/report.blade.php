@extends('layouts.app')
@section('content')
    <form action="{{route('owners.report')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}

        <div class="col-md-4 form-group">
            <span>Report Description</span>
            <textarea name="desc" rows="4" class="form-control"></textarea>  
        </div>
        
        <input type="submit" class="btn btn-success" value="Click to Report!">
    </form>
@endsection

