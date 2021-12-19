@extends('layouts.app')
 @section('content')
   @if(Session::get('user'))
 
       <h2>   {{Session::get('user')}}'s Wanted Post </h2> 

       <table class="table table-borded">

        <tr>
            <th>Post Id</th>
            <th>Type</th>
            <th>Budget</th>
            <th>Description</th>
        
        </tr>
       
        <tr>
            <td>{{Session::get('wp_id')}}</td> 
            <td>{{Session::get('type')}}</td>
            <td>{{Session::get('budget')}}</td>
            <td>{{Session::get('desc')}}</td>
    
        </tr>  
        
       </table>
@endsection
@endif 
 


