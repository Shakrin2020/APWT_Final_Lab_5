@extends('layouts.app')
 @section('content')
   @if(Session::get('user'))

        
       <h1>   Welcome {{Session::get('user')}} !</h1> 
       <h2>   {{Session::get('user')}}'s Dash Board </h2> 

       <table class="table table-borded">

        <tr>
            <th>Id</th>
            <th>User Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>DOB</th>
            <th>Gender</th>
            <th>Address</th>
            <th></th>
        </tr>
        <tr>
            <td>{{Session::get('id')}}</td> 
            <td>{{Session::get('uname')}}</td>
            <td>{{Session::get('phone')}}</td>
            <td>{{Session::get('email')}}</td>
            <td>{{Session::get('dob')}}</td> 
            <td>{{Session::get('gender')}}</td>
            <td>{{Session::get('address')}}</td>

            <td><a href="/owner/{{Session::get('id')}}/{{Session::get('uname')}}" class="btn btn-primary">Edit</a></td>
            <td><a href="/owner/delete/{{Session::get('id')}}/{{Session::get('uname')}}" class="btn btn-danger">Delete</a></td>
        </tr>  
        
       </table>
@endsection
@endif 
 


