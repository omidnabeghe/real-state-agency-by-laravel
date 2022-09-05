<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="direction: rtl;">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Royal<span>estate</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ sidebarShowSelect('','active') }}"><a href="{{ route('home') }}" class="nav-link">HOME</a></li>
                <li class="nav-item {{ sidebarShowSelect('/ads*','active') }}"><a href="{{ route('ads') }}" class="nav-link">Ads</a></li>
                <li class="nav-item {{ sidebarShowSelect('/help','active') }}"><a href="{{ route('help') }}" class="nav-link">About Us </a></li>
                <li class="nav-item {{ sidebarShowSelect('/posts*','active') }}"><a href="{{ route('posts') }}" class="nav-link">Posts</a></li>
                @auth
                <li class="nav-item ml-lg-1 mr-lg-5 ">
                    <form class=" " action="{{ route('logout') }}" method="post">
                        @csrf

                        <button type="submit" class="btn btn-success btn-lg"><span class="icon-user m-2"></span>{{ auth()->user()->fullname }}</button>
                    </form>

                </li>
                @else
                <li class="nav-item cta"><a href="{{ route('login') }}" class="nav-link ml-lg-1 mr-lg-5"><span class="icon-user m-2"></span>Login</a></li>
                <li class="nav-item cta cta-colored"><a href="{{ route('register') }}" class="nav-link"><span class="icon-pencil m-2"></span>Register</a></li>
                @endauth
                <li class="nav-item cta cta-colored"><a href="{{ route('admin.home') }}" class="nav-link"><span class="icon-pencil m-2"></span>Admin</a></li>


            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
