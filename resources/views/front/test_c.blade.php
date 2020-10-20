@extends('layouts.front.front_child')

@section('title')
    Тест
@endsection

@section('content')
<section class="direction">
    <div class="direction-separator">
        <div class="direction-separator_badge"><span>Глава шоста: Струни</span></div>
    </div>
    <div class="container">
        <!--<a class="breadcrumbs" href="#">Головна сторінка / Курс / Заняття 01</a>-->
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="{{ url('/'}}" class="breadcrumbs__link">Головна</a>
            </li>
            <li class="breadcrumbs__item">
                <a href="" class="breadcrumbs__link">Курс</a>
            </li>
            <li class="breadcrumbs__item">
                <a href="" class="breadcrumbs__link">Заняття 01</a>
            </li>
        </ul>

        <div class="string-menu_wrapper">
            <div class="string-menu_inner">
                <a class="string-menu_btn" href="strings.html"><span>Як це працює</span></a>
            </div>
            <div class="string-menu_inner">
                <a class="string-menu_btn" href="video-collection.html"><span>Відеолекція</span></a>
            </div>
            <div class="string-menu_inner">
                <a class="string-menu_btn" href="protocol.html"><span>Протокол </span></a>
            </div>
            <div class="string-menu_inner">
                <a class="string-menu_btn active" href="test_a.html"><span>Тест</span></a>
            </div>

            <a class="control_btn-prev" href="protocol.html"><span></span></a>
            <a class="control_btn-next disable" href="##"><span></span></a>

        </div>
    </div>
</section>

<section class="test_c">
    <div class="container">
        <div class="test_a-title_doc">Довга назва тесту</div>
        <div class="test_b-title_wrapper">
            <div class="test_b-title_left">
                Перетягуй відповіді в блоки зліва
            </div>
            <div class="test_b-title_right">
                Ви маєте право на 3 помилки. <span class="test_b-darkText">Залишилась <span>1 </span>
                    помилка.</span>
            </div>
        </div>
        <div class="test_b separator"></div>

        <div class="test_b-grid_wrapper">
            <div class="test_b-grid_inner">
                <div class="test_b-grid_question">
                    Lorem <div class="test_b-questionBlock questionBlock-small"><span>1</span></div> Ipsum has been
                    the industry's standard dummy text ever since the 1500s, when an unknown printer
                </div>
            </div>
            <div class="test_b-grid_inner">
                <div class="test_b-grid_answer">
                    <div class="answer-circle"><span>1</span></div>
                    <div class="answer-block correct"><span>2010</span></div>
                    <div class="answer-block wrong"><span>2010</span></div>
                    <div class="answer-block"><span>2010</span></div>
                </div>
            </div>
            <div class="test_b-grid_inner">
                <div class="test_b-grid_question">
                    <div class="test_b-questionBlock"><span>2</span></div> Lore Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown printer
                </div>
            </div>
            <div class="test_b-grid_inner">
                <div class="test_b-grid_answer">
                    <div class="answer-circle"><span>2</span></div>
                    <div class="answer-block "><span>Lore Ipsum has been the industry</span></div>
                    <div class="answer-block correct"><span>Lore Ipsum has been the industry's</span></div>
                    <div class="answer-block"><span>Lore Ipsum has been the industry's</span></div>
                </div>
            </div>
            <div class="test_b-grid_inner">
                <div class="test_b-grid_question">
                    <div class="test_b-questionBlock"><span>3</span></div>Lore Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown printer Lore Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer
                </div>
            </div>
            <div class="test_b-grid_inner">
                <div class="test_b-grid_answer">
                    <div class="answer-circle"><span>3</span></div>
                    <div class="answer-block"><span>Lore Ipsum has been the industry</span></div>
                    <div class="answer-block wrong"><span>Lore Ipsum has been the industry's standard </span></div>
                    <div class="answer-block correct"><span>Lore Ipsum has been the industry's</span></div>
                </div>
            </div>
            <div class="test_b-grid_inner">
                <div class="test_b-grid_question">
                    <div class="test_b-questionBlock"><span>4</span></div>Lore Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown printer Lore Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer Lore Ipsum has been
                    the industry's standard dummy text ever since the 1500s, when an unknown printer Lore Ipsum has
                    been the industry's standard dummy text ever since the 1500s, when an unknown printer
                </div>
            </div>
            <div class="test_b-grid_inner">
                <div class="test_b-grid_answer">
                    <div class="answer-circle"><span>4</span></div>
                    <div class="answer-block"><span>Lore Ipsum has been the industry</span></div>
                    <div class="answer-block"><span>Lore Ipsum has been the industry's standard </span></div>
                    <div class="answer-block"><span>Lore Ipsum has been the industry's</span></div>
                </div>
            </div>
        </div>
        <div class="test_b-grid_wrapper">
            <div class="test_b-grid_inner">
                <div class="test_b-grid_question">
                    Lorem <div class="test_b-questionBlock questionBlock-small"><span>5</span></div> Ipsum has been
                    the industry's standard dummy text ever since the 1500s, when an unknown printer
                </div>
            </div>
            <div class="test_b-grid_inner">
                <div class="test_b-grid_answer">
                    <div class="answer-circle"><span>5</span></div>
                    <div class="answer-block"><span>2010</span></div>
                    <div class="answer-block"><span>2010</span></div>
                    <div class="answer-block"><span>2010</span></div>
                </div>
            </div>
            <div class="test_b-grid_inner">
                <div class="test_b-grid_question">
                    <div class="test_b-questionBlock"><span>6</span></div> Lore Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown printer
                </div>
            </div>
            <div class="test_b-grid_inner">
                <div class="test_b-grid_answer">
                    <div class="answer-circle"><span>6</span></div>
                    <div class="answer-block "><span>Lore Ipsum has been the industry</span></div>
                    <div class="answer-block"><span>Lore Ipsum has been the industry's</span></div>
                    <div class="answer-block"><span>Lore Ipsum has been the industry's</span></div>
                </div>
            </div>
            <div class="test_b-grid_inner">
                <div class="test_b-grid_question">
                    <div class="test_b-questionBlock"><span>7</span></div>Lore Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown printer Lore Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer
                </div>
            </div>
            <div class="test_b-grid_inner">
                <div class="test_b-grid_answer">
                    <div class="answer-circle"><span>7</span></div>
                    <div class="answer-block"><span>Lore Ipsum has been the industry</span></div>
                    <div class="answer-block"><span>Lore Ipsum has been the industry's standard </span></div>
                    <div class="answer-block"><span>Lore Ipsum has been the industry's</span></div>
                </div>
            </div>
            <div class="test_b-grid_inner">
                <div class="test_b-grid_question">
                    <div class="test_b-questionBlock"><span>8</span></div>Lore Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown printer Lore Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer Lore Ipsum has been
                    the industry's standard dummy text ever since the 1500s, when an unknown printer Lore Ipsum has
                    been the industry's standard dummy text ever since the 1500s, when an unknown printer
                </div>
            </div>
            <div class="test_b-grid_inner">
                <div class="test_b-grid_answer">
                    <div class="answer-circle"><span>8</span></div>
                    <div class="answer-block"><span>Lore Ipsum has been the industry</span></div>
                    <div class="answer-block"><span>Lore Ipsum has been the industry's standard </span></div>
                    <div class="answer-block"><span>Lore Ipsum has been the industry's</span></div>
                </div>
            </div>
        </div>

        <a class="answer-btn btn-watch--more" href="##"><span>Надіслати тест </span></a>

    </div>
</section>
@endsection
