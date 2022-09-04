@extends('layouts.master')
@section('headtag')
<title>Royal Estate</title>

@endsection

@section('content')
<section class="home-slider owl-carousel">
    @foreach ($slides as $slide)

    <div class="slider-item" style="background-image:url({{ myUrlImage($slide->image['indexArray']['large']) }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-md-end align-items-center justify-content-end">
                <div class="col-md-6 text p-4 ftco-animate" style="direction: rtl;">
                    <h1 class="mb-3">{{ $slide->tilte }}</h1>
                    <span class="location d-block mb-3"><i class="icon-my_location"></i> {{ $slide->address }}</span>
                    <p>{{ $slide->body }}</p>
                    <span class="price">{{ $slide->amount .'$' }}</span>
                    <a href="{{ $slide->url }}" class="btn-custom p-3 px-4 bg-primary">{{ $slide->url }}<span class="icon-plus mr-1"></span></a>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</section>

<section class="ftco-search">
    <div class="container">
        <div class="row">
            <div class="col-md-12 search-wrap">
                <h2 class="heading h5 d-flex align-items-center pr-4"><span class="ion-ios-search mr-3"></span>Search</h2>
                <form action="#" method="GET" class="search-property">

                    <div class="row">
                        <div class="col-md align-items-end">
                            <div class="form-group">
                                <label for="#">Ads Title</label>
                                <div class="form-field">
                                    <div class="icon"><span class="icon-pencil "></span></div>
                                    <select class="form-control text-right"  onchange="location = this.value;" aria-label=".form-select-lg example">
                                        <option selected >Search</option>
                                        <option value="http://localhost:8000/posts">http://localhost:8000/posts</option>
                                        <option value="http://localhost:8000/ads">http://localhost:8000/ads</option>
                                      </select>
                
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md align-self-end">
                            <div class="form-group">
                                <div class="form-field">
                                    <input type="submit" value="search" class="form-control btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>


<section class="ftco-section bg-light">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services py-4 d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon"><span class="flaticon-pin"></span></div>
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">find house every where </h3>
                        <p>find house anywhere inside your country</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services py-4 d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon"><span class="flaticon-detective"></span></div>
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">active agents</h3>
                        <p>active agents all around the country</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-sel Searchf-stretch ftco-animate">
                <div class="media block-6 services py-4 d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon"><span class="flaticon-house"></span></div>
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">sell or rent</h3>
                        <p>sepoarate group for salble or rentable</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services py-4 d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon"><span class="flaticon-purse"></span></div>
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">profit both sides</h3>
                        <p>profit for customer and seller</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-properties">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">LAST POSTS</span>
                <h2 class="mb-4">LAST ADS</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="properties-slider owl-carousel ftco-animate">
                    @foreach ($lastAds as $advertise)

                    <div class="item">
                        <div class="properties">
                            <a href="{{ route('advertise',$advertise->id) }}" class="img d-flex justify-content-center align-items-center" style="background-image: url({{ myUrlImage($advertise->image['indexArray']['medium']) }});">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <span class="status sale">{{ sellStatus($advertise->sell_status) }}</span>
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="{{ route('advertise',$advertise->id) }}">{{ $advertise->address }}</a></h3>
                                        <p>{{ type($advertise->type) }}</p>
                                    </div>
                                    <div class="two">
                                        <span class="price">{{ $advertise->amount }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Special Offers</span>
                <h2 class="mb-4">Best Ads</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            @foreach ($specialOffers as $specialOffer)

            <div class="col-sm col-md-6 col-lg ftco-animate">
                <div class="properties">
                    <a href="{{ route('advertise',$advertise->id) }}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ myUrlImage($specialOffer->image['indexArray']['medium']) }});">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <span class="status sale">{{ sellStatus($specialOffer->sell_status) }}</span>
                        <div class="d-flex">
                            <div class="one">
                                <h3><a href="{{ route('advertise',$advertise->id) }}">{{ $specialOffer->address }}</a></h3>
                                <p>{{ type($specialOffer->type) }}</p>
                            </div>
                            <div class="two">
                                <span class="price">{{ $specialOffer->amount }}</span>
                            </div>
                        </div>
                        <p>{{ $specialOffer->body }}</p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="flaticon-selection mx-1"></i>{{ $specialOffer->area }}</span>
                            <span class="ml-auto"><i class="flaticon-bathtub"></i> {{ $specialOffer->toilet }}</span>
                            <span><i class="flaticon-bed"></i> {{ $specialOffer->room }}</span>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <h2 class="mb-4">برخی اطلاعات جالب</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="9000">0</strong>
                                <span>happy customers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">

                                !@empty($posts)
                                    
                                <strong class="number" data-number="{{ $posts }}">{{ $posts }}</strong>
                                @endempty
                                    

                                <span>Posts</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="1000">0</strong>
                                <span>Agents</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                !@empty($sumArea)
                                <strong class="number" data-number="{{ $sumArea }}">{{ $sumArea }}</strong>
                                @endempty

                                <span>Sum Area </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Articles</span>
                <h2>Last Posts</h2>
            </div>
        </div>
        <div class="row d-flex">
            @foreach ($lastPosts as $post)

            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="{{ route('post',$post->id) }}" class="block-20" style="background-image: url({{ myUrlImage($post->image['indexArray']['medium']) }});">
                    </a>
                    <div class="text mt-3 d-block">
                        <h3 class="heading mt-3"><a href="{{ route('post',$post->id) }}">{{ $post->title }}</a></h3>
                        <div class="meta mb-3">
                            <div><a href="{{ route('post',$post->id) }}">{{ $post->published_at }}</a></div>
                            <div><a href="{{ route('post',$post->id) }}">{{userType($post->user->user_type) }}</a></div>
                            <div><a href="{{ route('post',$post->id) }}" class="meta-chat"><span class="icon-chat"></span> {{ $post->category->name ?? ' ' }}</a></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection
