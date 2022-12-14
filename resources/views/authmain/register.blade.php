@extends('authmain.layouts.master')
@section('head-tag')
<title>Register</title>

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
    <section class="row flexbox-container">
        <div class="col-xl-8 col-10 d-flex justify-content-center">
            <div class="card bg-authentication rounded-0 mb-0">
                <div class="row m-0">
                    <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                        <img src="admin-assets/images/pages/register.jpg" alt="branding logo">
                    </div>
                    <div class="col-lg-6 col-12 p-0">
                        <div class="card rounded-0 mb-0 p-2">
                            <div class="card-header pt-50 pb-1">
                                <div class="card-title">
                                    <h4 class="mb-0">Create Account</h4>
                                </div>
                            </div>
                            <p class="px-2">to Create Acount,just Fill Here</p>

                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error )
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>@endif

                            <div class="card-content">
                                <div class="card-body pt-0">
                                    <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-label-group">
                                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Name" required>
                                            <label for="first_name">Name</label>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Family Name" required>
                                            <label for="last_name">Family Name</label>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="file" name="avatar" id="avatar" class="form-control" >
                                            <label for="avatar">Image</label>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                                            <label for="password">Password</label>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="password" name="password_confirmation" id="confirm_password" class="form-control" placeholder="Confirm Password" required>
                                            <label for="confirm_password">Confirm Password</label>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <fieldset class="checkbox">
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked>
                                                        <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                        </span>
                                                        <span class=""> I Accept all Rules</span>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <a href="{{ route('login') }}" class="btn btn-outline-primary float-left btn-inline mb-50">Login</a>
                                        <button type="submit" class="btn btn-primary float-right btn-inline mb-50">Register</button>
                                    </form>
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
<!-- END: Content-->


@endsection
