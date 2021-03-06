<header>
    <nav class="navbar navbar-expand-lg  navbar-light bg-light">
        <div class="container-fluid">
            <a class="nav-link"   href="{{ url()->previous() }}">
                <i class="fa-solid fa-left-long fa-2x "></i>
            </a>
            <a class="navbar-brand" href="{{ route('main.index') }}">На главную</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0" style="--bs-scroll-height: 100px;">

                    <li class="nav-item">
                        <a class="nav-link" href="#">Математика</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Информатика</a>
                    </li>

                </ul>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>