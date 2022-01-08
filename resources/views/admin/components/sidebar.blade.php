<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{url('/dashboard')}}">LambSwap</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{url('/dashboard')}}">KI</a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{request()->is('dashboard') ? 'nav-item active' : 'nav-item'}}">
                <a href="{{url('/dashboard')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard </span></a>
            </li>
            <li class="{{request()->is('dashboard/ido') || request()->is('dashboard/ido/edit/*') ? 'nav-item active' : 'nav-item'}}">
                <a href="{{url('/dashboard/ido')}}" class="nav-link"><i class="fas fa-cube"></i><span>IDO </span></a>
            </li>
            {{-- <li class="{{request()->is('ido') ? 'nav-item active' : 'nav-item'}}">
                <a href="{{url('/dashboard/ido')}}" class="nav-link"><i class="fas fa-cube"></i><span>IDO
                    <i class="nav-arrow fas fa-chevron-right" style=""></span></a> --}}
            </li>
            <li class="nav-item ">
                <a href="{{url('/dashboard/history')}}" class="nav-link"><i class="fas fa-history"></i><span>Riwayat
                        Transaksi</span></a>
            </li>
            <li class="nav-item ">
                <a href="{{url('/dashboard/user')}}" class="nav-link"><i
                        class="fas fa-user"></i><span>Pengguna</span></a>
            </li>
            </li>
        </ul>
    </aside>
</div>
