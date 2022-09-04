@extends('admin.layouts.master')

@section('head-tag')
<title> Edit Post</title>
<link rel="stylesheet" href="{{ asset('admin-assets/jalalidatepicker/persian-datepicker.min.css') }}">
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('home') }}">Home</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.home') }}">Admin</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.post') }}">Post</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> Edit Post</li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                  Edit Post
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.post') }}" class="btn btn-info btn-sm">Return</a>
            </section>

            <section>
                <form action="{{ route('admin.post.update',$post->id) }}" method="POST" enctype="multipart/form-data" id="form">
                    @csrf
                    @method('put')
                    <section class="row">

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input value="{{ old('title',$post->title) }}" name="title" type="text" id="title" class="form-control" placeholder="name ...">
                            </div>

                            @error('title')
                            <span class=" text-danger" role="alert">
                                <strong>{{ $message }}</strong></span>
                            @enderror

                        </section>


                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="published_at">Published date</label>
                                <input type="date" value="{{ old('published_at',$post->published_at) }}" name="published_at"  id="published_at" class="form-control ">
                            </div>
                                @error('published_at')
                                <span class=" text-danger" role="alert">
                                    <strong>{{ $message }}</strong></span>
                                @enderror
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <fieldset class="form-group">
                                    <label for="image">Image</label>
                                    <input name="image" type="file" id="image" class="form-control-file ">
                                    @error('image')
                                    <span class=" text-danger" role="alert">
                                        <strong>{{ $message }}</strong></span>
                                    @enderror
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="cat_id">Category</label>
                                <select name="cat_id" class="select2 form-control ">

                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @if(old('cat_id',$post->cat_id) == $category->id) selected @endif >{{ $category->name }}</option>
                                        @endforeach
                                </select>
                            </div>
                            @error('cat_id')
                            <span class=" text-danger" role="alert">
                                <strong>{{ $message }}</strong></span>
                            @enderror

                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="body">Body</label>
                                <textarea class="form-control" id="body" rows="5" name="body" placeholder="text ...">{{ old('body',$post->body) }}</textarea>
                                @error('body')
                                <span class=" text-danger" role="alert">
                                    <strong>{{ $message }}</strong></span>
                                @enderror
                        </section>




                        <section class="col-12">
                            <button class="btn btn-primary btn-sm">Submit</button>
                        </section>
                    </section>
                </form>
            </section>

        </section>
    </section>
</section>

@endsection

@section('script')

    <script src="{{ asset('admin-assets/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('body');

    </script>



@endsection
