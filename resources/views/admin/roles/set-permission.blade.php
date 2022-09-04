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
                                <span><a href="{{ route('roles.index') }}" class="btn btn-success">Return</a></span>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <form class="row" action="{{ route('admin.roles.setRelations',$role->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')

                                        <div class="col-md-12">
                                            <fieldset class="form-group">
                                                <label for="name">Name</label>
                                                <input value="{{ old('name',$role->name) }}" name="name" type="text" id="name" class="form-control" placeholder="name ...">
                                                @error('name')
                                                <span class="alert_required text-danger" role="alert">
                                                    <strong>{{ $message }}</strong></span>
                                                @enderror


                                            </fieldset>
                                        </div>



                                        @php
                                        $rolePermissionsArray = $role->permissions->pluck('id')->toArray();
                                    @endphp
                                    @foreach ($permissions as $key => $permission)




                                        <section class="col-md-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="permissions[]" value="{{ $permission->id }}" id="{{ $permission->id }}" @if(in_array($permission->id, $rolePermissionsArray)) checked @endif/>
                                                <label for="{{ $permission->id }}" class="form-check-label mr-3 mt-1">{{ $permission->name }}</label>
                                            </div>
                                            <div class="mt-2">
                                                @error('permissions.' . $key)
                                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                    <strong>
                                                        {{ $message }}
                                                    </strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </section>
                                        @endforeach

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


