@extends('layouts.master')
@section('head-tag')
<title>All POSTS</title>

@endsection

@section('content')

<div class="hero-wrap" style="background-image: url('{{ asset('images/news.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>Post</span></p>
                <h1 class="mb-3 bread">Posts</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)

            <div class="col-md-3 d-flex ftco-animate">

                <div class="blog-entry align-self-stretch">
                    <a href="{{route('post',$post->id)}}" class="block-20" style="background-image: url({{ myUrlImage($post->image['indexArray']['medium']) }});">
                    </a>
                    <div class="text mt-3 d-block">
                        <h3 class="heading mt-3"><a href="{{route('post',$post->id)}}">{{ $post->title }}</a></h3>
                        <div class="meta mb-3">
                            <div><a href="{{route('post',$post->id)}}">{{ $post->published_at }}</a></div>
                            <div><a href="{{route('post',$post->id)}}">{{userType($post->user->user_type) }}</a></div>
                            <div><a href="{{route('post',$post->id)}}" class="meta-chat"><span class="icon-chat"></span> {{ $post->category->name ?? ' ' }}</a></div>
                        </div>
                    </div>
                </div>
             </div>
            @endforeach

    </div>
    {{ $posts->links('vendor.pagination.mvc-pagination') }}

</section>


@endsection
