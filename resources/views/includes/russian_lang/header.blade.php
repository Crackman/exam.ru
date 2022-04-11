<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Русский язык</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('main.index') }}">На главную</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Математика</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Информатика</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Темы
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="{{ route('russian_lang.lexis') }}">Лексика</a></li>
                            <li><a class="dropdown-item" href="{{ route('russian_lang.phraseological') }}">Фразеологизмы</a></li>
                            <li><a class="dropdown-item" href="{{ route('russian_lang.homonyms') }}">Омонимы</a></li>
                            <li><a class="dropdown-item" href="{{ route('russian_lang.synonyms') }}">Синонимы</a></li>
                            <li><a class="dropdown-item" href="{{ route('russian_lang.antonyms') }}">Антонимы</a></li>
                            <li><a class="dropdown-item" href="{{ route('russian_lang.neologisms') }}">Неологизмы</a></li>
                            <li><a class="dropdown-item" href="{{ route('russian_lang.synonyms') }}">Синонимы</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link</a>
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