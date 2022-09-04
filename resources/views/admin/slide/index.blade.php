@extends('admin.layouts.master')

@section('head-tag')
<title>Slide</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{  route('home')  }}">Home</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.slide') }}">Admin</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> Slide </li>
    </ol>
  </nav>

  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                  Slide
                </h5>
            </section>


            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.slide.create') }}" class="btn btn-info btn-sm">Create Slide</a>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Link</th>
                            <th>Address</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> Setting</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($slides as $key => $slide)

                        <tr>
                            <td class="sorting_1">{{ $loop->iteration }}</td>
                            <td>{{ $slide->title }}</td>
                            <td>{{ $slide->url }}</td>
                            <td>{{ $slide->address }}</td>
                            <td>{{ $slide->amount }} $</td>
                            <td><img style="width: 90px;" src="{{ asset($slide->image['indexArray']['medium']) }}" alt=""></td>
                            <td style="min-width: 16rem; text-align: center;">
                                <a href="{{ route('admin.slide.edit',$slide->id) }}" class="btn btn-info waves-effect waves-light">Edit</a>
                                <form class="d-inline" action="{{ route('admin.slide.destroy',$slide->id) }}" method="post">
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

        </section>
    </section>
</section>

@endsection

@section('script')



@include('admin.alert.delete', ['className' => 'delete'])


@endsection
