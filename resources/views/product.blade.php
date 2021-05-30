@extends('master')
@section('content')
<div class="container custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @foreach($products as $item)
        <li data-target="#myCarousel" data-slide-to="{{$item['id']}}" class="{{$item['id']==1?'active':''}}"></li>
        @endforeach
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        @foreach($products as $item)
        <div class="item {{$item['id']==1?'active':''}}">
        <img src="{{$item['gallery']}}" class="slider-img">
        <div class="carousel-caption slider-text">
            <h3>{{$item['name']}}</h3>
            <p>{{$item['description']}}</p>
        </div>
        </div>
        @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</div>
@endsection