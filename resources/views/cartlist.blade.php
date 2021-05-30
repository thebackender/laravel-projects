@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            @foreach($products as $item)
            <div class="row searched-item cart-list-devider">
                <div class="col-sm-2">
                    <a href="detail/{{$item->id}}">
                        <img src="{{$item->gallery}}" alt="" class="trending-image">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="detail/{{$item->id}}">
                        <div>
                            <h2>{{$item->name}}</h2>
                            <h5>{{$item->description}}</h5>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-warning">Remove from cart</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection