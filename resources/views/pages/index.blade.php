@extends('layouts.app')
@section('content1')
<div class="splashContent">
    {{--<div class="splashBanner">--}}
        {{--<img class="" src="./img/splash.png" alt="Card image cap">--}}
        {{--<div class="splashBlack">--}}
            {{--<div class="splashText">--}}
                {{--<div class="cont" style="background: black;">--}}
                    {{--<h5>Get ready for the autumn</h5>--}}
                    {{--<span>we have prepared everything for you!</span>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="container1">
        <img class="" src="./img/splash.png" alt="Card image cap">
        <div class="content1">
            <h4 style="margin-bottom: 0;">Get ready for the autumn</h4>
            <span>we have prepared everything for you!</span>
        </div>
    </div>
    <div class="splashContentText">
        <h2>This is Vaimio Store</h2>
        <h5>YOUR ONE-STOP</h5>
        <h5>FASHION DESTINATION</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad autem cumque distinctio doloremque iure maiores molestias natus neque nostrum obcaecati pariatur perferendis quibusdam quisquam, rerum sunt suscipit velit vero vitae.</p>
    </div>
</div>
<h2 class="favouriteText"><span>Our Favourites</span></h2>

@endsection
@section('content2')
    @foreach($products->chunk(4) as $productChunk)
        <div class="row">
            @foreach($productChunk as $productA)
                {{--The Bootstrap grid system has four classes: xs (phones), sm (tablets), md (desktops), and lg (larger desktops) src="../resources/assets/brand/logo.png"--}}
                <div class="col-sm-6 col-md-3">
                    <img class="img-thumbnail" src="{{$productA->imagePath}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{$productA->title}}</h5>
                        <p class="card-text align-content-center price">€{{$productA->price}} €{{$productA->salePrice}}</p>
                        <a href="{{route('pages.addToCart', ['id' => $productA->id])}}" class="btn btn-info pull-right">Add to cart</a>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection