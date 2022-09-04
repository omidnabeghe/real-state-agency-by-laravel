@extends('admin.layouts.master')

@section('head-tag')
<title> Edit Ads</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('home') }}">Home</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.ads') }}">Ads</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> Edit Ads</li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                  Edit Ads
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.ads') }}" class="btn btn-info btn-sm">Return</a>
            </section>

            <section>
                <form action="{{ route('admin.ads.update',$advertise->id) }}" method="post" enctype="multipart/form-data" id="form">
                    @csrf
                    @method('put')
                    <section class="row">

                        <section class="col-6 col-md-6 my-2">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input  name="title" type="text" id="title" class="form-control " value="{{ old('title',$advertise->title) }}" placeholder="title ...">
                                @error('title')
                                <span class=" text-danger" role="alert">
                                    <strong>{{ $message }}</strong></span>
                                @enderror
                    </section>



                        <section class="col-6 col-md-6 my-2">
                            <label for="address">Address</label>
                            <input  name="address" type="text" id="address" class="form-control " placeholder="address ..." value="{{ old('address',$advertise->address) }}">
                            @error('address')
                            <span class=" text-danger" role="alert">
                                <strong>{{ $message }}</strong></span>
                            @enderror

                        </section>




                        <section class="col-6 col-md-6 my-2">
                            <div class="form-group">
                                <label for="floor">Floor</label>
                                <input name="floor" type="text" id="floor" class="form-control " placeholder="floor ..." value="{{ old('floor',$advertise->floor) }}">
                                @error('floor')
                                <span class=" text-danger" role="alert">
                                    <strong>{{ $message }}</strong></span>
                                @enderror

                         </section>

                        <section class="col-6 col-md-6 my-2">
                            <div class="form-group">
                                <label for="year">Year</label>
                                <input  name="year" type="text" id="year" class="form-control " placeholder="year ..." value="{{ old('year',$advertise->year) }}">
                                @error('year')
                                <span class=" text-danger" role="alert">
                                    <strong>{{ $message }}</strong></span>
                                @enderror

                        </section>

                        <section class="col-6 col-md-6 my-2">
                            <div class="form-group">
                                <label for="amount">Price</label>
                                <input name="amount" type="text" id="amount" class="form-control " placeholder="price ..." value="{{ old('amount',$advertise->amount) }}">
                                @error('amount')
                                <span class=" text-danger" role="alert">
                                    <strong>{{ $message }}</strong></span>
                                @enderror


                        </section>

                        <section class="col-6 col-md-6 my-2">
                            <div class="form-group">
                                <label for="area">Area</label>
                                <input name="area" type="text" id="area" class="form-control " placeholder="area ..." value="{{ old('area',$advertise->area) }}">
                                @error('area')
                                <span class=" text-danger" role="alert">
                                    <strong>{{ $message }}</strong></span>
                                @enderror

                        </section>

                        <section class="col-6 col-md-6 my-2">
                            <div class="form-group">
                                <label for="room">Room</label>
                                <input name="room" type="text" id="room" class="form-control" placeholder="room ..." value="{{ old('room',$advertise->room) }}">
                                @error('room')
                                <span class=" text-danger" role="alert">
                                    <strong>{{ $message }}</strong></span>
                                @enderror
                        </section>


                        <section class="col-6 col-md-6 my-2">
                            <div class="form-group">
                                <label for="tag">Tag</label>
                                <input type="hidden" class="form-control form-control-sm"  name="tag" id="tag" value="{{ old('tag',$advertise->tag) }}">
                                <select class="select2 form-control form-control-sm" id="select_tags" multiple></select>

                                @error('tag')
                                <span class=" text-danger" role="alert">
                                    <strong>{{ $message }}</strong></span>
                                @enderror
                        </section>


                       <section class="col-6 col-md-6 my-2">
                        <div class="form-group">
                            <label for="storeroom">stroeroom</label>
                            <select name="storeroom" class="select2 form-control" >
                                <option value="0" @if(old('storeroom',$advertise->storeroom) == 0) selected
                                @endif>no</option>
                                <option value="1"  @if(old('storeroom',$advertise->storeroom) == 1) selected
                                @endif>ok</option>
                            </select>

                        </div>
                        @error('storeroom')
                        <span class=" text-danger" role="alert">
                            <strong>{{ $message }}</strong></span>
                        @enderror

                   </section>

                       <section class="col-6 col-md-6 my-2">
                        <div class="form-group">
                            <label for="balcony">balcony</label>
                            <select name="balcony" class="select2 form-control ">
                                <option value="0" @if(old('balcony',$advertise->balcony) == 0) selected
                                @endif>no</option>
                                <option value="1"  @if(old('balcony',$advertise->balcony) == 1) selected
                                @endif>ok</option>
                            </select>
                        </div>
                        @error('balcony')
                        <span class=" text-danger" role="alert">
                            <strong>{{ $message }}</strong></span>
                        @enderror


                   </section>

                   <section class="col-6 col-md-6 my-2">
                    <div class="form-group">
                        <label for="toilet">toilet</label>
                        <select name="toilet" class="select2 form-control ">
                            <option value="iran" @if(old('toilet',$advertise->toilet) == 'iran') selected
                            @endif>iran</option>
                            <option value="europe" @if(old('toilet',$advertise->toilet) == 'europe') selected
                            @endif>europe</option>
                            <option value="both" @if(old('toilet',$advertise->toilet) == 'both') selected
                            @endif>both</option>
                        </select>
                    </div>
                    @error('toilet')
                    <span class=" text-danger" role="alert">
                        <strong>{{ $message }}</strong></span>
                    @enderror


               </section>

               <section class="col-6 col-md-6 my-2">
                <div class="form-group">
                    <label for="sell_status">Sell Status</label>
                    <select name="sell_status" class="select2 form-control">
                        <option value="0" @if(old('sell_status',$advertise->sell_status) == 0) selected
                        @endif>Buy</option>
                        <option value="1" @if(old('sell_status',$advertise->sell_status) == 1 ) selected
                        @endif>Rent</option>
                    </select>
                </div>
                @error('sell_status')
                <span class=" text-danger" role="alert">
                    <strong>{{ $message }}</strong></span>
                @enderror


           </section>


               <section class="col-6 col-md-6 my-2">
                <div class="form-group">
                    <label for="type">Type</label>
                    <select name="type" class="select2 form-control">
                        <option value="0" @if(old('type',$advertise->type) == 0 ) selected
                        @endif>apartment</option>
                        <option value="1" @if(old('type',$advertise->type) == 1 ) selected
                        @endif>vila</option>
                        <option value="2" @if(old('type',$advertise->type) == 2 ) selected
                        @endif>farm</option>
                        <option value="3" @if(old('type',$advertise->type) == 3 ) selected
                        @endif>sooleh</option>
                    </select>
                </div>
                @error('type')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong></span>
                @enderror

           </section>

           <section class="col-6 col-md-6 my-2">
            <div class="form-group">
                <label for="parking">parking</label>
                <select name="parking" class="select2 form-control">
                    <option value="0" @if(old('balcony',$advertise->parking) == 0) selected
                    @endif>no</option>
                    <option value="1"  @if(old('balcony',$advertise->parking) == 1) selected
                    @endif>ok</option>
                </select>
            </div>
            @error('balcony')
            <span class=" text-danger" role="alert">
                <strong>{{ $message }}</strong></span>
            @enderror


       </section>

       <section class="col-6 col-md-6 my-2">
        <div class="form-group">
            <label for="cat_id">category</label>
            <select name="cat_id" class="select2 form-control">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" @if(old('cat_id',$category->id) == $advertise->cat_id) selected @endif >{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        @error('cat_id')
        <span class=" text-danger" role="alert">
            <strong>{{ $message }}</strong></span>
        @enderror



   </section>

   <section class="col-6 col-md-6 my-2">
    <div class="form-group">
        <label for="status">status</label>
        <select name="status" id="" class="form-control " id="status">
            <option value="0" @if(old('status',$advertise->status) == 0) selected @endif>inactive</option>
            <option value="1" @if(old('status',$advertise->status) == 1) selected @endif>active</option>
        </select>
    </div>
    @error('status')
    <span class=" text-danger" role="alert">
        <strong>{{ $message }}</strong></span>
    @enderror



