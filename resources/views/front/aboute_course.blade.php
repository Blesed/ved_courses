@extends('layouts.front.front_child')

@section('title')
    Про курс
@endsection

@section('header')

@endsection

@section('content')
<section class="direction">
    <div class="direction-separator">
        <div class="direction-separator_badge"><span>Назва розділу підрозділу</span></div>
    </div>
    <div class="container">

        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="{{ url('/'}}" class="breadcrumbs__link">Головна</a>
            </li>
            <li class="breadcrumbs_item">
                <a href="" class="breadcrumbs__link">Курс назва</a>
            </li>
        </ul>


        <div class="main-menu">
            <div class="main-menu_inner active">
                <a class="main-menu_btn" href="about-course.html"><span>Про курс</span></a>
            </div>
            <div class="main-menu_inner ">
                <a class="main-menu_btn" href="teachers.html"><span>Викладачі</span></a>
            </div>
            <div class="main-menu_inner">
                <a class="main-menu_btn" href="program.html"><span>Програма курсу</span></a>
            </div>
            <div class="main-menu_inner">
                <a class="main-menu_btn" href="questions.html"><span>Поширені запитання</span></a>
            </div>
            <div class="main-menu_inner">
                <div class="main-menu_social"><a href="##"><img src="{{ asset('img/facebook.png') }}" alt="img"></a></div>
                <div class="main-menu_social"><a href="##"><img src="{{ asset('img/instagram.png') }}" alt="img"></a></div>
                <div class="main-menu_social"><a href="##"><img src="{{ asset('img/linkedin.png') }}" alt="img"></a></div>
            </div>
        </div>
        <h4 class="main-title_middle" id="anchor_course">Про цей курс</h4>
        <div class="main-textblock">
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printerLorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printerLorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
        </div>
        <div class="main-learn">
            <h4 class="main-learn_title">Чого ви навчитесь</h4>
            <div class="about-course_wrapper main-learn_wrapper">
                <div class="main-learn_inner">
                    <div class="main-learn_inner--icon"></div>
                    <div class="main-learn_inner--text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an</div>
                </div>
                <div class="main-learn_inner">
                    <div class="main-learn_inner--icon"></div>
                    <div class="main-learn_inner--text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an</div>
                </div>
                <div class="main-learn_inner">
                    <div class="main-learn_inner--icon"></div>
                    <div class="main-learn_inner--text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an</div>
                </div>
                <div class="main-learn_inner">
                    <div class="main-learn_inner--icon"></div>
                    <div class="main-learn_inner--text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
