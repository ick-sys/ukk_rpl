<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <title>@yield('title', 'Admin') | UKK Parkir</title>
    <link href="{{ asset('assets/css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/tabler-flags.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/tabler-payments.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/tabler-vendors.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('') }}" rel="style"/>
    <style>
        @import url('https://rsms.me/inter/inter.css');
        :root { --tblr-font-sans-serif: 'Inter Var', -apple-system, sans-serif; }
    </style>
</head>
<body class="border-top-wide border-primary d-flex flex-column">
<div class="page">

    <aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <h1 class="navbar-brand navbar-brand-autodark">
                <a href="{{ route('admin.dashboard') }}">Parkir App</a>
            </h1>
            <div class="collapse navbar-collapse" id="sidebar-menu">
                <ul class="navbar-nav pt-lg-3">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">
                            <span class="nav-link-icon"><i class="ti ti-home"></i></span>
                            <span class="nav-link-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="nav-link-icon"><i class="ti ti-car"></i></span>
                            <span class="nav-link-title">Kendaraan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="nav-link-icon"><i class="ti ti-receipt"></i></span>
                            <span class="nav-link-title">Transaksi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="nav-link-icon"><i class="ti ti-users"></i></span>
                            <span class="nav-link-title">Pengguna</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>

    <header class="navbar navbar-expand-md d-none d-lg-flex d-print-none">
        <div class="container-xl">
            <div class="navbar-nav flex-row order-md-last">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown">
                        <span class="avatar avatar-sm">A</span>
                        <div class="d-none d-xl-block ps-2">
                            <div>Admin</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="page-wrapper">
        <div class="page-header d-print-none">
            <div class="container-xl">
                <h2 class="page-title">@yield('page-title', 'Dashboard')</h2>
            </div>
        </div>

        <div class="page-body">
            <div class="container-xl">
                @yield('content')
            </div>
        </div>

        <footer class="footer footer-transparent d-print-none">
            <div class="container-xl">
                <div class="row text-center align-items-center flex-row-reverse">
                    <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                        &copy; {{ date('Y') }} Aplikasi Parkir
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<script src="{{ asset('assets/js/tabler.min.js') }}" defer></script>
</body>
</html>