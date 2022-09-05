    <header class="header-main  bg-gray align-items-center">
        <section class="sidebar-header bg-gray">
            <section class="d-flex justify-content-between flex-md-row-reverse px-2">
                <span id="sidebar-toggle-show" class="d-inline d-md-none pointer"><i class="fas fa-toggle-off"></i></span>
                <span id="sidebar-toggle-hide" class="d-none d-md-inline pointer"><i class="fas fa-toggle-on"></i></span>
                <img src="{{ asset('images/logo.png') }}"   class="rounded-circle"  width="150"  height="50" alt="logo"  />
                <span class="d-md-none" id="menu-toggle"><i class="fas fa-ellipsis-h"></i></span>
            </section>
        </section>
        <section class="body-header" id="body-header">
            <section class="d-flex justify-content-between align-items-center">
                <section>
                    <span class="mr-5">
                        <span id="search-area" class="search-area d-none">
                            <i id="search-area-hide" class="fas fa-times pointer"></i>
                            <input id="search-input" type="text" class="search-input">
                            <i class="fas fa-search pointer"></i>
                        </span>
                    <i id="search-toggle" class="fas fa-search p-1 d-none d-md-inline pointer"></i>
                    </span>

                    <span id="full-screen" class="pointer p-1 d-none d-md-inline mr-5">
                        <i id="screen-compress" class="fas fa-compress d-none"></i>
                        <i id="screen-expand" class="fas fa-expand "></i>
                    </span>
                </section>
                <section>

                    <span class="ml-2 ml-md-4 position-relative">
                        <span id="header-notification-toggle" class="pointer"  >
                            <i class="far fa-bell"></i>


`


                    </span>

                </span>
                    <section id="header-notification" class="header-notifictation rounded">
                        <section class="d-flex justify-content-between">
                            <span class="px-2">
                                Notifications
                            </span>
                            <span class="px-2">
                                <span class="badge badge-danger">New</span>
                            </span>
                        </section>

                        <ul class="list-group rounded px-0">


                            <li class="list-group-item list-group-item-action">
                                <section class="media">
                                    <section class="media-body pr-1">
                                        <p class="notification-time"> </p>
                                        <p class="notification-time"></p>

                                    </section>
                                </section>
                            </li>






                        </ul>
                    </section>
                    </span>
                    <span class="ml-2 ml-md-4 position-relative">
                        <span id="header-comment-toggle" class="pointer" >
                            <i class="far fa-comment-alt">

                            </i>

                            <sup class="badge badge-danger" id="badge">


                            </sup>


                        </span>

                    <section id="header-comment" class="header-comment">

                        <section class="border-bottom px-4">
                            <input type="text" class="form-control form-control-sm my-4" placeholder="search ...">
                        </section>

                        <section class="header-comment-wrapper">
                            <ul class="list-group rounded px-0">


                                <li class="list-group-item list-group-item-action">
                                    <section class="media">
                                        <section class="media-body pr-1">
                                            <a class="notification-time"></a>
                                        </section>
                                    </section>
                                </li>



                            </ul>
                        </section>

                    </section>

                    </span>
                    <span class="ml-3 ml-md-5 position-relative">
                        <span id="header-profile-toggle" class="pointer">
                            <img class="header-avatar" src="{{ asset(auth()->user()->avatar) }}" alt="no photo">
                            <span class="header-username">{{ auth()->user()->fullname }}</span>
                    <i class="fas fa-angle-down"></i>
                    </span>
                    <section id="header-profile" class="header-profile rounded">
                        <section class="list-group rounded">
                            <a href="#" class="list-group-item list-group-item-action header-profile-link">
                                <i class="fas fa-cog"></i>Setting
                            </a>
                            <a href="" class="list-group-item list-group-item-action header-profile-link">
                                <i class="fas fa-user"></i>User
                            </a>
                            <a href="" class="list-group-item list-group-item-action header-profile-link">
                                <i class="far fa-envelope"></i>Messages
                            </a>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </section>
                    </section>
                    </span>
                </section>
            </section>
        </section>
    </header>


    @section('script')

    <script type="text/javascript">
        function changeNotification(){

            var url = $('#header-comment-toggle').attr('data-url');

            $.ajax({
                url : url,
                type : "GET",
                success : function(response){
                    if(response.comm){
                        $('#badge').hide();
                    }
/*
 */
                    }
                });
            };


    </script>

@section('script')

<script type="text/javascript">
    function changeNewUser(){

        var url = $('#header-notification-toggle').attr('data-url');

        $.ajax({
            url : url,
            type : "GET",
            success : function(response){
                if(response.comm){
                    $('#badge2').hide();
                }
/*
*/
                }
            });
        };


</script>



@endsection
