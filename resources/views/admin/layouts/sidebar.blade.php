<aside id="sidebar" class="sidebar">
    <section class="sidebar-container">
        <section class="sidebar-wrapper">

            <a href="{{ route('home') }}" class="sidebar-link">
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>




            <section class="sidebar-part-title">Admin</section>
            <a href="{{ route('admin.home') }}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>Home</span>
            </a>
            <a href="{{ route('admin.category') }}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>Category</span>
            </a>

            <a href="{{ route('admin.post') }}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>Posts</span>
            </a>


            <a href="{{ route('admin.ads') }}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>Ads</span>
            </a>

            <a href="{{ route('admin.slide') }}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>SlideShow</span>
            </a>

            <a href="{{ route('admin.comment') }}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>Comments</span>
            </a>

            <a href="{{ route('roles.index') }}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>Roles</span>
            </a>

            <a href="{{ route('admin.user') }}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>Users</span>
            </a>




        </section>
    </section>
</aside>