</section>

<section class="col-6 col-md-6 my-2">
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control " id="description" rows="5" name="description" placeholder="text ..." >{{  old('description',$advertise->description) }}</textarea>
        @error('description')
        <span class=" text-danger" role="alert">
            <strong>{{ $message }}</strong></span>
        @enderror

</section>


           <section class="col-5 col-md-6 my-2">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input name="image" type="file" id="image" class="form-control-file " >
                                @error('image')
                                <span class=" text-danger" role="alert">
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
<script src="<?= asset('ckeditor/ckeditor.js') ?> "></script>
<script type="text/javascript">
    CKEDITOR.replace('description')
</script>
<script>
    $(document).ready(function () {
        var tags_input = $('#tag');
        var select_tags = $('#select_tags');
        var default_tags = tags_input.val();
        var default_data = null;

        if(tags_input.val() !== null && tags_input.val().length > 0)
        {
            default_data = default_tags.split(',');
        }

        select_tags.select2({
            placeholder : 'please write your tags',
            tags: true,
            data: default_data
        });
        select_tags.children('option').attr('selected', true).trigger('change');


        $('#form').submit(function ( event ){
            if(select_tags.val() !== null && select_tags.val().length > 0){
                var selectedSource = select_tags.val().join(',');
                tags_input.val(selectedSource)
            }
        })
    })
</script>

@endsection
