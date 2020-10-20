@extends('layouts.front.front_child')

@section('title')
    Симулятор слідчих дій
@endsection

@section('header')

@endsection

@section('content')
<section class="direction">
    <div class="direction-separator">
        <div class="direction-separator_badge"><span>Симулятор слідчих дій</span></div>
    </div>
    <div class="container">
        <!--<a class="breadcrumbs" href="#">Головна сторінка / Симулятор слідчих дій</a>-->
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="{{ url('/'}}" class="breadcrumbs__link">Головна</a>
            </li>
            <li class="breadcrumbs__item">
                <a href="" class="breadcrumbs__link">Симулятор слідчих дій</a>
            </li>
        </ul>
        
        <div class="direction-wrapper">
            <div class="direction-inner">
                <div class="direction-inner_top">
                    <img class="direction-inner_img" src="{{ asset('img/direction_4.jpg') }}" alt="img">
                    <a class="image-btn" href="{{ route('aboute_course') }}">
                        <span>Підкатегорії</span>
                        <div class="image-btn_arrow"></div>
                    </a>
                </div>
                <div class="direction-inner_bottom">
                    <div class="direction-inner_bottom--title">
                        <h4>Огляд місця <br> подій</h4>
                    </div>
                    <div class="direction-inner_bottom--text">
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer Lorem Ipsum has been the industry's standard dummy text ever since the
                        1500s, when an unknown printerLorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s, when an unknown printer
                    </div>
                </div>
            </div>
            <div class="direction-inner">
                <div class="direction-inner_top">
                    <img class="direction-inner_img" src="{{ asset('img/direction_5.jpg') }}" alt="img">
                    <a class="image-btn" href="{{ route('aboute_course') }}">
                        <span>Підкатегорії</span>
                        <div class="image-btn_arrow"></div>
                    </a>
                </div>
                <div class="direction-inner_bottom">
                    <div class="direction-inner_bottom--title">
                        <h4>Допит</h4>
                    </div>
                    <div class="direction-inner_bottom--text">
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer Lorem Ipsum has been the industry's standard dummy text ever since the
                        1500s, when an unknown printerLorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s, when an unknown printer
                    </div>
                </div>
            </div>
            <div class="direction-inner">
                <div class="direction-inner_top">
                    <img class="direction-inner_img" src="{{ asset('img/direction_3.jpg') }}" alt="img">
                    <a class="image-btn" href="{{ route('aboute_course') }}">
                        <span>Підкатегорії</span>
                        <div class="image-btn_arrow"></div>
                    </a>
                </div>
                <div class="direction-inner_bottom">
                    <div class="direction-inner_bottom--title">
                        <h4>Назва розділу підрозділу</h4>
                    </div>
                    <div class="direction-inner_bottom--text">
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer Lorem Ipsum has been the industry's standard dummy text ever since the
                        1500s, when an unknown printerLorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s, when an unknown printer
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Partners section-->
@include('layouts.front.includes.partners')
<!-- End Partners Section -->
@endsection
