@extends('layouts.master')

@section('title', 'E-School - Команда школи')
@section('description', 'Команда викладачів дитячої школи програмування у Сумах – це професіонали з багаторічним досвідом у галузі IT. Вони навчають дітей від 7 років основам веб-дизайну, Python, JavaScript, робототехніки та розробки електронних пристроїв. Дізнайтеся більше про наших експертів та їхній підхід до навчання')
@section('keywords', 'викладачі школи програмування Суми, досвідчені викладачі IT, команда викладачів програмування для дітей, викладачі Python для дітей, професійні викладачі веб-дизайн, викладачі JavaScript для дітей, навчання програмуванню з викладачами')

@section('og_title', 'Курси для дітей у Сумах, від E-School - Команда школи')
@section('og_description', 'Команда викладачів дитячої школи програмування у Сумах – це професіонали з багаторічним досвідом у галузі IT. Вони навчають дітей від 7 років основам веб-дизайну, Python, JavaScript, робототехніки та розробки електронних пристроїв. Дізнайтеся більше про наших експертів та їхній підхід до навчання')

@section('content')
    <main class="main__teacher">
        <div class="main__teams">
            <div class="container">
                <div class="head__subtitle subtitle">Кервівництво школи</div>
                <div class="head__title title">Лідери з великим досвідом</div>
                <div class="head__text text">
                    Керівники E-school - це команда досвідчених професіоналів, які забезпечують
                    стратегічне управління та підтримку розвитку школи, створюючи сприятливі умови
                    для навчання програмуванню та робототехніці.
                </div>
                <div class="head__staff">
                    <div class="head__item staff__item">
                        <div class="staff__image">
                            <img src="../img/staff/h1_1.jpg"/>
                        </div>
                        <div class="staff__desc">
                            <div class="staff__title">Леонтьєв Петро Володимирович</div>
                            <div class="staff__subtitle">Завідувач кафедри КСУ Сумського державного університету,
                                Кандидат технічних наук, спеціальність 05.13.07 – автоматизація процесів керування
                            </div>
                            <div class="staff__status">Співвласник</div>
                        </div>
                    </div>
                    <div class="head__item staff__item">
                        <div class="staff__image">
                            <img src="../img/staff/s3.jpg"/>
                        </div>
                        <div class="staff__desc">
                            <div class="staff__title">Левковський Олександр Вікторович</div>
                            <div class="staff__subtitle">Магістр, 174 Автоматизація, комп'ютерно-інтегровані технології
                                та робототехніка, аспірантура 122 Компʼютерні науки
                            </div>
                            <div class="staff__status">Співвласник</div>
                        </div>
                    </div>
                    <div class="head__item staff__item">
                        <div class="staff__image">
                            <img src="../img/staff/h3.jpg"/>
                        </div>
                        <div class="staff__desc">
                            <div class="staff__title">Олексієнко Галина Андріївна</div>
                            <div class="staff__subtitle">Кандидат фізико-математичних наук, спеціальність 01.04.01 -
                                Фізика приладів, елементів і систем, доцент кафедри компʼютерних наук
                            </div>
                            <div class="staff__status">Співвласник</div>
                        </div>
                    </div>
                    <div class="head__item staff__item">
                        <div class="staff__image">
                            <img src="../img/staff/h4.jpg"/>
                        </div>
                        <div class="staff__desc">
                            <div class="staff__title">Леонтьєва Олена Володимирівна</div>
                            <div class="staff__sutitle">Магістр,144 Теплоенергетика, аспірантура 05.05.17 Гідравлічні
                                машини та гідропневмоагрегати
                            </div>
                            <div class="staff__status">Адміністратор</div>
                        </div>
                    </div>
                </div>

                <div class="teams__body">
                    <div class="teams__subtitle subtitle">Команда викладачів</div>
                    <div class="teams__title title">Експерт кожен в свої стихії</div>
                    <div class="teams__text text">
                        Вчителі E-school - це відданий колектив експертів, які навчають
                        та підтримують кожного учня на шляху до успіху в програмуванні
                        та робототехніці.
                    </div>
                </div>

                @if($staffs->count())
                    <div class="teams__staff">

                        @foreach($staffs as $teacher)
                            <div class="staff__item">
                                <div class="staff__image">
                                    <img src="{{ $teacher->image }}" alt=""/>
                                </div>
                                <div class="staff__desc">
                                    <div
                                        class="staff__title">{{ $teacher->firstname . ' ' . $teacher->lastname }}</div>
                                    {{-- TODO add programs tag for teacher--}}
                                    <div class="staff__subtitle">{{ $teacher->qualification }}</div>
                                    <div class="staff__year">Стаж:
                                        <span>{{ $teacher->experience }} роки</span></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
@endsection
