@extends('admin.layouts.master')
@section('head-tag')
<title>Set Permissions For Role</title>
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
                                <span><a href="{{ route('admin.user') }}" class="btn btn-success">Return</a></span>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <form class="row" action="{{ route('admin.user.userRole',$user->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')

                                        <div class="col-md-12">
                                            <fieldset class="form-group">
                                                <label for="first_name">Name</label>
                                                <input value="{{ old('first_name',$user->first_name) }}" name="first_name" type="text" id="name" class="form-control" placeholder="name ...">
                                                @error('first_name')
                                                <span class="alert_required text-danger" role="alert">
                                                    <strong>{{ $message }}</strong></span>
                                                @enderror


                                            </fieldset>
                                        </div>



                                        @php
                                        $roleUser = $user->roles->pluck('id')->toArray();

                                    @endphp

                                    <div class="col-md-12">
                                        <fieldset class="form-group">
                                            <div class="form-group">
                                                <label for="role_id">Roles</label>
                                                <select name="role_id" class="select2 form-control ">
                                                    <option value=""  > select nothing</option>
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role->id }}" @if(old('role_id',$role->id) == ($roleUser != null) ? $roleUser[0] : ''  ) selected @endif >{{ $role->name }}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            @error('role_id')
                                            <span class="alert_required text-danger" role="alert">
                                                <strong>{{ $message }}</strong></span>
                                            @enderror


                                        </fieldset>
                                    </div>


                                        <div class="col-md-6">
                                            <section class="form-group">
                                                <button type="submit" class="btn btn-primary">Create</button>
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


