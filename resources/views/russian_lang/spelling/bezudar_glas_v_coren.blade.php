@extends('layouts.russian_lang')

@section('description')Узнайте как проверить безёдарные гласные в корне. Посмотреите на чередование гласных в корне.@endsection
@section('title')Проверяемые безударные гласные | mobibus @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                <h1>Проверяемые безударные гласные в корне</h1>
                <p>

                    Правописание безударных гласных в корне в русском языке часто можно проверить, изменяя слово или подбирая однокоренные
                    слова так, чтобы сомнительный звук оказался под ударением, например: свинья — свин, рука — руки, домовой - дом.
                    В безударном слоге корня слова пишется та же гласная буква, что и в соответствующем ударном слоге в другой словоформе
                    или в родственных словах: дом — домовой — домашний.
                </p>
                <p>
                    Исключение составляют слова с чередующимися гласными в корне и глагольные корни с формами совершенного
                    вида на <strong style="color: forestgreen">-ивать (-ывать)</strong>: попойка — попаивать, кройка — раскраивать.
                    Чтобы не ошибаться в написании гласных в корне, старайтесь проверять безударные гласные, изменяя слова.
                </p>
                <p>
                    Также важно учитывать контекст и лексическое значение, чтобы подобрать правильное проверочное слово:
                </p>
                <ul>
                    <li>Отв<strong style="color: forestgreen">о</strong>рить дверь (створка) - отв<strong style="color: forestgreen">а</strong>рить (варка)</li>
                    <li>Зал<strong style="color: forestgreen">и</strong>зать рану (лижеит) - Зал<strong style="color: forestgreen">е</strong>зать на дерево (лезет)</li>
                    <li>С<strong style="color: forestgreen">е</strong>деть (становиться седым) — с<strong style="color: forestgreen">и</strong>деть (на стуле)</li>
                    <li>Ч<strong style="color: forestgreen">и</strong>стота (чисто) в доме – ч<strong style="color: forestgreen">а</strong>стота (часто) радиоволн</li>
                    <li>Бр<strong style="color: forestgreen">о</strong>нировать (бронь) билеты – бр<strong style="color: forestgreen">а</strong>нить (брань) мужа</li>
                    <li>Прив<strong style="color: forestgreen">е</strong>дение (вёл) приговора в исполнение – увидел прив<strong style="color: forestgreen">и</strong>дение (вид)</li>
                </ul>

                <h2>Чередующиеся гласные в корне</h2>

                <table class="table table-bordered border-dark">

                    <thead>
                    <tr>
                        <th scope="col" class="text-center">КОРЕНЬ</th>
                        <th scope="col" class="text-center">ОТ ЧЕГО ЗАВИСИТ НАПИСАНИЕ</th>
                        <th scope="col" class="text-center">ПРИМЕРЫ</th>
                    </tr>
                    </thead>

                    <tbody>

                    <tr>
                        <td>
                            1. -раст- (-ращ-) // -рос
                            <br>
                            2. -лаг-//-лож-
                            <br>
                            2. -скак-//-скоч-
                        </td>
                        <td>
                            От последущей буквы в корне:
                            <br>
                            1. перед <strong style="color: forestgreen">ст(щ)</strong> пищется <strong style="color: forestgreen">а</strong>,
                            <br>
                            перед <strong style="color: forestgreen">с - о</strong>
                            <br>
                            2. перед <strong style="color: forestgreen">г</strong> пишется <strong style="color: forestgreen">а</strong>,
                            <br>
                            перед <strong style="color: forestgreen">ж - о</strong>
                            <br>
                            3. перед <strong style="color: forestgreen">к</strong> пишется <strong style="color: forestgreen">а</strong>,
                            <br>
                            перед <strong style="color: forestgreen">ч - о</strong>
                        </td>
                        <td>
                            1. Растение, выращивать, выросли
                            <br>
                            <strong class="text-danger">Исключения</strong>: Ростов, Ростислав, росток,  ростовщик, отрасль, подростковый, вырост
                            <br>
                            2. Предполагать, приложить
                            <br>
                            <strong class="text-danger">Исключение</strong>: полог
                            <br>
                            3. Скакун, вскочил
                            <br>
                            <strong class="text-danger">Исключения</strong>: формы спряжения глагола скакать (скачу, скачешь, скачет,скачут и т.д) скачок
                        </td>
                    </tr>

                    <tr>
                        <td>
                            4. -клан-//--клон-
                            <br>
                            5. -гар-//-гор-
                            <br>
                            6. -твар-//-твор-
                        </td>
                        <td>
                            От ударения- в безударном положении пишется буква <strong style="color: forestgreen">о</strong>
                        </td>
                        <td>
                            4. Склонить - кланятся
                            <br>
                            5. Загар - загорелый, прогар - прогорелый
                            <br>
                            <strong class="text-danger">Исключения</strong>: выгарки, пригарать
                            <br>
                            6. Творчество, творить - тварь
                        </td>
                    </tr>

                    <tr>
                        <td>
                            7. -плав-//-плов-
                            <br>
                            8. -зар-//-зор-
                        </td>
                        <td>
                            От ударения - в безударном положении пишется буква <strong style="color: forestgreen">а</strong>
                        </td>
                        <td>
                            7. Плавучий, поплавок
                            <br>
                            <strong class="text-danger">Исключения</strong>: пловчиха, пловец, плывуны, пловцы
                            <br>
                            8. заря,зарянка - зорька, зори
                        </td>
                    </tr>

                    <tr>
                        <td>
                            9. -мак-//-мок-
                            <br>
                            10. -равн-//-ровн-
                        </td>
                        <td>
                            Имеет значение:
                            <br>
                            9."погружать в жидкость" - <strong style="color: forestgreen"> мак</strong>;
                            <br>
                            "пропускать жидкость" - <strong style="color: forestgreen">мок</strong>;
                            <br>
                            10. "делать(-ся) ровным, гладким" - <strong style="color: forestgreen">ровн</strong>;
                            <br>
                            "быть/делать равным кому-то, чему-то" - <strong style="color: forestgreen">равн</strong>
                        </td>
                        <td>
                            9. Макать, обмакнуть, вымокнуть
                            <br>
                            10.Сравниться (силой), выровнять (грядку)
                            <br>
                            <strong class="text-danger">Исключения</strong>: равнина, уровень, ровесник, равнение (налево)
                        </td>
                    </tr>

                    <tr>
                        <td>
                            11. -блест-//-блист-
                            <br>
                            12. -бер-//-бир-
                            <br>
                            13. -стел-//-стил-
                            <br>
                            14. -дер-//-дир-
                            <br>
                            15. -пер-//-пир-
                            <br>
                            16. -тер-//-тир-
                            <br>
                            17. -мер-//-мир-
                            <br>
                            18. -жег-//-жиг-
                            <br>
                            19. -чет-//-чит-
                            <br>
                            20. -кас-//-кос-
                        </td>
                        <td>
                            От последущего суффикса <strong style="color: forestgreen">-а-</strong>:
                            <br>
                            11-19. при наличии суффикса пишется буква <strong style="color: forestgreen">и</strong>, если его нет - буква <strong style="color: forestgreen">е</strong>
                            <br>
                            20. если есть суффикс <strong style="color: forestgreen">а</strong>, то пишется буква <strong style="color: forestgreen">а</strong>
                        </td>
                        <td>
                            11. блестящий - блистать
                            <br>
                            12. беру - подбирал, берёза
                            <br>
                            13. стелил - расстилать
                            <br>
                            14. дерево, деревня, раздиратель
                            <br>
                            15. первак, перила, запирать
                            <br>
                            16. термит, стирать - стереть
                            <br>
                            17. замер - замирал, помер - помирал
                            <br>
                            18. сжигать, выжег
                            <br>
                            19. вычет, вычитал
                            <br>
                            <strong class="text-danger">Исключения</strong>: сочетать, сочетание
                            <br>
                            20. коснуться - касался
                        </td>
                    </tr>

                    <tr>
                        <td>21. корни с чередованием а(я)//им, а(я)//ин</td>
                        <td> без ударение пишутся <strong style="color: forestgreen">им и ин</strong>, если есть суффикс <strong style="color: forestgreen">-а-</strong></td>
                        <td>21. поднять - поднимать, начать - начинать</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection