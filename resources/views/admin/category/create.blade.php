@extends('admin.layouts.master')

@section('head-tag')
<title> Category</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#">Home</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">Category</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> Create Category</li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                  Create Category
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.category') }}" class="btn btn-info btn-sm">Return</a>
            </section>

            <section>
                <form action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data" id="form">
                    @csrf
                    <section class="row">

                        <section class="col-12 col-md-6 my-2">
                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input type="text" class="form-control form-control-sm" value="{{ old('name') }}" name="name" type="text" id="helperText" class="form-control" placeholder="name ...">
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

                                    <option value="">Select If Exists</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"  @if(old('parent_id') == $category->id) selected @endif>{{ $category->name }}</option>
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

