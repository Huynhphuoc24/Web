<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 10.48.0 - CRUD User Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <!-- Custom Scripts -->
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>

    <style>
        body {
            background-image: url('/images/bg1.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar,
        footer {
            background-color: #68b4eb;
        }

        .navbar {
            padding-top: 0.3rem;
            padding-bottom: 0.3rem;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 1.25rem;
            font-weight: 600;
            color: #0d47a1 !important;
        }

        .nav-link {
            color: #0d47a1 !important;
            font-weight: 500;
            font-size: 0.95rem;
            margin-left: 1rem;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #1565c0 !important;
        }

        footer {
            border-top: 1px solid #ccc;
            text-align: center;
            padding: 0.6rem 1rem;
            color: #0d47a1;
            font-weight: 500;
            font-size: 0.95rem;
            box-shadow: 0 -1px 4px rgba(0, 0, 0, 0.05);
        }

        @media (max-width: 768px) {
            .nav-link {
                margin-left: 0;
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">Web</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.createUser') }}">Create user</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow-1 d-flex align-items-center justify-content-center py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="mt-auto">
        <span>Lập trình Back-End 2</span>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
