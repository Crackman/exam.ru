@extends('layouts.russian_lang')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1> Русский язык</h1>

                <ul class="nav flex-column navrus">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Лексика и фразеологизмы</a>
                        <ul class="nav flex-column mx-5 mb-1">
                            <li class="nav-item"><a class="nav-link" href="{{ route('russian_lang.lexis') }}">Лексика</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('russian_lang.phraseological') }}">Фразеологизмы</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('russian_lang.homonyms') }}">Омонимы</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('russian_lang.synonyms') }}">Синонимы</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('russian_lang.antonyms') }}">Антонимы</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('russian_lang.neologisms') }}">Неологизмы</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('russian_lang.dialect_words') }}">Диалекные слова</a></li>
                        </ul>

                        <a class="nav-link active" aria-current="page" href="{{ route('russian_lang.phonetics') }}">Фонетика</a>
                        <ul class="nav flex-column mx-5 mb-1">
                            <li class="nav-item">
                                <a href="#"></a>
                            </li>
                        </ul>

                        <a class="nav-link active" aria-current="page" href="{{ route('russian_lang.phonetics') }}">Орфография</a>
                        <ul class="nav flex-column mx-5 mb-1">
                            <li class="nav-item"><a class="nav-link" href="{{ route('russian_lang.spelling') }}">Орфография</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Отключенная</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
@endsection