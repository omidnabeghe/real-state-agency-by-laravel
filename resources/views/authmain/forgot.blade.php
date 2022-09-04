@extends('authmain.layouts.master')
@section('head-tag')
<title>Forgot</title>

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
                    <div class="col-xl-7 col-md-9 col-10 d-flex justify-content-center px-0">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center">
                                    <img src="{{ asset('admin-assets/images/pages/forgot-password.png')}}" alt="branding logo">
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 px-2 py-1">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">Password Recovery</h4>
                                            </div>
                                        </div>
                                        <p class="px-2 mb-0">Please Enter your Email. a link will be sent to your email. this email i validate just for 18 minutes. confirm it.</p>

                                        @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif




                                        <div class="card-content">
                                            <div class="card-body">
                                                <form action="{{ route('password.email') }}" method="post">
                                                    @csrf
                                                    <div class="form-label-group">
                                                        <input name="email" type="email" id="email" class="form-control" placeholder="ایمیل">
                                                        <label for="email">Email</label>
                                                    </div>

                                                    <div class="float-md-left d-block mb-1">
                                                        <a href="{{ route('login') }}" class="btn btn-outline-primary btn-block px-75">Return to Panel</a>
                                                    </div>
                                                    <div class="float-md-right d-block mb-1">
                                                        <button type="submit" class="btn btn-primary btn-block px-75">Password Recovery</button>
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
