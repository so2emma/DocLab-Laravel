<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient {{ $title }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        /* Adjust content when sidebar is collapsed */
        .content {
            margin-left: 250px;
            /* padding: 0 20px; */
        }

        @media (max-width: 992px) {
            /* .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            } */

            .content {
                margin-left: 0;
            }
        }

        /* @media (max-width: 768px) {
            .sidebar {
                display: none;
            }
        } */
    </style>
</head>

<body>
    <!-- Collapsible Sidebar -->
    <div class="collapse d-lg-block" id="sidebar">
        <div class="sidebar">
            <div class="mx-3">
                <p class="fw-bold fs-3 text-white">DOCLAB</p>
            </div>
            <a href="#home">Home</a>
            <a href="#services">Services</a>
            <a href="#clients">Clients</a>
            <a href="#contact">Contact</a>
        </div>
    </div>

    <!-- Page content -->
    <div class="content">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                {{-- this is the toggle for the side nav  --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar"
                    aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand" href="#">
                    <span class="fw-medium d-md-none">
                        DOCLAB
                    </span>
                    <span class="fw-medium d-none d-md-block">
                        Patient Dashboard
                    </span>
                </a>

                <div class="dropdown pe-0 pe-md-5">
                    <a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::guard('patient')->user()->name }}
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <form id="logout-form" action="{{ route('patient.logout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>
                        <li><a class="dropdown-item" href="{{ route('patient.logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Log Out
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

        <div class="container">
            {{ $slot }}
        </div>
        
    </div>
</body>

</html>
