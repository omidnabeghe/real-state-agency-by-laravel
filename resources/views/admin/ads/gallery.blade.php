@extends('admin.layouts.master')
@section('head-tag')
<title>Gallery</title>
@endsection

@section('content')



<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">


        <div class="content-header row">

        </div>
        <div class="content-body">

            <!-- Zero configuration table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ads - Gallery</h4>
                                <span><a href="{{ route('admin.ads') }}" class="btn btn-success">Return</a></span>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <form class="row" action="{{ route('admin.ads.gallery.store',$advertise->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <label for="image">Image</label>
                                                <input name="image" type="file" id="image" class="form-control-file ">
                                            </fieldset>
                                        </div>

                                        <div class="col-md-12">
                                            <section class="form-group">
                                                <button type="submit" class="btn btn-primary">Upload Image</button>
                                            </section>
                                        </div>
                                    </form>
                                    <div class="col-md-12 mt-4 pt-4">
                                        <div class="row">
                                            @foreach ($galleries as $gallery)


                                                <div class="col-md-3 text-center">
                                                    <div><img style="width: 100%;" src=" {{ asset($gallery->image['indexArray']['large']) }}" alt=""></div>

                                                    <form class="d-inline" action="{{ route('admin.ads.gallery.destroy', [$gallery->id , $advertise->id]) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger waves-effect waves-light delete">Delete</button>
                                                    </form>
                                                </div>
                                                @endforeach


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        </div>
    </div>
    <!-- END: Content-->

@endsection



@section('script')

@include('admin.alert.delete', ['className' => 'delete'])


@endsection


