@extends('admin.layouts.master')

@section('head-tag')
<title>POSTS</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('home') }}">Home</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.post') }}">Admin</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page">Posts</li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                 Posts
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.post.create') }}" class="btn btn-info btn-sm">Creat Post </a>
                <div class="max-width-16-rem">
                    <form action="{{ route('search.searchPost') }}" method="GET" class="form-inline mr-auto ml-3">
                        <div class="col-8">

                <input type="search" name="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            </div>

                <div class="col-2 mr-3">

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>
                </form>
                </div>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Image</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> Setting</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($posts as $key => $post)


                        <tr>
                            <td class="sorting_1">{{ $loop->iteration }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{!! $post->category->name ?? ' ' !!}</td>
                            <td>{{ $post->user->full_name }}</td>
                            <td><img style="width: 90px;" src="{{ asset($post->image['indexArray']['medium']) }}" alt=""></td>
                            <td style="min-width: 16rem; text-align: center;">
                                <a href="{{ route('admin.post.edit', $post->id) }}" class="btn btn-info waves-effect waves-light">Edit</a>
                                <form class="d-inline" action="{{ route('admin.post.destroy',$post->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger waves-effect waves-light delete">Delete</button>
                                </form>
                            </td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </section>

                {{ $posts->links('vendor.pagination.bootstrap-4') }}


        </section>
    </section>
</section>

@endsection
@section('script')



@include('admin.alert.delete', ['className' => 'delete'])

@endsection
