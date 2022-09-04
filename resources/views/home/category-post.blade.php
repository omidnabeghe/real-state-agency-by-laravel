@extends('layouts.master')
@section('head-tag')
<title>Si8ngle post</title>

@endsection

@section('content')

<div class="hero-wrap" style="background-image: url({{ asset('images/news.jpg') }});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span class="mr-2"><a href="{{ route('posts') }}"></a></span> <span>inner post page</span></p>
                <h1 class="mb-3 bread">post</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ">


            @foreach ($categoryPosts as $categoryPost)
            @if($categoryPost->count() != null)

                <a href="{{route('post',$categoryPost->id)}}" class="block-20" style="background-image: url(../{{ myUrlImage($categoryPost->image['indexArray']['medium']) }});">
                </a>
                <div class="text mt-3 d-block">
                    <h3 class="heading mt-3"><a href="{{route('post',$categoryPost->id)}}">{{ $categoryPost->title }}</a></h3>
                    <div class="meta mb-3">
                        <div><a href="{{route('post',$categoryPost->id)}}">{{ $categoryPost->published_at }}</a></div>
                        <div><a href="{{route('post',$categoryPost->id)}}">{{userType($categoryPost->user->user_type) }}</a></div>
                        <div><a href="{{route('post',$categoryPost->id)}}" class="meta-chat"><span class="icon-chat"></span> {{ $categoryPost->category->name ?? ' ' }}</a></div>
                    </div>
                </div>

                @endif

            @endforeach
        </div>




            <div class="col-lg-4 sidebar ftco-animate">

                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        @foreach ($countPostCat as $key => $value)

                        <li><a href="{{ route('posts.category',$key) }}">{{ $key }} <span>({{ $value->count() }})</span></a></li>
                        @endforeach

                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Last Posts</h3>
                    @foreach ($lastPosts as $post)

                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(../{{ myUrlImage($post->image['indexArray']['medium']) }});"></a>
                        <div class="text">
                            <h3 class="heading"><a href="{{ route('post',$post->id) }}">{{ $post->title }}</a></h3>
                            <div class="meta">
                                <div><a href="{{ route('post',$post->id) }}"><span class="icon-calendar"></span> {{ $post->published_at }}</a></div>
                                <div><a href="{{ route('post',$post->id) }}"><span class="icon-person"></span>  {{userType($post->user->user_type) }}</a></div>
                                <div><a href="{{ route('post',$post->id) }}"><span class="icon-chat"></span> {{ $post->category->name ?? ' ' }}</a></div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>




            </div>
        </div>
</section> <!-- .section -->



@endsection

