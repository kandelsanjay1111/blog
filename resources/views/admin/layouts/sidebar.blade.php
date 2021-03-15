<aside class="main-sidebar sidebar-dark-primary elevation-4">
  
<!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{route('admin')}}" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{route('admin')}}" class="nav-link {{(request()->is('admin/home'))?'active':''}}">
                  <i class="far fa-user nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="{{route('post.index')}}" class="nav-link {{(request()->is('admin/post'))?'active':''}}">
                  <i class="far fa-paper-plane nav-icon"></i>
                  <p>Posts</p>
                </a>
              </li>
              @can('posts.category',Auth::user())
              <li class="nav-item">
                <a href="{{route('category.index')}}" class="nav-link {{(request()->is('admin/category'))?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
              @endcan
              @can('posts.tag',Auth::user())
              <li class="nav-item">
                <a href="{{route('tag.index')}}" class="nav-link {{(request()->is('admin/tag'))?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tags</p>
                </a>
              </li>
              @endcan
              <li class="nav-item">
                <a href="{{route('user.index')}}" class="nav-link {{(request()->is('admin/user'))?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('role.index')}}" class="nav-link {{(request()->is('admin/role'))?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('page.index')}}" class="nav-link {{(request()->is('admin/page'))?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pages</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('admin.logout')}}" class="nav-link">
                  <i class="fas fa-power-off nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>