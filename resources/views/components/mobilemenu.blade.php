<div class="popup-mobile-menu">
    <div class="inner-popup">
        <div class="header-top">
            <div class="logo">
                <a href="{{ route('index') }}">
                    <img class="logo-light" src="{{ asset('assets/images/logo/logo.png') }}" alt="ChatBot Logo">
                    <img class="logo-dark" src="{{ asset('assets/images/logo/logo-dark.png') }}" alt="ChatBot Logo">
                </a>
            </div>
            <div class="close-menu">
                <button class="close-button">
                    <i class="feather-x"></i>
                </button>
            </div>
        </div>

        <div class="content">
            <ul class="mainmenu">
                <li><a href="{{ route('index') }}">Главная</a></li>
                <li class="with-megamenu has-menu-child-item position-relative">
                    <a href="#">О нас</a>
                    <ul class="submenu">
                        <li><a href="{{ route('styleGuide') }}">Компания</a></li>
                        <li><a href="{{ route('blog') }}">Миссия</a></li>
                        <li><a href="{{ route('blogDetails') }}">Команда</a></li>
                        <li><a href="{{ route('termsPolicy') }}">Партнерам</a></li>
                        <li><a href="{{ route('privacyPolicy') }}">Вакансии</a></li>
                    </ul>
                </li>
                <li class="with-megamenu has-menu-child-item position-relative">
                    <a href="#">Услуги</a>
                    <ul class="submenu">
                        <li><a href="{{ route('styleGuide') }}">Ассистенты для сайта</a></li>
                        <li><a href="{{ route('blog') }}">Мессенджеры и SMS</a></li>
                        <li><a href="{{ route('blogDetails') }}">Входящие вызовы</a></li>
                        <li><a href="{{ route('blogDetails') }}">Исходящие вызовы</a></li>
                    </ul>
                </li>
                <li class="with-megamenu has-menu-child-item position-relative">
                    <a href="#">Преимущества</a>
                    <ul class="submenu">
                        <li><a href="{{ route('utilize') }}#gpt-models">Современные GPT-модели</a></li>
                        <li><a href="{{ route('utilize') }}#voice-cloning">Клонирование голоса</a></li>
                        <li><a href="{{ route('utilize') }}#speech-recognition">Точное распознавание речи</a></li>
                        <li><a href="{{ route('utilize') }}#intent-detection">Распознавание намерений</a></li>
                        <li><a href="{{ route('utilize') }}#auto-detection">Детекция автоответчиков</a></li>
                        <li><a href="{{ route('utilize') }}#omnichannel">Омниканальность</a></li>
                        <li><a href="{{ route('utilize') }}#integration">Интеграция под ключ</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('pricing') }}">Цены</a></li>
                <li><a href="{{ route('contact') }}">Контакты</a></li>
            </ul>

            <div class="rbt-sm-separator"></div>
            <div class="header-btn">
                <a class="btn-default btn-small round" href="{{ route('signin') }}">Панель управления</a>
            </div>
        </div>
    </div>
</div>
