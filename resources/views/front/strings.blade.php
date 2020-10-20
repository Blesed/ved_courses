@extends('layouts.front.front_child')

@section('title')
    Як це працює
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
            <li class="breadcrumbs_item">
                <a href="{{ url('/aboute_course'}}" class="breadcrumbs__link">Курс</a>
            </li>
            <li class="breadcrumbs_item">
                <a href="" class="breadcrumbs__link">Заняття 01</a>
            </li>
        </ul>

      <div class="string-menu_wrapper">
          <div class="string-menu_inner">
              <a class="string-menu_btn active" href="strings.html"><span>Як це працює</span></a>
          </div>
          <div class="string-menu_inner">
            <a class="string-menu_btn" href="video-collection.html"><span>Відеолекція</span></a>
        </div>
        <div class="string-menu_inner">
            <a class="string-menu_btn" href="protocol.html"><span>Протокол </span></a>
        </div>
        <div class="string-menu_inner">
            <a class="string-menu_btn" href="test_a.html"><span>Тест</span></a>
        </div>

        <a class="control_btn-prev disable" href="##"><span></span></a>
        <a class="control_btn-next" href="video-collection.html"><span></span></a>

      </div>

      <div class="string-text">
        <p>Друзі! Вітаємо вас на третьому тижні курсу «Наука про освіту: Що повинен знати лідер освітнього стартапа». Ми дістались фіналу нашого курсу, і дуже раді, що пройшли цей шлях разом з вами!
        </p>
        <p>На цьому тижні ми розглянемо можливості краудфандинга освітніх проєктів, розберемося в хитрощах цифрової безпеки онлайн-навчання, а також дізнаємося, як надати психологічну підтримку вашим слухачам. Команда курсу поділиться з вами лайфхаками, як збирати гроші на освітній проєкт, як працювати з медіа та розкаже, що таке цифрова безпека в контексті онлайн-навчання. Ми розповімо про роботу з файлами Cookie, про персональні дані та про конфіденційність в інтернеті. А ще поговоримо про мотивацію та підтримку ваших слухачів і студентів.
        </p>
        <p>Вас чекають лекції від PR-менеджера платформи та популяризатора науки Антона Сененка, технічного директора платформи Андрія Пархоменка та редакторки платформи Радміли Сегол. Не забувайте про творчі завдання та тести! Обмінюйтеся ідеями, обговорюйте матеріали та діліться враженнями з іншими слухачами на форумі!
        </p>
        <p>Всі слухачі, які успішно впораються з курсом і всіма тестовими завданнями, отримають сертифікати про успішне закінчення вже за тиждень! А ваш майбутній освітній проєкт варто почати сьогодні!
        </p>
        <p>Вдалого та плідного тижня!</p>

      </div>




    </div>
</section>
@endsection
