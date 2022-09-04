@extends('admin.layouts.master')

@section('head-tag')
<title>Ads</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.home') }}">Home</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.ads') }}">Admin</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> Ads </li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                  Ads
                </h5>
            </section>


            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.ads.create') }}" class="btn btn-info btn-sm">Create Ads</a>
                <div class="max-width-16-rem">
                    <form action="{{ route('search.searchAds') }}" method="GET" class="form-inline mr-auto ml-3">
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
                            <th>body</th>
                            <th>Address</th>
                            <th>Image</th>
                            <th>Specification</th>
                            <th>Tag</th>
                            <th>User</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> Setting</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($ads as $key => $advertise)

                        <tr>
                            <td class="sorting_1">{{ $loop->iteration }}</td>
                            <td>{{ $advertise->title }}</td>
                            <td>{!! briefBody($advertise->description,0,50)  !!}</td>
                            <td>{{ $advertise->address }}</td>
                            <td><img style="width: 90px;" src="{{ asset($advertise->image['indexArray']['small']) }}" alt=""></td>
                            <td>
                                <ul>
                                    <li>floor : {{ $advertise->floor }}</li>
                                    <li>year : {{ $advertise->year }}</li>
                                    <li>storeroom : {{ $advertise->storeroom }}</li>
                                    <li>balcony : {{ $advertise->balcony }}</li>
                                    <li>area : {{ $advertise->area }}</li>
                                    <li>room : {{ $advertise->room }}</li>
                                    <li>toilet :  {{ $advertise->toilet }}</li>
                                    <li>parking : {{ $advertise->parking }}</li>
                                </ul>
                            </td>
                            <td>{{ $advertise->tag }}</td>
                            <td>{{ $advertise->user->fullname }}</td>
                            <td class="width-16-rem text-left">
                                <a href="{{ route('admin.ads.gallery', $advertise->id) }}" class="btn btn-warning waves-effect waves-light">Gallery</a>
                                <a href="{{ route('admin.ads.edit',$advertise->id) }}" class="btn btn-info waves-effect waves-light">edit</a>
                                <form class="d-inline" action="{{ route('admin.ads.destroy',$advertise->id) }}" method="post">
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
            {{ $ads->links('vendor.pagination.bootstrap-4') }}

        </section>

    </section>
</section>

@endsection
@section('script')

    <script type="text/javascript">
        function changeStatus(id){
            var element = $("#" + id)
            var url = element.attr('data-url')
            var elementValue = !element.prop('checked');

            $.ajax({
                url : url,
                type : "GET",
                success : function(response){
                    if(response.status){
                        if(response.checked){
                            element.prop('checked', true);
                            successToast('template Activate Successfully')
                        }
                        else{
                            element.prop('checked', false);
                            successToast('template InActivate Successfully')
                        }
                    }
                    else{
                        element.prop('checked', elementValue);
                        errorToast('ERROR in edit')
                    }
                },
                error : function(){
                    element.prop('checked', elementValue);
                    errorToast('You Are Discounected')
                }
            });

            function successToast(message){

                var successToastTag = '<section class="toast" data-delay="5000">\n' +
                    '<section class="toast-body py-3 d-flex bg-success text-white">\n' +
                        '<strong class="ml-auto">' + message + '</strong>\n' +
                        '<button type="button" class="mr-2 close" data-dismiss="toast" aria-label="Close">\n' +
                            '<span aria-hidden="true">&times;</span>\n' +
                            '</button>\n' +
                            '</section>\n' +
                            '</section>';

                            $('.toast-wrapper').append(successToastTag);
                            $('.toast').toast('show').delay(5500).queue(function() {
                                $(this).remove();
                            })
            }

            function errorToast(message){

                var errorToastTag = '<section class="toast" data-delay="5000">\n' +
                    '<section class="toast-body py-3 d-flex bg-danger text-white">\n' +
                        '<strong class="ml-auto">' + message + '</strong>\n' +
                        '<button type="button" class="mr-2 close" data-dismiss="toast" aria-label="Close">\n' +
                            '<span aria-hidden="true">&times;</span>\n' +
                            '</button>\n' +
                            '</section>\n' +
                            '</section>';

                            $('.toast-wrapper').append(errorToastTag);
                            $('.toast').toast('show').delay(5500).queue(function() {
                                $(this).remove();
                            })
            }
        }
    </script>


@include('admin.alert.delete', ['className' => 'delete'])


@endsection
