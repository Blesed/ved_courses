@extends('layouts.front.front_child')

@section('title')
    Програма курсу
@endsection

@section('content')
<section class="direction">
    <div class="direction-separator">
        <div class="direction-separator_badge"><span>Назва розділу підрозділу</span></div>
    </div>
    <div class="container">
        <!--<a class="breadcrumbs" href="#">Головна сторінка / Курс назва</a> -->
        <ul class="breadcrumbs">
            <li class="breadcrumbs_item">
                <a href="{{ url('/'}}" class="breadcrumbs__link">Головна</a>
            </li>
            <li class="breadcrumbs__item">
                <a href="" class="breadcrumbs__link">Курс назва</a>
            </li>
        </ul>

        <div class="main-menu">
            <div class="main-menu_inner">
                <a class="main-menu_btn" href="about-course.html"><span>Про курс</span></a>
            </div>
            <div class="main-menu_inner ">
                <a class="main-menu_btn" href="teachers.html"><span>Викладачі</span></a>
            </div>
            <div class="main-menu_inner active">
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

        <div class="main-programs">
            <h3 class="main-teachers_title" id="anchor_program">Програма курсу: що ви вивчите</h3>
            <div class="programs-grid_wrapper">
                <div class="programs-grid_item">
                    <div class="programs-item_lesson--number">01</div>
                    <div class="programs-item_lesson--text">Заняття</div>
                </div>
                <div class="programs-grid_item">
                    <div class="programs-item_chapter">Глава шоста: Струни</div>
                </div>
                <div class="programs-grid_item">
                    <div class="programs-item_text">У цьому класі ми дізнаємося, з чого ми зупинилися в попередньому класі, починаючи з глави 6 підручника і розглядаючи рядки і переходячи до структур даних. Другий тиждень цього уроку присвячена установці Python, якщо ви дійсно хочете запускати додатки на своєму комп'ютері або ноутбуці. Якщо ви вирішите не встановлювати Python, ви можете просто перейти на третій тиждень і отримати перевагу.</div>
                </div>
                <div class="programs-grid_item">
                    <div class="programs-item_hours"><a href="##">4 години на завершення</a> </div>
                </div>
                <div class="programs-grid_item">
                    <div class="programs-item_video"><a href="##">7 відео ( всього 57 хв.), 7 матеріалів для самостійного вивчення, 2 тести</a></div>
                </div>
                <div class="programs-grid_item">
                    <a class="programs-item_btn btn-watch" href="##"><span class="btn-watch_inner">переглянути все</span></a>
                </div>
                <div class="programs-grid_item hidden_item ">
                    <div class="gray-separator"></div>
                    <div class="programs-item_video">5 відео</div>
                    <table class="hidden-menu">
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">3 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">8 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">4 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">3 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">3 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                    </table>
                    <div class="gray-separator"></div>
                    <div class="programs-item_book">2 матеріалів для самостійного вивчення</div>
                    <table class="hidden-menu">
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">10 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">10 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                    </table>
                    <div class="gray-separator"></div>
                </div>
            </div>

            <div class="programs-grid_wrapper">
                <div class="programs-grid_item">
                    <div class="programs-item_lesson--number">02</div>
                    <div class="programs-item_lesson--text">Заняття</div>
                </div>
                <div class="programs-grid_item">
                    <div class="programs-item_chapter">Модуль: Установка і використання Python</div>
                </div>
                <div class="programs-grid_item">
                    <div class="programs-item_text">У цьому модулі ви все налаштуєте так, щоб ви могли писати програми на Python. Ми не вимагаємо установки Python для цього класу. Ви можете писати і тестувати програми на Python в браузері, використовуючи "Python Code Playground" в цьому уроці. Будь ласка, прочитайте матеріал "Використання Python в цьому класі" для деталей.</div>
                </div>
                <div class="programs-grid_item">
                    <div class="programs-item_hours"><a href="##">3 години на завершення</a></div>
                </div>
                <div class="programs-grid_item">
                    <div class="programs-item_video"><a href="##">5 відео (всього 23 хв.), 2 матеріалів для самостійного вивчення, 2 тести</a></div>
                </div>
                <div class="programs-grid_item">
                    <a class="programs-item_btn btn-watch active" href="##"><span class="btn-watch_inner">Згорнути</span></a>
                </div>
                <div class="programs-grid_item hidden_item show">
                    <div class="gray-separator"></div>
                    <div class="programs-item_video">5 відео</div>
                    <table class="hidden-menu">
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">3 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">8 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">4 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">3 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">3 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                    </table>
                    <div class="gray-separator"></div>
                    <div class="programs-item_book">2 матеріалів для самостійного вивчення</div>
                    <table class="hidden-menu">
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">10 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">10 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                    </table>
                    <div class="gray-separator"></div>
                </div>
            </div>

            <div class="programs-grid_wrapper">
                <div class="programs-grid_item">
                    <div class="programs-item_lesson--number">03</div>
                    <div class="programs-item_lesson--text">Заняття</div>
                </div>
                <div class="programs-grid_item">
                    <div class="programs-item_chapter">Глава шоста: Струни</div>
                </div>
                <div class="programs-grid_item">
                    <div class="programs-item_text">У цьому класі ми дізнаємося, з чого ми зупинилися в попередньому класі, починаючи з глави 6 підручника і розглядаючи рядки і переходячи до структур даних. Другий тиждень цього уроку присвячена установці Python, якщо ви дійсно хочете запускати додатки на своєму комп'ютері або ноутбуці. Якщо ви вирішите не встановлювати Python, ви можете просто перейти на третій тиждень і отримати перевагу.</div>
                </div>
                <div class="programs-grid_item">
                    <div class="programs-item_hours"><a href="##">4 години на завершення</a></div>
                </div>
                <div class="programs-grid_item">
                    <div class="programs-item_video"><a href="##">7 відео ( всього 57 хв.), 7 матеріалів для самостійного вивчення, 2 тести</a></div>
                </div>
                <div class="programs-grid_item">
                    <a class="programs-item_btn btn-watch" href="##"><span class="btn-watch_inner">переглянути все</span></a>
                </div>
                <div class="programs-grid_item hidden_item ">
                    <div class="gray-separator"></div>
                    <div class="programs-item_video">5 відео</div>
                    <table class="hidden-menu">
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">3 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">8 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">4 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">3 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">3 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                    </table>
                    <div class="gray-separator"></div>
                    <div class="programs-item_book">2 матеріалів для самостійного вивчення</div>
                    <table class="hidden-menu">
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">10 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">10 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                    </table>
                    <div class="gray-separator"></div>
                </div>
            </div>

            <div class="programs-grid_wrapper">
                <div class="programs-grid_item">
                    <div class="programs-item_lesson--number">04</div>
                    <div class="programs-item_lesson--text">Заняття</div>
                </div>
                <div class="programs-grid_item">
                    <div class="programs-item_chapter">Глава шоста: Струни</div>
                </div>
                <div class="programs-grid_item">
                    <div class="programs-item_text">У цьому класі ми дізнаємося, з чого ми зупинилися в попередньому класі, починаючи з глави 6 підручника і розглядаючи рядки і переходячи до структур даних. Другий тиждень цього уроку присвячена установці Python, якщо ви дійсно хочете запускати додатки на своєму комп'ютері або ноутбуці. Якщо ви вирішите не встановлювати Python, ви можете просто перейти на третій тиждень і отримати перевагу.</div>
                </div>
                <div class="programs-grid_item">
                    <div class="programs-item_hours"><a href="##">4 години на завершення</a></div>
                </div>
                <div class="programs-grid_item">
                    <div class="programs-item_video"><a href="##">7 відео ( всього 57 хв.), 7 матеріалів для самостійного вивчення, 2 тести</a></div>
                </div>
                <div class="programs-grid_item">
                    <a class="programs-item_btn btn-watch" href="##"><span class="btn-watch_inner">переглянути все</span></a>
                </div>
                <div class="programs-grid_item hidden_item ">
                    <div class="gray-separator"></div>
                    <div class="programs-item_video">5 відео</div>
                    <table class="hidden-menu">
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">3 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">8 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">4 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">3 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">3 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                    </table>
                    <div class="gray-separator"></div>
                    <div class="programs-item_book">2 матеріалів для самостійного вивчення</div>
                    <table class="hidden-menu">
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">10 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                        <tr class="hidden-menu_string">
                            <td class="hidden-menu_column">10 хв.</td>
                            <td class="hidden-menu_column"><div class="hidden-menu_dot"></div></td>
                            <td class="hidden-menu_column"> <a href="##">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</a></td>
                        </tr>
                    </table>
                    <div class="gray-separator"></div>
                </div>
            </div>

            <a class="btn-watch--more" href="##"><span>Переглянути більше</span></a>
            </div>



    </div>
</section>
@endsection
