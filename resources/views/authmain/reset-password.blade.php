@extends('authmain.layouts.master')
@section('head-tag')
<title>Reset Password</title>

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
        <div class="col-xl-7 col-10 d-flex justify-content-center">
            <div class="card bg-authentication rounded-0 mb-0 w-100">
                <div class="row m-0">
                    <div class="col-lg-6 d-lg-block d-none text-center align-self-center p-0">
                        <img src="admin-assets/images/pages/reset-password.png" alt="branding logo">
                    </div>
                    <div class="col-lg-6 col-12 p-0">
                        <div class="card rounded-0 mb-0 px-2">
                            <div class="card-header pb-1">
                                <div class="card-title">
                                    <h4 class="mb-0">Change Password</h4>
                                </div>
                            </div>
                            <p class="px-2">Please Enter your Password</p>

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
                                    <form action="{{ route('password.update') }}" method="post">
                                        @csrf

                                        <input type="hidden" name="token" value="{{ $token }}">


                                        <fieldset class="form-label-group">
                                            <input name="email" type="email" class="form-control" id="email" placeholder="email" required>
                                            <label for="email">Email</label>
                                        </fieldset>


                                        <fieldset class="form-label-group">
                                            <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
                                            <label for="password">Password</label>
                                        </fieldset>

                                        <fieldset class="form-label-group">
                                            <input name="password_confirmation" type="password" class="form-control" id="password-confirm" placeholder="password-confirm" required>
                                            <label for="password-confirm">Confirm Password</label>
                                        </fieldset>
                                        <div class="row pt-2">
                                            <div class="col-12 col-md-6 mb-1">
                                                <a href="{{ route('login') }}" class="btn btn-outline-primary btn-block px-0">بازگشت به پنل ورود</a>
                                            </div>
                                            <div class="col-12 col-md-6 mb-1">
                                                <button type="submit" class="btn btn-primary btn-block px-0">ثبت کلمه عبور جدید</button>
                                            </div>
                                        </div>
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
