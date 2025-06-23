<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Dashboard - Esra Academy</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" />

    <!-- Core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --bs-primary: #696cff;
            --bs-primary-rgb: 105, 108, 255;
        }

        body {
            background-color: #f5f5f9;
        }

        .layout-wrapper {
            display: flex;
            min-height: 100vh;
        }

        .layout-menu {
            width: 260px;
            background: #fff;
            border-right: 1px solid #d9dee3;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
        }

        .layout-page {
            flex: 1;
            margin-left: 260px;
        }

        .navbar {
            background: #fff;
            border-bottom: 1px solid #d9dee3;
            padding: 0.5rem 1.5rem;
        }

        .menu-inner {
            padding: 1rem 0;
        }

        .menu-item {
            padding: 0.5rem 1.5rem;
            display: flex;
            align-items: center;
            color: #566a7f;
            text-decoration: none;
            transition: all 0.2s ease-in-out;
        }

        .menu-item:hover {
            background: #f5f5f9;
            color: var(--bs-primary);
        }

        .menu-item.active {
            background: #f5f5f9;
            color: var(--bs-primary);
            border-right: 3px solid var(--bs-primary);
        }

        .menu-item i {
            margin-right: 0.5rem;
            font-size: 1.25rem;
        }

        .card {
            border: none;
            box-shadow: 0 0.125rem 0.25rem rgba(161, 172, 184, 0.45);
        }

        .btn-primary {
            background-color: var(--bs-primary);
            border-color: var(--bs-primary);
        }

        .btn-primary:hover {
            background-color: #5f61e6;
            border-color: #5f61e6;
        }
    </style>
</head>

<body>
    <div class="layout-wrapper">
        <!-- Menu -->
        <aside class="layout-menu">
            <div class="app-brand p-3">
                <a href="{{ route('admin') }}" class="app-brand-link">
                    <span class="app-brand-text fw-bold">Esra Academy</span>
                </a>
            </div>

            <div class="menu-inner">
                <a href="{{ route('admin') }}" class="menu-item {{ request()->routeIs('admin') ? 'active' : '' }}">
                    <i class='bx bxs-dashboard'></i>
                    <span>Dashboard</span>
                </a>

                <a href="{{ route('articles.index') }}" class="menu-item {{ request()->routeIs('articles.*') ? 'active' : '' }}">
                    <i class='bx bxs-book-content'></i>
                    <span>Articles</span>
                </a>

                <a href="{{ route('dashboard.enrollments.index') }}" class="menu-item {{ request()->routeIs('dashboard.enrollments.*') ? 'active' : '' }}">
                    <i class='bx bxs-user-plus'></i>
                    <span>Enrollments</span>
                </a>

                <form action="{{ route('logout') }}" method="POST" class="mt-auto">
                    @csrf
                    <button type="submit" class="menu-item w-100 text-start border-0 bg-transparent">
                        <i class='bx bx-log-out'></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->
            <nav class="navbar">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <h4 class="mb-0">@yield('title', 'Dashboard')</h4>
                    <div class="d-flex align-items-center">
                        <span class="me-2">{{ Auth::user()->name }}</span>
                    </div>
                </div>
            </nav>
            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                @yield('content')
            </div>
            <!-- / Content wrapper -->
        </div>
        <!-- / Layout container -->
    </div>

    <!-- Core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
