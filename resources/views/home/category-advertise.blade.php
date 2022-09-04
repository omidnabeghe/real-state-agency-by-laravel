@extends('layouts.master')
@section('head-tag')
<title>Category Advertise</title>

@endsection

@section('content')

<div class="hero-wrap" style="background-image: url({{ asset('images/properties-2.jpg') }});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span class="mr-2"><a href="{{ route('ads') }}"> adsا</a></span> <span>Advertise</span></p>
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
                    <div class="col-md-12 Properties-single mt-4 mb-5 ftco-animate">
                        <div class="row">

                        @foreach ($categoryAds as $categoryAdvertise)
                        <div class="col-md-6 ftco-animate">
                            <div class="properties">
                                <a href="{{ route('advertise', $categoryAdvertise->id) }}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(../{{ myUrlImage($categoryAdvertise->image['indexArray']['medium']) }});">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <span class="status sale">{{ sellStatus($categoryAdvertise->sell_status) }}</span>
                                    <div class="d-flex">
                                        <div class="one">
                                            <h3><a href="{{ route('advertise', $categoryAdvertise->id) }}">{{ $categoryAdvertise->address }}</a></h3>
                                            <p>{{ type($categoryAdvertise->type) }}</p>
                                        </div>
                                        <div class="two">
                                            <span class="price">{{ $categoryAdvertise->amount }}</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <p class="bottom-area d-flex">
                                        <span><i class="flaticon-selection"></i>{{ $categoryAdvertise->area }}</span>
                                        <span class="ml-auto"><i class="flaticon-bathtub"></i> {{ $categoryAdvertise->room }}</span>
                                        <span><i class="flaticon-bed"></i> {{ $categoryAdvertise->toilet }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    </div>


                    <div class="col-md-12 properties-single ftco-animate mb-5 mt-5">
                        <h4 class="mb-4">related ads</h4>
                        <div class="row">
                            @foreach ($relatedAds as $advertise)

                            <div class="col-md-6 ftco-animate">
                                <div class="properties">
                                    <a href="{{ route('advertise', $advertise->id) }}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(../{{ myUrlImage($advertise->image['indexArray']['medium']) }});">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <span class="status sale">{{ sellStatus($advertise->sell_status) }}</span>
                                        <div class="d-flex">
                                            <div class="one">
                                                <h3><a href="{{ route('advertise', $advertise->id) }}">{{ $advertise->address }}</a></h3>
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

                        <li><a href="{{ route('ads.category',$key) }}">{{ $key }} <span>({{ $value->count() }})</span></a></li>
                        @endforeach


                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3> Last Posts</h3>
                    @foreach ($lastPosts as $post)

                    <div class="block-21 mb-4 d-flex">
                        <a href="{{ route('post',$post->id) }}" class="blog-img mr-4" style="background-image: url(../{{ myUrlImage($post->image['indexArray']['medium']) }});"></a>
                        <div class="text">
                            <h3 class="heading"><a href="{{ route('post',$post->id) }}">{{ $post->title }}</a></h3>
                            <div class="meta">
                                <div><a href="{{ route('post',$post->id) }}"><span class="icon-calendar"></span> {{ $post->published_at }}</a></div>
                                <div><a href="{{ route('post',$post->id) }}"><span class="icon-person"></span> {{userType($post->user->user_type) }}</a></div>
                                <div><a href="{{ route('post',$post->id) }}"><span class="icon-chat"></span> {{ $post->category->name ?? ' ' }}</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>


</section>
<!-- .section -->



@endsection
