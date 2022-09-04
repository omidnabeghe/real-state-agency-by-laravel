@extends('admin.layouts.master')
@section('head-tag')
<title>User Edit</title>
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
                                <span><a href="{{ route('admin.user') }}" class="btn btn-success">Return</a></span>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <form class="row" action="{{ route('admin.user.update',$user->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <input type="hidden" name="_method" value="put">
                                        <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <label for="first_name">Name</label>
                                                <input name="first_name" type="text" id="first_name"  value="{{ old('first_name',$user->first_name) }}" class="form-control" placeholder="name ...">
                                                @error('first_name')
                                                <span class="alert_required text-danger" role="alert">
                                                    <strong>{{ $message }}</strong></span>
                                                @enderror

                                            </fieldset>
                                        </div>

                                        <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <label for="last_name">family name</label>
                                                <input name="last_name" type="text" id="last_name"  value="{{ old('first_name',$user->last_name) }}" class="form-control" placeholder="last_name ...">
                                                @error('last_name')
                                                <span class="alert_required text-danger" role="alert">
                                                    <strong>{{ $message }}</strong></span>
                                                @enderror

                                            </fieldset>
                                        </div>

                                        <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <label for="avatar">image</label>
                                                <input name="avatar" type="file" id="avatar" class="form-control-file">
                                                @error('avatar')
                                                <span class="alert_required text-danger" role="alert">
                                                    <strong>{{ $message }}</strong></span>
                                                @enderror

                                            </fieldset>
                                        </div>

                                        <div class="col-md-6">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="کلمه عبور" required>
                                            <label for="password">کلمه عبور</label>
                                            @error('password')
                                            <span class="alert_required text-danger" role="alert">
                                                <strong>{{ $message }}</strong></span>
                                            @enderror


                                        </div>
                                        <div class="col-md-6">
                                            <input type="password" name="password_confirmation" id="confirm_password" class="form-control" placeholder="Confirm Password" required>
                                            <label for="confirm_password">تکرار کلمه عبور</label>
                                            @error('password_confirmation')
                                            <span class="alert_required text-danger" role="alert">
                                                <strong>{{ $message }}</strong></span>
                                            @enderror


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


@section('script')
<script src="<?= asset('ckeditor/ckeditor.js') ?> "></script>
<script type="text/javascript">
    CKEDITOR.replace('body')
</script>
@endsection
