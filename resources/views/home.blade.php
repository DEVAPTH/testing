@extends('layouts.master')

@section('title','Home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-3">
                @include('layouts.sidebar')
            </div>

            @foreach ($products as $product)
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <h4 class="text-center">Pirce {{$product->price}}</h4>
                  <img src="{{asset('/uploads/'.$product->img)}}" width="224px" height="200px">
                  <div class="caption">
                    <h3>{{$product->title}}</h3>
                    <p>{{$product->description}}</p>
                    <p><a href="#" class="btn btn-primary" role="button">View Detail</a> <a href="#" class="btn btn-default" role="button">Cart</a></p>
                  </div>
                </div>
              </div>
            @endforeach

        </div>

    </div>
@endsection
