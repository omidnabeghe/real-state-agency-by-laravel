@extends('layouts.master')
@section('head-tag')
<title>Si8ngle Advertise</title>

@endsection

@section('content')

<div class="hero-wrap" style="background-image: url({{ asset('images/properties-2.jpg') }});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span class="mr-2"><a href="{{ route('ads') }}"> ads</a></span> <span>Advertise</span></p>
                <h1 class="mb-3 bread">Advertise</h1>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-12 ftco-animate">
                        <div class="single-slider owl-carousel">
                            @foreach ($galleries as $gallery)

                            <div class="item">
                                <div class="properties-img" style="background-image: url(../{{ myUrlImage($gallery['indexArray']['large']) }});"></div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-md-12 Properties-single mt-4 mb-5 ftco-animate">
                        <h2>{{ $advertise->title }}</h2>
                        <p class="rate mb-4">
                            <span class="loc"><a href="#"><i class="icon-map"></i> {{ $advertise->address }}</a></span>
                        </p>
                        <p> {{ $advertise->title }}</p>
                        <div class="d-md-flex mt-5 mb-5">
                            <ul>
                                <li><span>area : </span>  {{ $advertise->area . 'm' }}</li>
                                <li><span>room : </span>  {{ $advertise->room }}</li>
                                <li><span>toilet : </span>  {{ $advertise->toilet }}</li>
                                <li><span>parking : </span>  {{ ($advertise->parking == 0) ? 'ok ' : 'no' }}</li>
                            </ul>
                            <ul class="ml-md-5">
                                <li><span>floor : </span>  {{ $advertise->fllor }}</li>
                                <li><span>year : </span>  {{ $advertise->year }}</li>
                                <li><span>storeroom : </span>  {{ ($advertise->storroom == 0) ? 'ok ' : 'no' }}</li>
                                <li><span>balcony : </span> {{ ($advertise->balcony == 0) ? 'ok ' : 'no' }}
                                </li>
                            </ul>
                        </div>
                        <p>{!! $advertise->description !!}</p>
                    </div>


                    <div class="col-md-12 properties-single ftco-animate mb-5 mt-5">
                        <h4 class="mb-4">related ads</h4>
                        <div class="row">
                            @foreach ($relatedAds as $advertise)

                            <div class="col-md-6 ftco-animate">
                                <div class="properties">
                                    <a href="property-single.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(../{{ myUrlImage($advertise->image['indexArray']['medium']) }});">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <span class="status sale">{{ sellStatus($advertise->sell_status) }}</span>
                                        <div class="d-flex">
                                            <div class="one">
                                                <h3><a href="property-single.html">{{ $advertise->address }}</a></h3>
                                                <p>{{ type($advertise->type) }}</p>
                                            </div>
                                            <div class="two">
                                                <span class="price">{{ $advertise->amount . '$'}}</span>
                                            </div>
                                        </div>
                                        <p>{{ sellStatus($advertise->description) }}</p>
                                        <hr>
                                        <p class="bottom-area d-flex">
                                            <span><i class="flaticon-selection"></i> {{ $advertise->area . 'meter'}}</span>
                                            <span class="ml-auto"><i class="flaticon-bathtub"></i> {{ $advertise->room }}</span>
                                            <span><i class="flaticon-bed"></i> {{ $advertise->toilet }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
            <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">

                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>Categories</h3>
                        @foreach ($countAdsCat as $key => $value)

                        <li><a href="{{ route('ads.category',$key) }}">{{ $key }} <span>({{ $value }})</span></a></li>
                        @endforeach


                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3> Last Posts</h3>
                    @foreach ($lastPosts as $post)

                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(../{{ myUrlImage($post->image['indexArray']['medium']) }});"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">{{ $post->title }}</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> {{ $post->published_at }}</a></div>
                                <div><a href="#"><span class="icon-person"></span> {{userType($post->user->user_type) }}</a></div>
                                <div><a href="#"><span class="icon-chat"></span> {{ $post->category->name ?? ' ' }}</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>


</section>
<!-- .section -->



@endsection
