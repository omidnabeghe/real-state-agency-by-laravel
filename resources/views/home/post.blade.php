@extends('layouts.master')
@section('head-tag')
<title>Si8ngle post</title>

@endsection

@section('content')

<div class="hero-wrap" style="background-image: url(../{{ myUrlImage($post->image['indexArray']['large']) }}););">
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
            <div class="col-lg-8 ftco-animate">
                <h2 class="mb-3">{{ $post->title}}</h2>
                <p>{!! $post->body !!}</p>
                <p>
                    <img src="../{{ myUrlImage($post->image['indexArray']['large']) }}" alt="" class="img-fluid">
                </p>
                <p>{!! $post->body !!}</p>



                <div class="pt-5 mt-5">
                    <h3 class="mb-5">Comments</h3>
                    <ul class="comment-list">
                        @foreach ($comments as $key => $comment)


                        <li class="comment">
                            <div class="vcard bio">
                                <img src="../{{ $comment->user->avatar['indexArray']['small'] }}" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>{{ $comment->user->fullname }}</h3>
                                <div class="meta">{{ $comment->created_at }}</div>
                                <p>{{ $comment->comment }}</p>
                                @auth

                                <p><button href="" class="reply" onclick="hideForm1({{ $key }})">Answer</button></p>

                                @endauth

                                <form action="{{ route('comment',$post->id) }}" class="d-none" date-id="" id="{{ 'frm-' . $key }}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="comment" class="col-sm-2 col-form-label">Answer</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control " id="comment" placeholder="comment" name="comment" required>
                                        </div>
                                        @error('comment')
                                        <span class="alert_required text-danger" role="alert">
                                            <strong>{{ $message }}</strong></span>
                                        @enderror
                                        <input type="hidden" class=" " value="{{ $post->id }}" name="post_id">
                                        <input type="hidden" class=" " value="{{ $comment->id }}" name="parent_id">


                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>





                            <ul class="children">
                                @foreach ($childComments as $ke => $value)
                                @foreach ($value as $childComment)

                                @if($childComment->parent_id == $comment->id)

                                <li class="comment">
                                    <div class="vcard bio">
                                        <img src="../{{ $childComment->user->avatar['indexArray']['small'] }}" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>{{ $childComment->user->fullname }}</h3>
                                        <div class="meta">{{ $childComment->published_at }}</div>
                                        <p>{{ $childComment->comment }}</p>

                                        <form action="{{ route('comment',$post->id) }}" class="d-none" id="{{ 'fr-'. $ke }}" method="POST">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="comment" class="col-sm-2 col-form-label">Answer</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control " id="comment" placeholder="comment" name="comment" required>
                                                </div>
                                                @error('comment')
                                                <span class="alert_required text-danger" role="alert">
                                                    <strong>{{ $message }}</strong></span>
                                                @enderror
                                                <input type="hidden" class=" " value="{{ $post->id }}" name="post_id">
                                                <input type="hidden" class=" " value="{{ $comment->id }}" name="parent_id">


                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary">send</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    @endif



                                </li>

                                @endforeach

                                @endforeach

                            </ul>
                        </li>

                        @endforeach


                    </ul>
                    <!-- END comment-list -->



                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Comment</h3>
                        @guest
                        <a href="{{ route('login') }}">
                            <h3 class="text-danger">to write comment, you need to login</h3>
                        </a>
                        @endguest
                        @auth

                        <form action="{{ route('comment',$post->id) }}" class="p-5 bg-light" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="message">Comment</label>
                                <textarea name="comment" id="message" cols="30" rows="10" class="form-control"></textarea>
                                @error('comment')
                                <span class="alert_required text-danger" role="alert">
                                    <strong>{{ $message }}</strong></span>
                                @enderror
                                <input type="hidden" class=" " value="{{ $post->id }}" name="post_id">
                                <input type="hidden" class=" " value="" name="parent_id">


                            </div>
                            <div class="form-group">
                                <input type="submit" value="send" class="btn py-3 px-4 btn-primary">
                            </div>

                        </form>
                        @endauth

                    </div>
                </div>


            </div> <!-- .col-md-8 -->
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


<script>
    function hideForm1(key) {
        var id = ('frm-' + key)

        var element = document.getElementById(id);

        element.classList.toggle("d-none");
    }

</script>
