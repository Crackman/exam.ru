@extends('layouts.russian_lang')

@section('description')Карта вкладки -русский язык-. @endsection
@section('title')Русский язык - главная | mobibus @endsection

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center">Русский язык</h1>

            <div class="col-xl-4 col-md-6 mb-3 text-center">
                <ul class="nav flex-column navrus">
                    <li class="nav-item">
                        <a class="nav-link text-black" aria-current="page" href="#"><strong>Лексика и фразеологизмы</strong></a>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="{{ route('russian_lang.lexis') }}">Лексика</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('russian_lang.phraseological') }}">Фразеологизмы</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('russian_lang.homonyms') }}">Омонимы</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('russian_lang.synonyms') }}">Синонимы</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('russian_lang.antonyms') }}">Антонимы</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('russian_lang.neologisms') }}">Неологизмы</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('russian_lang.dialect_words') }}">Диалекные слова</a></li>
                        </ul>

                    </li>
                </ul>
            </div>

            <div class="col-xl-4 col-md-6 mb-3 text-center">
                <ul class="nav flex-column navrus">
                    <li class="nav-item">
                        <a class="nav-link text-black" aria-current="page" href="{{ route('russian_lang.phonetics') }}"><strong>Фонетика</strong></a>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="#"></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="col-xl-4 col-md-6 mb-3 text-center">
                <ul class="nav flex-column navrus">
                    <li class="nav-item">
                        <a class="nav-link text-black" aria-current="page" href="{{ route('russian_lang.spelling') }}"><strong>Орфография</strong></a>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('russian_lang.what_spelling') }}">Чтo такое орфография?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('russian_lang.bezudar_glas_v_coren') }}">Проверяемые безударные гласные в корне</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </div>
@endsection