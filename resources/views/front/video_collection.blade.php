@extends('layouts.front.front_child')

@section('title')
    Відео
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
            <li class="breadcrumbs__item">
                <a href="" class="breadcrumbs__link">Заняття 01</a>
            </li>
        </ul>

      <div class="string-menu_wrapper">
          <div class="string-menu_inner">
              <a class="string-menu_btn " href="strings.html"><span>Як це працює</span></a>
          </div>
          <div class="string-menu_inner">
            <a class="string-menu_btn active" href="video-collection.html"><span>Відеолекція</span></a>
        </div>
        <div class="string-menu_inner">
            <a class="string-menu_btn" href="protocol.html"><span>Протокол </span></a>
        </div>
        <div class="string-menu_inner">
            <a class="string-menu_btn" href="test_a.html"><span>Тест</span></a>
        </div>

        <a class="control_btn-prev" href="strings.html"><span></span></a>
        <a class="control_btn-next" href="protocol.html"><span></span></a>

      </div>

      <div class="programs-item_video">5 відео</div>
      <table class="video-collection_table hidden-menu">
        <tbody><tr class="video-collection_string hidden-menu_string">
            <td class="hidden-menu_column">3 хв.</td>
            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
        </tr>
        <tr class="video-collection_string hidden-menu_string">
            <td class="hidden-menu_column">8 хв.</td>
            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
        </tr>
        <tr class="video-collection_string hidden-menu_string">
            <td class="hidden-menu_column">4 хв.</td>
            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
        </tr>
        <tr class="video-collection_string hidden-menu_string">
            <td class="hidden-menu_column">3 хв.</td>
            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
        </tr>
        <tr class="video-collection_string hidden-menu_string">
            <td class="hidden-menu_column">3 хв.</td>
            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
        </tr>
    </tbody>
</table>

<div class="player_wrapper">
    <iframe class="video-collection_iframe"  src="https://www.youtube.com/embed/a0ZG7nhXwiA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<p class="video-collection_text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>

    </div>
</section>
@endsection
