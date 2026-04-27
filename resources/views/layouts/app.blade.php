<!DOCTYPE html>
<html>
<head>
    <title>Wedding Organizer</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #c3d9f3;
        }

        .sidebar {
            width: 220px;
            min-height: 100vh;
            background: rgb(255, 255, 255);
            border-right: 1px solid #ddd;
        }

        .sidebar a {
            display: block;
            padding: 10px;
            color: #555;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: #e9f2ff;
            color: #0d6efd;
        }

        .active {
            background: #0d6efd;
            color: white !important;
        }

        .profile-icon {
            background: white;
            padding: 5px 10px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <x-navbar />
    <div class="d-flex">
        <div class="sidebar d-flex flex-column p-3">
            <h5 class="mb-4 text-primary fw-bold">Menu</h5>
            <a href="{{ route('beranda', ['username' => request('username')]) }}"
                class="nav-link mb-2 {{ request()->is('beranda') ? 'active' : '' }}">
                 <span>Beranda</span>
            </a>

            <a href="{{ route('pengelolaan', ['username' => request('username')]) }}"
                class="nav-link mb-2 {{ request()->is('pengelolaan') ? 'active' : '' }}">
                 <span>Pengelolaan</span>
            </a>
        </div>
        <div class="container p-4">
            @yield('content')
        </div>
    </div>
    @include('components.footer')
</body>
</html>
