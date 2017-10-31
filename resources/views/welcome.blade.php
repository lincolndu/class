@extends('layouts.app')

@section('header')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .thumbnail img{
        height: 150px;
    }
</style>

@stop

@section('content')


<div class="container">

<div class="row">


@foreach($products as $product)

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img class="img-responsive" src="{{$product->image}}" alt="...">
      <div class="caption">
        <h3>{{$product->title}}</h3>
        <p> {{$product->description}} </p>
        <div class="clearfix">
        <div class="pull-left price "> <strong>${{$product->price}}</strong> </div>
        <a href="{{ url('product') . "/". $product->id }}" class="btn btn-success pull-right" role="button">Add to cart</a> 
        </div>
      </div>
    </div>
  </div>

@endforeach


</div>


    
</div>

@endsection
