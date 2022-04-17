@extends('layouts.russian_lang')

@section('description') Вся карта вкладки -орфография-.@endsection
@section('title')Офография - главная | mobibus @endsection

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center">Офография (правила написания слов) русского языка</h1>

            <div class="col text-center">
                <ul class="nav flex-column navrus">
                    <li class="nav-item">

                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('russian_lang.what_spelling') }}">Чтo такое орфография?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('russian_lang.bezudar_glas_v_coren') }}">Проверяемые безударные гласные в корне</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('russian_lang.o_e_posle_shipyashih') }}">
                                    Гласные о - е после шипящих
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('russian_lang.o_e_posle_shipyashih_v_okonchan_i_sufficsax') }}">
                                    Гласные о - е после шипящих в окончаниях и суффиксах
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </div>
@endsection