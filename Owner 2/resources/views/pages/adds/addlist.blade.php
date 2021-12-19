@extends('layouts.app')
@section('content')
    <div class="col-md-3">
        @foreach ($adds as $item)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{$item->add_image}}" alt="Card image cap" width = "500px" width = "500px">
                <div class="card-body">
                <h4> <p class="card-text text-left">Name: {{$item->add_name}}<br> </h4>
                <h4> <p class="card-text text-left">Type: {{$item->add_type}}<br> </h4>
                <h4><p class="card-text text-left">Desc: {{$item->add_desc}}<br> </h4>
                <h4><span>Price: BDT : {{$item->add_price}}</span><br></h4>
                <a href="{{route('order.ownerOrder',['id'=>$item->add_id])}}" class="btn btn-primary" style="color:white">Select for order</a></p>

            </div >
        @endforeach

    </div >
@endsection