@extends('layouts.master')
@section('head-tag')
<title>All Ads</title>

@endsection

@section('content')
<div class="hero-wrap" style="background-image: url({{ asset('images/properties-2.jpg') }})">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}l">Home</a></span> <span> Ads</span></p>
                <h1 class="mb-3 bread">Ads</h1>
            </div>
        </div>
    </div>
</div>



<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            @foreach ($ads as $advertise)

            <div class="col-md-4 ftco-animate">
                <div class="properties">
                    <a href="{{ route('advertise', $advertise->id) }}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ myUrlImage($advertise->image['indexArray']['medium']) }});">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <span class="status sale">{{ sellStatus($advertise->sell_status) }}</span>
                        <div class="d-flex">
                            <div class="one">
                                <h3><a href="{{ route('advertise', $advertise->id) }}">{{ $advertise->address }}</a></h3>
                                <p>>{{ type($advertise->type) }}</p>
                            </div>
                            <div class="two">
                                <span class="price">{{ $advertise->amount }}</span>
                            </div>
                        </div>
                        <p>{{ $advertise->body }}</p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="flaticon-selection"></i>{{ $advertise->area }}</span>
                            <span class="ml-auto"><i class="flaticon-bathtub"></i> {{ $advertise->room }}</span>
                            <span><i class="flaticon-bed"></i> {{ $advertise->toilet }}</span>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $ads->links('vendor.pagination.mvc-pagination') }}

    </div>
</section>

@endsection
