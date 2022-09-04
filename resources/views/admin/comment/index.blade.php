@extends('admin.layouts.master')

@section('head-tag')
<title>Comments</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-size-12"> <a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item font-size-12"> <a href="{{ route('admin.ads') }}">Slide</a></li>
        <li class="breadcrumb-item font-size-12 active" aria-current="page"> Create Slide</li>
    </ol>
</nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                 Comments
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="#" class="btn btn-info btn-sm disabled">   create Comment </a>
                <div class="max-width-16-rem">
                    <input type="text" class="form-control form-control-sm form-text" placeholder="Search">
                </div>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover ">
                    <thead>
                        <tr >
                            <th>#</th>
                            <th>Comment</th>
                            <th>Answer To</th>
                            <th>Author</th>
                            <th>Confirmation Status</th>
                            <th> Comment Status</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($comments as $key => $comment)
                        <tr>
                            <th>{{ $key + 1 }}</th>
                            <td>{{ Str::limit($comment->comment, 10) }}</td>
                            <td>{{ $comment->parent_id ? Str::limit($comment->parent->comment, 10) : '' }}</td>
                            <td>{{ $comment->user->fullName  }}</td>

                            <td>@if($comment->approved == 1)
                                <p class="text-success">Confirmed</p>
                                @else
                                <p class="text-warning">Wait to Confirm</p>
                            @endif
                        </td>
                            <td>
                                <label>
                                    <input title="i did not define any code for this box, but we can add any function for future use" id="{{ $comment->id }}" onchange="changeStatus({{ $comment->id }})" data-url="{{ route('admin.comment.status', $comment->id) }}" type="checkbox" @if ($comment->status === 1)
                                    checked
                                    @endif>
                                </label>
                            </td>
                            <td class="width-16-rem text-left">
                                <a href="{{ route('admin.comment.show', $comment->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Show</a>

                                @if($comment->approved == 1)
                                <a href="{{ route('admin.comment.approved', $comment->id)}} "class="btn btn-warning btn-sm" type="submit" title="now every body can see this comment"><i class="fa fa-clock"></i> Wait to Confirm</a>
                                @else
                                <a href="{{ route('admin.comment.approved', $comment->id)}}" class="btn btn-success btn-sm text-white" type="submit" title="now nobody can not see this comment"><i class="fa fa-check"></i>Confirmed</a>
                                @endif
                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </section>

        </section>
    </section>
</section>

@endsection

@section('script')

    <script type="text/javascript">
        function changeStatus(id){
            var element = $("#" + id)
            var url = element.attr('data-url')
            var elementValue = !element.prop('checked');

            $.ajax({
                url : url,
                type : "GET",
                success : function(response){
                    if(response.status){
                        if(response.checked){
                            element.prop('checked', true);
                            successToast('Comment Active Succeessfully')
                        }
                        else{
                            element.prop('checked', false);
                            successToast('Comment DeActive Successfully')
                        }
                    }
                    else{
                        element.prop('checked', elementValue);
                        errorToast('Face Error')
                    }
                },
                error : function(){
                    element.prop('checked', elementValue);
                    errorToast('DisConnected')
                }
            });

            function successToast(message){

                var successToastTag = '<section class="toast" data-delay="5000">\n' +
                    '<section class="toast-body py-3 d-flex bg-success text-white">\n' +
                        '<strong class="ml-auto">' + message + '</strong>\n' +
                        '<button type="button" class="mr-2 close" data-dismiss="toast" aria-label="Close">\n' +
                            '<span aria-hidden="true">&times;</span>\n' +
                            '</button>\n' +
                            '</section>\n' +
                            '</section>';

                            $('.toast-wrapper').append(successToastTag);
                            $('.toast').toast('show').delay(5500).queue(function() {
                                $(this).remove();
                            })
            }

            function errorToast(message){

                var errorToastTag = '<section class="toast" data-delay="5000">\n' +
                    '<section class="toast-body py-3 d-flex bg-danger text-white">\n' +
                        '<strong class="ml-auto">' + message + '</strong>\n' +
                        '<button type="button" class="mr-2 close" data-dismiss="toast" aria-label="Close">\n' +
                            '<span aria-hidden="true">&times;</span>\n' +
                            '</button>\n' +
                            '</section>\n' +
                            '</section>';

                            $('.toast-wrapper').append(errorToastTag);
                            $('.toast').toast('show').delay(5500).queue(function() {
                                $(this).remove();
                            })
            }
        }
    </script>


@endsection

