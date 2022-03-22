<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{route('admin')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Media Manager
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('file-manager')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Media Manager</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
            Shop
        </div>

     <!-- Users -->
     <li class="nav-item">
        <a class="nav-link" href="{{route('users.index')}}">
            <i class="fas fa-users"></i>
            <span>Users</span></a>
    </li>
    <!-- Categories -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('category.index')}}">
          <i class="fas fa-table"></i>
          <span>Categories</span></a>
    </li>
    {{-- Products --}}
    <li class="nav-item">
      <a class="nav-link" href="{{route('product.index')}}">
          <i class="fas fa-table"></i>
          <span>Products</span></a>
    </li>

    {{-- Brands --}}
    <li class="nav-item">
      <a class="nav-link" href="{{route('brand.index')}}">
          <i class="fas fa-table"></i>
          <span>Brands</span></a>
    </li>

    {{-- Shippings --}}
    <li class="nav-item">
      <a class="nav-link" href="{{route('shipping.index')}}">
          <i class="fas fa-table"></i>
          <span>Shippings</span></a>
    </li>

    <!--Orders -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('order.index')}}">
            <i class="fas fa-hammer fa-chart-area"></i>
            <span>Orders</span>
        </a>
    </li>

    <!-- Reviews -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('review.index')}}">
            <i class="fas fa-comments"></i>
            <span>Reviews</span></a>
    </li>

    <!-- Coupons -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('coupon.index')}}">
          <i class="fas fa-table"></i>
          <span>Coupons</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('banner.index')}}">
          <i class="fas fa-table"></i>
          <span>Banners</span></a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-image"></i>
        <span>Banners</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Banner Options:</h6>
          <a class="collapse-item" href="{{route('banner.index')}}">Banners</a>
          <a class="collapse-item" href="{{route('banner.create')}}">Add Banners</a>
        </div>
      </div>
    </li> -->

    

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Posts
    </div>

     <!-- Post Categories -->
     <li class="nav-item">
      <a class="nav-link" href="{{route('post-category.index')}}">
          <i class="fas fa-table"></i>
          <span>Post Categories</span></a>
    </li>

    <!-- Posts -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('post.index')}}">
          <i class="fas fa-table"></i>
          <span>Posts</span></a>
    </li>

    <!-- Tags -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('post-tag.index')}}">
          <i class="fas fa-table"></i>
          <span>Post Tags</span></a>
    </li>

    <!-- Post Comments -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('comment.index')}}">
          <i class="fas fa-comments fa-chart-area"></i>
          <span>Post Comments</span>
      </a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
     <!-- Heading -->
    <div class="sidebar-heading">
        Settings
    </div>
     <!-- Settings -->
     <li class="nav-item">
        <a class="nav-link" href="{{route('settings')}}">
            <i class="fas fa-cog"></i>
            <span>Settings</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>