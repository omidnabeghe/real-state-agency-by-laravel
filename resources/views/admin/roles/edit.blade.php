@extends('admin.layouts.master')
@section('head-tag')
<title>Roles Edit</title>
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
                                <h4 class="card-title">Post</h4>
                                <span><a href="{{ route('roles.index') }}" class="btn btn-success">Return</a></span>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <form class="row" action="{{ route('roles.update',$role->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')

                                        <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <label for="name">Name</label>
                                                <input value="{{ old('name',$role->name) }}" name="name" type="text" id="name" class="form-control" placeholder="name ...">
                                                @error('name')
                                                <span class="alert_required text-danger" role="alert">
                                                    <strong>{{ $message }}</strong></span>
                                                @enderror


                                            </fieldset>
                                        </div>






                                        <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <label for="guard_name">Guard</label>
                                                <input value="{{ old('guard_name',$role->guard_name) }}" name="guard_name" type="text" id="guard_name" class="form-control" placeholder="guard_name ...">
                                                @error('guard_name')
                                                <span class="alert_required text-danger" role="alert">
                                                    <strong>{{ $message }}</strong></span>
                                                @enderror


                                            </fieldset>
                                        </div>

                                        <div class="col-md-6">
                                            <section class="form-group">
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                            </section>
                                        </div>
                                    </form>
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


