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
    <section class="test_a">
        <div class="container">
    <div class="test_a-title test_a-title_doc">Довга назва тесту</div>
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

  <div class="test_a-question">5. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an </div>
  <div class="test_a-answer">
      <div class="answer-wrapper">
          <div class="answer-radio">
              <input class="answer-radio_input" type="checkbox" id="answer_5-1" value="1" name="question_5" checked>
              <label class="answer-radio_label" for="answer_5-1">5.1. Lorem Ipsum has been the industry's standard dummy text ever</label>
          </div>
          <div class="answer-radio">
              <input class="answer-radio_input" type="checkbox" id="answer_5-2" value="2" name="question_5">
              <label class="answer-radio_label" for="answer_5-2">5.2. Lorem Ipsum has been the industry's standard dummy text ever</label>
          </div>
          <div class="answer-radio">
              <input class="answer-radio_input" type="checkbox" id="answer_5-3" value="3" name="question_5">
              <label class="answer-radio_label" for="answer_5-3">5.3. Lorem Ipsum has been the industry's standard dummy text ever</label>
          </div>
          <div class="answer-radio">
              <input class="answer-radio_input" type="checkbox" id="answer_5-4" value="4" name="question_5">
              <label class="answer-radio_label" for="answer_5-4">5.4. Lorem Ipsum has been the industry's standard dummy text ever</label>
          </div>
      </div>
  </div>

  <div class="test_a-question">6. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an </div>
  <div class="test_a-answer">
      <div class="answer-wrapper">
          <div class="answer-radio">
              <input class="answer-radio_input" type="checkbox" id="answer_6-1" value="1" name="question_6" checked>
              <label class="answer-radio_label" for="answer_6-1">6.1. Lorem Ipsum has been the industry's standard dummy text ever</label>
          </div>
          <div class="answer-radio">
              <input class="answer-radio_input" type="checkbox" id="answer_6-2" value="2" name="question_6">
              <label class="answer-radio_label" for="answer_6-2">6.2. Lorem Ipsum has been the industry's standard dummy text ever</label>
          </div>
          <div class="answer-radio">
              <input class="answer-radio_input" type="checkbox" id="answer_6-3" value="3" name="question_6">
              <label class="answer-radio_label" for="answer_6-3">6.3. Lorem Ipsum has been the industry's standard dummy text ever</label>
          </div>
          <div class="answer-radio">
              <input class="answer-radio_input" type="checkbox" id="answer_6-4" value="4" name="question_6">
              <label class="answer-radio_label" for="answer_6-4">6.4. Lorem Ipsum has been the industry's standard dummy text ever</label>
          </div>
      </div>
  </div>

  <div class="test_a-question">7. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an </div>
  <div class="test_a-answer">
      <div class="answer-wrapper">
          <div class="answer-radio">
              <input class="answer-radio_input" type="checkbox" id="answer_7-1" value="1" name="question_7" checked>
              <label class="answer-radio_label" for="answer_7-1">7.1. Lorem Ipsum has been the industry's standard dummy text ever</label>
          </div>
          <div class="answer-radio">
              <input class="answer-radio_input" type="checkbox" id="answer_7-2" value="2" name="question_7">
              <label class="answer-radio_label" for="answer_7-2">7.2. Lorem Ipsum has been the industry's standard dummy text ever</label>
          </div>
          <div class="answer-radio">
              <input class="answer-radio_input" type="checkbox" id="answer_7-3" value="3" name="question_7">
              <label class="answer-radio_label" for="answer_7-3">7.3. Lorem Ipsum has been the industry's standard dummy text ever</label>
          </div>
          <div class="answer-radio">
              <input class="answer-radio_input" type="checkbox" id="answer_7-4" value="4" name="question_7">
              <label class="answer-radio_label" for="answer_7-4">7.4. Lorem Ipsum has been the industry's standard dummy text ever</label>
          </div>
      </div>
  </div>

  <div class="test_a-question">8. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an </div>
  <div class="test_a-answer">
      <div class="answer-wrapper">
          <div class="answer-radio">
              <input class="answer-radio_input" type="checkbox" id="answer_8-1" value="1" name="question_8" checked>
              <label class="answer-radio_label" for="answer_8-1">8.1. Lorem Ipsum has been the industry's standard dummy text ever</label>
          </div>
          <div class="answer-radio">
              <input class="answer-radio_input" type="checkbox" id="answer_8-2" value="2" name="question_8">
              <label class="answer-radio_label" for="answer_8-2">8.2. Lorem Ipsum has been the industry's standard dummy text ever</label>
          </div>
          <div class="answer-radio">
              <input class="answer-radio_input" type="checkbox" id="answer_8-3" value="3" name="question_8">
              <label class="answer-radio_label" for="answer_8-3">8.3. Lorem Ipsum has been the industry's standard dummy text ever</label>
          </div>
          <div class="answer-radio">
              <input class="answer-radio_input" type="checkbox" id="answer_8-4" value="4" name="question_8">
              <label class="answer-radio_label" for="answer_8-4">8.4. Lorem Ipsum has been the industry's standard dummy text ever</label>
          </div>
      </div>
  </div>

  <a class="answer-btn btn-watch--more" href="##"><span>Надіслати тест </span></a>


  </div>
</section>
@endsection
