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
            <li class="breadcrumbs_item">
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

      <section class="test_b">
          <div class="container">
      <div class="test_a-title_doc">Довга назва тесту</div>
      <div class="test_b-title_wrapper">
        <div class="test_b-title_left">
            Перетягуй відповіді в блоки зліва
        </div>
        <div class="test_b-title_right">
            Ви маєте право на 3 помилки. <span class="test_b-darkText">Залишилась <span>1 </span> помилка.</span>
        </div>
      </div>
      <div class="test_b separator"></div>

      <div class="test_b-grid_wrapper">
        <div class="test_b-grid_inner">
            <div class="test_b-grid_question">
                Lorem <div class="test_b-questionBlock questionBlock-small"><span>1</span></div> Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
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
                <div class="test_b-questionBlock"><span>2</span></div> Lore  Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
            </div>
        </div>
        <div class="test_b-grid_inner">
            <div class="test_b-grid_answer">
                <div class="answer-circle"><span>2</span></div>
                <div class="answer-block "><span>Lore  Ipsum has been the industry</span></div>
                <div class="answer-block correct"><span>Lore  Ipsum has been the industry's</span></div>
                <div class="answer-block"><span>Lore  Ipsum has been the industry's</span></div>
            </div>
        </div>
        <div class="test_b-grid_inner">
            <div class="test_b-grid_question">
                <div class="test_b-questionBlock"><span>3</span></div>Lore  Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lore  Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
            </div>
        </div>
        <div class="test_b-grid_inner">
            <div class="test_b-grid_answer">
                <div class="answer-circle"><span>3</span></div>
                <div class="answer-block"><span>Lore  Ipsum has been the industry</span></div>
                <div class="answer-block wrong"><span>Lore  Ipsum has been the industry's standard </span></div>
                <div class="answer-block correct"><span>Lore  Ipsum has been the industry's</span></div>
            </div>
        </div>
        <div class="test_b-grid_inner">
            <div class="test_b-grid_question">
                <div class="test_b-questionBlock"><span>4</span></div>Lore  Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lore  Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lore  Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lore  Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
            </div>
        </div>
        <div class="test_b-grid_inner">
            <div class="test_b-grid_answer">
                <div class="answer-circle"><span>4</span></div>
                <div class="answer-block"><span>Lore  Ipsum has been the industry</span></div>
                <div class="answer-block"><span>Lore  Ipsum has been the industry's standard </span></div>
                <div class="answer-block"><span>Lore  Ipsum has been the industry's</span></div>
            </div>
        </div>
      </div>


      <div class="test_a-title_bottom">Оберіть одну, або декілька відповідей на задані питання.</div>
         <div class="test_a separator"></div>

    <div class="test_a-question">1. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an </div>
    <div class="test_a-answer">
        <div class="answer-wrapper">
            <div class="answer-radio">
                <input class="answer-radio_input" type="checkbox" id="answer_1-1" value="1" name="question_1" checked>
                <label class="answer-radio_label" for="answer_1-1">а). Lorem Ipsum has been the industry's standard dummy text ever</label>
            </div>
            <div class="answer-radio">
                <input class="answer-radio_input" type="checkbox" id="answer_1-2" value="2" name="question_1">
                <label class="answer-radio_label" for="answer_1-2">б). Lorem Ipsum has been the industry's standard dummy text ever</label>
            </div>
            <div class="answer-radio">
                <input class="answer-radio_input" type="checkbox" id="answer_1-3" value="3" name="question_1">
                <label class="answer-radio_label" for="answer_1-3">в). Lorem Ipsum has been the industry's standard dummy text ever</label>
            </div>
            <div class="answer-radio">
                <input class="answer-radio_input" type="checkbox" id="answer_1-4" value="4" name="question_1">
                <label class="answer-radio_label" for="answer_1-4">г). Lorem Ipsum has been the industry's standard dummy text ever</label>
            </div>
        </div>
    </div>

    <div class="test_a-question">2. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an </div>
    <div class="test_a-answer">
        <div class="answer-wrapper">
            <div class="answer-radio">
                <input class="answer-radio_input" type="checkbox" id="answer_2-1" value="1" name="question_2" checked>
                <label class="answer-radio_label" for="answer_2-1">а). Lorem Ipsum has been the industry's standard dummy text ever</label>
            </div>
            <div class="answer-radio">
                <input class="answer-radio_input" type="checkbox" id="answer_2-2" value="2" name="question_2">
                <label class="answer-radio_label" for="answer_2-2">б). Lorem Ipsum has been the industry's standard dummy text ever</label>
            </div>
            <div class="answer-radio">
                <input class="answer-radio_input" type="checkbox" id="answer_2-3" value="3" name="question_2">
                <label class="answer-radio_label" for="answer_2-3">в). Lorem Ipsum has been the industry's standard dummy text ever</label>
            </div>
            <div class="answer-radio">
                <input class="answer-radio_input" type="checkbox" id="answer_2-4" value="4" name="question_2">
                <label class="answer-radio_label" for="answer_2-4">г). Lorem Ipsum has been the industry's standard dummy text ever</label>
            </div>
        </div>
    </div>

    <div class="test_a-question">3. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an </div>
    <div class="test_a-answer">
        <div class="answer-wrapper">
            <div class="answer-radio">
                <input class="answer-radio_input" type="checkbox" id="answer_3-1" value="1" name="question_3" checked>
                <label class="answer-radio_label" for="answer_3-1">а). Lorem Ipsum has been the industry's standard dummy text ever</label>
            </div>
            <div class="answer-radio">
                <input class="answer-radio_input" type="checkbox" id="answer_3-2" value="2" name="question_3">
                <label class="answer-radio_label" for="answer_3-2">б). Lorem Ipsum has been the industry's standard dummy text ever</label>
            </div>
            <div class="answer-radio">
                <input class="answer-radio_input" type="checkbox" id="answer_3-3" value="3" name="question_3">
                <label class="answer-radio_label" for="answer_3-3">в). Lorem Ipsum has been the industry's standard dummy text ever</label>
            </div>
            <div class="answer-radio">
                <input class="answer-radio_input" type="checkbox" id="answer_3-4" value="4" name="question_3">
                <label class="answer-radio_label" for="answer_3-4">г). Lorem Ipsum has been the industry's standard dummy text ever</label>
            </div>
        </div>
    </div>

    <div class="test_a-question">4. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an </div>
    <div class="test_a-answer">
        <div class="answer-wrapper">
            <div class="answer-radio">
                <input class="answer-radio_input" type="checkbox" id="answer_4-1" value="1" name="question_4" checked>
                <label class="answer-radio_label" for="answer_4-1">а). Lorem Ipsum has been the industry's standard dummy text ever</label>
            </div>
            <div class="answer-radio">
                <input class="answer-radio_input" type="checkbox" id="answer_4-2" value="2" name="question_4">
                <label class="answer-radio_label" for="answer_4-2">б). Lorem Ipsum has been the industry's standard dummy text ever</label>
            </div>
            <div class="answer-radio">
                <input class="answer-radio_input" type="checkbox" id="answer_4-3" value="3" name="question_4">
                <label class="answer-radio_label" for="answer_4-3">в). Lorem Ipsum has been the industry's standard dummy text ever</label>
            </div>
            <div class="answer-radio">
                <input class="answer-radio_input" type="checkbox" id="answer_4-4" value="4" name="question_4">
                <label class="answer-radio_label" for="answer_4-4">г). Lorem Ipsum has been the industry's standard dummy text ever</label>
            </div>
        </div>
    </div>

    <a class="answer-btn btn-watch--more" href="##"><span>Надіслати тест </span></a>

    </div>
</section>
@endsection
