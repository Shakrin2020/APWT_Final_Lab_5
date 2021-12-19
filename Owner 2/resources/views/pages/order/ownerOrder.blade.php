@extends('layouts.app')
@section('content')

   @if(Session::get('user'))

    <h2>   {{Session::get('user')}}'s Order </h2> 
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Type</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
        
            <tr>
            <td>{{Session::get('add_id')}}</td> 
            <td>{{Session::get('add_name')}}</td>
            <td>{{Session::get('add_type')}}</td>
            <td>{{Session::get('add_desc')}}</td>
            <td>{{Session::get('add_price')}}</td> 
            </tr>
   
    </table>
    @endif
@endsection