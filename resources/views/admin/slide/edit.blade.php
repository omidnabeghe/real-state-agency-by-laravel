@extends('admin.layouts.master')

@section('head-tag')
    <title>Edit Slide</title>
@endsection

@section('content')


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"> <a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.ads') }}">Slide</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> Edit Slide</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        Edit Slide
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.category') }}" class="btn btn-info btn-sm">Return</a>
                </section>

                <section>
                    <form action="{{ route('admin.slide.update', $slide->id) }}" method="post"
                        enctype="multipart/form-data" id="form">
                        @csrf
                        {{ method_field('put') }}
                        <section class="row">

                            <section class="col-12 col-md-6 my-2">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input value="{{ old('title',$slide->title) }}" name="title" type="text" id="title" class="form-control" placeholder="title ...">
                                    @error('title')
                                    <span class=" text-danger" role="alert">
                                        <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </section>

                            <section class="col-12 col-md-6 my-2">
                                <div class="form-group">
                                    <label for="url">Link</label>
                                    <input value="{{ old('url',$slide->url) }}" name="url" type="text" id="url" class="form-control" placeholder="link ...">
                                    @error('url')
                                    <span class=" text-danger" role="alert">
                                        <strong>{{ $message }}</strong></span>
                                    @enderror
                               </div>
                            </section>

                            <section class="col-12 col-md-6 my-2">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input value="{{ old('address',$slide->address) }}" name="address" type="text" id="address" class="form-control" placeholder="address ...">
                                    @error('address')
                                    <span class=" text-danger" role="alert">
                                        <strong>{{ $message }}</strong></span>
                                    @enderror
                               </div>
                            </section>


                            <section class="col-12 col-md-6 my-2">
                                <div class="form-group">
                                    <label for="amount">Price</label>
                                    <input value="{{ old('amount',$slide->amount) }}" name="amount" type="text" id="amount" class="form-control" placeholder="amount ...">
                                    @error('amount')
                                    <span class=" text-danger" role="alert">
                                        <strong>{{ $message }}</strong></span>
                                    @enderror

                              </div>
                            </section>


                            <section class="col-12 col-md-6 my-2">
                                <div class="form-group">
                                    <label for="body">Body</label>
                                    <textarea class="form-control" id="body" rows="5" name="body" placeholder="text ...">{{ old('body',$slide->body) }}</textarea>
                                </section>
                                @error('body')
                                <span class=" text-danger" role="alert">
                                    <strong>{{ $message }}</strong></span>
                                @enderror

                              </div>
                            </section>

                            <section class="col-12 col-md-6 my-2">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input name="image" type="file" id="image" class="form-control-file ">
                                    @error('image')
                                    <span class=" text-danger" role="alert">
                                        <strong>{{ $message }}</strong></span>
                                    @enderror

                              </div>
                            </section>

                            <section class="col-12 my-3">
                                <button class="btn btn-primary btn-sm">Submit</button>
                            </section>
                        </section>
                    </form>
                </section>

            </section>
        </section>
    </section>

@endsection

@section('script')

    <script src="{{ asset('admin-assets/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
    <script>
        $(document).ready(function() {
            var tags_input = $('#tags');
            var select_tags = $('#select_tags');
            var default_tags = tags_input.val();
            var default_data = null;

            if (tags_input.val() !== null && tags_input.val().length > 0) {
                default_data = default_tags.split(',');
            }

            select_tags.select2({
                placeholder: 'please enter tags here',
                tags: true,
                data: default_data
            });
            select_tags.children('option').attr('selected', true).trigger('change');


            $('#form').submit(function(event) {
                if (select_tags.val() !== null && select_tags.val().length > 0) {
                    var selectedSource = select_tags.val().join(',');
                    tags_input.val(selectedSource)
                }
            })
        })
    </script>

@endsection
