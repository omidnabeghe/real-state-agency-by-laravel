@extends('authmain.layouts.master')
@section('head-tag')
<title>Login</title>

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
        <div class="col-xl-8 col-11 d-flex justify-content-center">
            <div class="card bg-authentication rounded-0 mb-0">
                <div class="row m-0">
                    <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                        <img src="admin-assets/images/pages/login.png" alt="branding logo">
                    </div>
                    <div class="col-lg-6 col-12 p-0">
                        <div class="card rounded-0 mb-0 px-2">
                            <div class="card-header pb-1">
                                <div class="card-title">
                                    <h4 class="mb-0">Login Panel</h4>
                                </div>
                            </div>
                            <p class="px-2">please enter your information</p>

                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error )
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>@endif



                            <div class="card-content">
                                <div class="card-body pt-1">
                                    <form action="{{ route('login') }}" method="post">
                                        @csrf

                                        <fieldset class="form-label-group form-group position-relative has-icon-left">
                                            <input name="email" type="text" class="form-control" id="email" placeholder="email" required>
                                            <div class="form-control-position">
                                                <i class="feather icon-user"></i>
                                            </div>
                                            <label for="user-name">Email</label>

                                        </fieldset>

                                        <fieldset class="form-label-group position-relative has-icon-left">
                                            <input name="password" type="password" class="form-control" id="user-password" placeholder="password" required>
                                            <div class="form-control-position">
                                                <i class="feather icon-lock"></i>
                                            </div>
                                            <label for="user-password">Password</label>

                                        </fieldset>
                                        <div class="form-group d-flex justify-content-between align-items-center">
                                            <div class="text-left">
                                                <fieldset class="checkbox">
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                        </span>
                                                        <span class="">Remember Me</span>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            @if (Route::has('password.request'))

                                            <div class="text-right"><a href="{{ route('password.request') }}" class="card-link">forgot your password?</a></div>
                                            @endif
                                        </div>
                                        <a href="{{ route('register') }}" class="btn btn-outline-primary float-left btn-inline">Register</a>
                                        <button type="submit" class="btn btn-primary float-right btn-inline">Login</button>
                                    </form>
                                </div>
                            </div>
                            <div class="login-footer">

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




