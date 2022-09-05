@extends('admin.layouts.master')
@section('head-tag')
<title>Users</title>
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
                                <h4 class="card-title">Users</h4>
                                <span><a href="#" class="btn btn-success disabled">Create</a></span>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <div class="">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Email</th>
                                                    <th >Name</th>
                                                    <th>Fmily Name</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                    <th style="width: 22rem; text-align: left;">Setting</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)


                                                <tr role="row" class="even">
                                                    <td class="sorting_1">{{ $loop->iteration }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->first_name }}</td>
                                                    <td>{{ $user->last_name }}</td>
                                                    <td><img src="{{ asset($user->avatar) }}" style="width:6rem;" alt=""></td>
                                                    <td><span class="@if($user->is_active == 1) text-success @else text-danger @endif">@if($user->is_active == 1) active @else in-active @endif</span></td>

                                                    <td style="width: 18rem; text-align: left;">
                                                        <a href="{{ route('admin.user.userRoleShow',$user->id) }}" class="btn btn-info waves-effect waves-light" title="a role for this user can be written on here. like :writer, editor, dirctor,.. each user only can have 1 role">Role</a>

                                                        <a href="{{ route('admin.user.edit',$user->id) }}" class="btn btn-info waves-effect waves-light" title="you can not delete any user  but some attributes can be edited">Edit</a>
                                                        <a href="{{ route('admin.user.isActive',$user->id) }}" class="btn @if($user->is_active == 0) btn-success @else btn-warning @endif  waves-effect waves-light" title="we can activate each user. ">change user status</a>
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


