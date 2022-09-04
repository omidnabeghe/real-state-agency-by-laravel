@extends('admin.layouts.master')
@section('head-tag')
<title>Roles</title>
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
                                    <h4 class="card-title">Roles</h4>
                                    <span><a href="{{ route('roles.create') }}" class="btn btn-success" title="any roles can define here, like: writer , auditor,.." >Create Roles</a></span>
                                    <span><a href="{{ route('permissions.index') }}" class="btn btn-success" title="any permission can define here, like: delete , edit, update,.." > Permissions</a></span>

                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">

                                        <div class="">
                                            <table class="table zero-configuration">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Guard_name</th>
                                                    <th style="min-width: 16rem; text-align: left;">Setting</th>


                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($roles as $role)

                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">{{ $loop->iteration }}</td>
                                                        <td>{{ $role->name }}</td>
                                                        <td>{!! $role->guard_name !!}</td>
                                                        <td class="text-right ">
                                                            <a href="{{ route('admin.roles.showRelations',$role->id) }}" class="btn btn-success btn-sm"><i class="fa fa-user-graduate"></i>Assign permissins to Roles</a>
                                                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                                            <form class="d-inline" action="{{ route('roles.destroy', $role->id) }}" method="post">
                                                                @csrf
                                                                {{ method_field('delete') }}
                                                            <button class="btn btn-danger btn-sm delete" type="submit"><i class="fa fa-trash-alt"></i> Delete</button>
                                                        </form>
                                                      </td>
                                                                                </tr>
                                                    @endforeach


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Zero configuration table -->
            </div>



        </div>
    </div>
    <!-- END: Content-->

@endsection



@section('script')

@include('admin.alert.delete', ['className' => 'delete'])


@endsection


