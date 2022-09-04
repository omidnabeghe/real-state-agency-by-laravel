@extends('admin.layouts.master')

@section('head-tag')
    <title>Edit Category</title>
@endsection

@section('content')


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"> <a href="#">Home</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">Category</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> Edit Category</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        Edit Category
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.category') }}" class="btn btn-info btn-sm">Return</a>
                </section>

                <section>
                    <form action="{{ route('admin.category.update', $category->id) }}" method="post"
                        enctype="multipart/form-data" id="form">
                        @csrf
                        {{ method_field('put') }}
                        <section class="row">

                            <section class="col-12 col-md-6 my-2">
                                <div class="form-group">
                                    <label for="name">Category Name</label>
                                    <input value="{{ old('name', $category->name) }}" name="name" type="text" id="name" class="form-control" placeholder="name ..." >
                                </div>
                                @error('name')
                                    <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>

                            <section class="col-12 col-md-6 my-2">
                                <div class="form-group">
                                    <label for="helperText">Parent</label>
                                    <select name="parent_id" class="select2 form-control">
                                        <option value="">main menu</option>

                                        @foreach ($categories as $categoryElement)

                                        <option value="{{ $categoryElement->id  }}" @if(old('parent_id', $category->parent_id) == $categoryElement->id) selected

                                        @endif >{{ $categoryElement->name }}</option>

                                        @endforeach

                                    </select>
                                </div>
                                @error('parent_id')
                                <span class="alert_required text-danger" role="alert">
                                    <strong>{{ $message }}</strong></span>
                                @enderror
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
