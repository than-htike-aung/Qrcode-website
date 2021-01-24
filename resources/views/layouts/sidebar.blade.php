<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('home') }}" class="brand-link">
        {{-- <img src="https://assets.infyom.com/logo/blue_logo_150x150.png"
             alt="{{ config('app.name') }} Logo"
             class="brand-image img-circle elevation-3"> --}}
             @if(Auth::guest())
                <p>QRcode Generator</p>
             @else
             <span class="d-none d-md-inline text-info">{{ Auth::user()->name }}</span>
             <a href="#">
                <i class="fa fa-circle text-success"></i>
                @if(Auth::user()->role_id == 1)
                Admin
                @elseif(Auth::user()->role_id == 2)
                Moderator
                @elseif(Auth::user()->role_id == 3)
                Buyer
                @endif
            </a>
             @endif


    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>

</aside>
