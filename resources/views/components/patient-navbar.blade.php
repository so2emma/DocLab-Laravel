<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">DOCLAB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            @auth('patient')
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
            @endauth

            @guest('patient')
                <ul class="navbar-nav ">
                    <li class="nav-item mb-3 mb-md-0">
                        <a href="{{ route('patient.login') }}" class="me-2 btn btn-outline-dark fw-medium">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('patient.register') }}" class="btn btn-outline-dark fw-medium">REGISTER</a>
                    </li>
                </ul>
            @endguest


        </div>
    </div>
</nav>
