<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-3">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('personal.main.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-house-user"></i>
                        <p>Главная</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('main.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-blog"></i>
                        <p>Блог</p>
                    </a>
                </li>
                @can('view', auth()->user())
                <li class="nav-item">
                    <a href="{{ route('admin.main.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>Админ</p>
                    </a>
                </li>
                @endcan
                <li class="nav-item">
                    <a href="{{ route('personal.post.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-clipboard"></i>
                        <p>Мои посты</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('personal.liked.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-heart"></i>
                        <p>Понравившиеся посты</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('personal.comment.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-comment"></i>
                        <p>Мои комментарии</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>
