@extends('layouts.russian_lang')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Фразеологизмы</h1>
                <h2>Определение</h2>
                <p>
                    <strong>Фразеологизмы</strong> — это устойчивые выражения из двух и более слов. Они отлично живут в нашей культуре,
                    при этом их невозможно дословно перевести на другие языки — для иностранца такой перевод будет звучать странно и непонятно.
                </p>

                <h2>Виды фразеологизмов в русском языке</h2>
                <p>
                    Выделяют три основных вида фразеологизмов: <em>идиомы</em>, <em>фразеологические единства</em> и
                    <em>фразеологические сочетания</em>.
                </p>
                <p>
                    <strong>Фразеологические сращения (идиомы)</strong> — устойчивые выражения, которые имеют смысл только в неизменном виде.
                    При замене или перестановке слов смысл идиомы потеряется. Например: «бить баклуши», то есть бездельничать.
                </p>
                <p>
                    <strong>Фразеологические единства</strong> — устойчивые образные выражения, смысл которых понятен из смысла отдельных слов.
                    Например, обороты «грызть гранит науки» или «попасться на удочку» можно понять даже при переводе на другой язык.
                    Смысл фразеологического единства не потеряется, если заменить «удочку» на «крючок» или вставить в оборот лишнее слово.
                </p>
                <p>
                    <strong>Фразеологические сочетания</strong> — устойчивые, но гибкие обороты, смысл которых определяется через отдельные ключевые слова.
                    При этом не ключевые слова можно заменять синонимами. Пример: можно «умирать от любви»,
                    а можно «умирать от восторга» — смысл обоих словосочетаний понятен.
                </p>

                <h2>Признаки фразеологизмов</h2>
                <p>
                    Как мы уже выяснили, фразеологизм — это устойчивое по составу и структуре образное выражение из двух и более слов.
                    У фразеологизма как самостоятельной лексической единицы языка есть свои отличительные черты.
                </p>
                <h3>1. Фразеологизм состоит из двух и более слов</h3>
                <p>
                    Например:
                </p>
                <ul>
                    <li>играть на нервах — специально раздражать, нервировать кого-либо;</li>
                    <li>семь пятниц на неделе — о том, кто часто меняет свои планы;</li>
                    <li>биться как рыба об лед — бороться с нуждой, бедствовать.</li>
                </ul>

                <h3>2. У фразеологизмов есть устойчивый состав</h3>
                <p>
                    Лексический состав фразеологизма нельзя никак изменять, так как при этом теряется его смысл.
                </p>
                <p>
                    Для примера попробуем поменять слова в устойчивом выражении «висеть в воздухе», что значит «оказаться в неясном, неопределенном положении»:
                </p>
                <ul>
                    <li>летать в воздухе (про пыль);</li>
                    <li>висеть в открытом воздухе (про воздушного змея);</li>
                    <li>висеть на канате (про акробата).</li>
                </ul>
                <p>
                    В результате этого языкового эксперимента фразеологизм рассыпался, как карточный домик, из которого неосторожно
                    вытащили одну карту. Глагол «висеть» потерял свое переносное значение, и смысл фразеологизма испарился.
                </p>

                <h3>3. Главный признак фразеологизмов — воспроизводимость</h3>
                <p>
                    Мы не придумываем фразеологизмы в процессе диалога, а берем их из языковой памяти, как готовые кирпичики для построения образной и выразительной речи.
                    Именно поэтому в школьные годы важно много читать, чтобы пополнять словарный и фразеологический запас.
                </p>

                <h3>4. Переносное значение фразеологизмов сложилось исторически</h3>
                <p>
                    Иногда переносное значение фразеологизма нельзя понять, не обратившись к истории его возникновения.
                </p>
                <p>
                    Например, фразу «на козе не подъедешь» трудно понять, особенно иностранцам, которые изучают русский язык.
                    Есть мнение, что оно тесно связано с речью шутов и скоморохов, которые в старину веселили народ на ярмарках
                    и праздниках, наряжаясь в козу, медведя и других персонажей. Но на особо важных и угрюмых людей даже эта уловка
                    не действовала, с тех пор и говорят «на козе не подъедешь» о неприступных, гордых, важных людях.
                </p>

                <h3>5. Все слова одного фразеологизма — это один член предложения</h3>
                <p>
                    Рассмотрим пример: «Сегодня мы (что делали?) работали до седьмого пота». Фразеологизм «работали до седьмого пота»
                    выполняет роль сказуемого.
                </p>
                <p>
                    Фразеологизм может быть синонимом одному слову:
                </p>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ФРАЗЕОЛОГИЗМ</th>
                        <th>ЗНАЧЕНИЕ</th>
                    </tr>
                    </thead>

                    <tr>
                        <td>тьма-тьмущая</td>
                        <td>много</td>
                    </tr>
                    <tr>
                        <td>ставить точку в споре</td>
                        <td>закончить</td>
                    </tr>
                    <tr>
                        <td>слово в слово</td>
                        <td>
                            точно</td>
                    </tr>
                    <tr>
                        <td>во все лопатки</td>
                        <td>быстро</td>
                    </tr>
                    <tr>
                        <td>втирать очки</td>
                        <td>обманывать</td>
                    </tr>

                </table>

                <p>
                    Фразеологизмы делают нашу речь образной и живой, они помогают передать больше смысла и сделать это эмоционально и выразительно.
                </p>

                <h2>Примеры фразеологизмов с объяснением</h2>
                <p>Вот несколько примеров «мифических» фразеологизмов и их значений в русском языке.</p>

                <ul>
                    <li>
                        «Троянский конь» — скрытая ловушка. По легенде, в деревянном коне спрятались греки, чтобы завоевать Трою.
                    </li>
                    <li>
                        «Авгиевы конюшни» — большой беспорядок. Один из подвигов Геракла заключался в том, что герой за один день
                        очистил огромные конюшни царя Авгия.
                    </li>
                    <li>
                        «Дамоклов меч» — нависшая угроза. Еще одна история из Древней Греции, в которой придворный Дамокл позавидовал
                        царю Дионисию и захотел занять его место. Тот согласился, но повесил над его головой меч на конском волосе,
                        чтобы показать, что быть царем еще и опасно.
                    </li>
                    <li>
                        «Ахиллесова пята» — слабое место. Фразеологизм происходит из древнегреческой легенды о воине Ахиллесе,
                        которого в детстве окунули в воду бессмертия. Единственным незащищенным местом Ахиллеса осталось пятка,
                        так как за нее его держали, когда опускали в ванну.
                    </li>
                    <li>
                        «Манна небесная» — нечто необходимое и спасительное. Корни выражения надо искать в библейской истории о том,
                        как Моисей выводил иудеев из Египта. В какой-то момент у странников закончилась еда, и Бог послал им манну небесную.
                    </li>
                    <li>
                        «Сизифов труд» — бесполезное занятие, которое точно не принесет пользы. Герой древнегреческих мифов царь Сизиф
                        за свою распутную жизнь был осужден на вечную муку — вкатывать на гору огромный камень, который потом тут же скатывался вниз.
                    </li>
                    <li>

                    </li>
                    <li>
                        «Гомерический смех» — громкий хохот над какой-нибудь глупостью. Так смеялись боги в поэмах Гомера «Одиссея» и «Илиада».
                    </li>
                    <li>
                        «Кануть в лету» — оказаться забытым. Лета — в древнегреческой мифологии река в царстве мертвых, которым правил бог Аид.
                    </li>
                    <li>
                        «Ящик Пандоры» — источник несчастий и бед. Согласно древнегреческой легенде, Зевс послал на землю женщину
                        по имени Пандора и дал ей ларец, в котором содержались все человеческие несчастья. Та не удержалась и открыла
                        его, выпустив беды на волю.
                    </li>
                </ul>

            </div>
        </div>
    </div>

@endsection