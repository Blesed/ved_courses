@extends('layouts.front.front_child')

@section('title')
    Протокол
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
                <a href="{{ url('/aboute_course'}}" class="breadcrumbs__link">Курс</a>
            </li>
            <li class="breadcrumbs_item">
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
            <a class="string-menu_btn active" href="protocol.html"><span>Протокол </span></a>
        </div>
        <div class="string-menu_inner">
            <a class="string-menu_btn" href="test_a.html"><span>Тест</span></a>
        </div>

        <a class="control_btn-prev" href="video-collection.html"><span></span></a>
        <a class="control_btn-next" href="test_a.html"><span></span></a>

      </div>

      <div class="protocole_book programs-item_book">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum has been the industry's </div>

      <div class="protocole-text string-text">
        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printerLorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem</p>
        <p>Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer  Lorem Ipsum has been the industry's standard dummy text ever</p>

      </div>

      <a class="protocole-btn btn-watch--more" href="##"><span>відкрити файл</span></a>

           </div>
</section>
@endsection
