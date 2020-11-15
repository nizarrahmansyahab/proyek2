@php
function checkRouteActive($route){
if(Route::current()->uri == $route) return 'active';
}
@endphp
<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="has-sub active expand">
                                <a class="nav-link {{checkRouteActive('beranda')}} " href="{{url('beranda')}}" >
                                <i class="fa fa-fw fa-home"></i>Beranda</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{checkRouteActive('admin/produk')}} " href="{{url('admin/produk')}}">
                                <i class="fa fa-fw fa-shopping-cart"></i>Produk</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{checkRouteActive('kategori')}}" href="{{url('kategori')}}" >
                                <i class="fa fa-fw fa-address-book"></i>Kategori</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{checkRouteActive('admin/user')}} " href="{{url('admin/user')}}">
                                <i class="fa fa-fw fa-tags"></i>User</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Master Data</a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link " href="dashboard-finance.html">Pelanggan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard-sales.html">Supplier</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{checkRouteActive('login')}} " href="{{url('login')}}">
                                <i class="fa fa-fw fa-power-off"></i>Logout</a>
                            </li>
                        </ul>
                </div>
        </nav>
    </div>
</div>