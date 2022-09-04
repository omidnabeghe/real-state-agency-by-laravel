@extends('admin.layouts.master')

@section('head-tag')
<title>Comment's SHOW </title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('home') }}"> Home</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.comment') }}"> Admin</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page">  Show Comment</li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
              Show Comment
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.comment') }}" class="btn btn-info btn-sm">Return</a>
            </section>

            <section class="card mb-3">
                <section class="card-header text-white bg-custom-yellow">
                    {{ $comment->user->fullName  }} - {{ $comment->user->id  }}
                </section>
                <section class="card-body">
                    <h5 class="card-title">Post :{{ $comment->parent->comment }} </h5>
                    <p class="card-text">Answert : {{ $comment->comment }}</p>
                </section>
            </section>

        </section>
    </section>
</section>

@endsection
