<header>
    <nav class="navbar navbar-expand-lg  navbar-light bg-light">
        <div class="container-fluid">
            <a class="nav-link"   href="{{ route('russian_lang.index') }}">
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

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Темы
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><h6 class="dropdown-header">ЛЕКСИКА И ФРАЗЕОЛОГИЗМЫ</h6></li>
                            <li><a class="dropdown-item" href="{{ route('russian_lang.lexis') }}">Лексика</a></li>
                            <li><a class="dropdown-item" href="{{ route('russian_lang.phraseological') }}">Фразеологизмы</a></li>
                            <li><a class="dropdown-item" href="{{ route('russian_lang.homonyms') }}">Омонимы</a></li>
                            <li><a class="dropdown-item" href="{{ route('russian_lang.synonyms') }}">Синонимы</a></li>
                            <li><a class="dropdown-item" href="{{ route('russian_lang.antonyms') }}">Антонимы</a></li>
                            <li><a class="dropdown-item" href="{{ route('russian_lang.neologisms') }}">Неологизмы</a></li>
                            <li><a class="dropdown-item" href="{{ route('russian_lang.dialect_words') }}">Диалекные слова</a></li>
                            <li><hr class="dropdown-divider"></li>

                            <li><h6 class="dropdown-header">ФОНЕТИКА И ГРАФИКА</h6></li>
                            <li><a class="dropdown-item" href="{{ route('russian_lang.phonetics') }}">Фонетика</a></li>
                            <li><hr class="dropdown-divider"></li>

                            <li><h6 class="dropdown-header">ОРФОГРАФИЯ</h6></li>
                            <li><a class="dropdown-item" href="{{ route('russian_lang.spelling') }}">Орфография</a></li>

                        </ul>
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