<!DOCTYPE html>
<html lang="en">

<x-head headTitle="Contact" css='<link rel="stylesheet" href={{ asset("assets/css/plugins/fontawesome-all.min.css") }}' />

<body>
    <main class="page-wrapper">

        <!-- Start Header Top Area  -->
        <x-headertop />
        <!-- End Header Top Area  -->

        <div id="my_switcher" class="my_switcher">
            <ul>
                <li>
                    <a href="javascript: void(0);" data-theme="light" class="setColor light">
                        <img src="{{ asset('assets/images/light/switch/sun-01.svg') }}" alt="Sun images"><span title="Light Mode"> Light</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                        <img src="{{ asset('assets/images/light/switch/vector.svg') }}" alt="Vector Images"><span title="Dark Mode">
                            Dark</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Start Header Area  -->
        <x-header2 />
        <!-- End Header Area  -->

        <x-mobilemenu />

        <!-- Imroz Preloader -->
        <x-preloader />

        <!-- Start Contact Area  -->
        <div class="main-content">
            <div class="rainbow-contact-area rainbow-section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mb--40">
                            <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                                <h4 class="subtitle "><span class="theme-gradient">ФОРМА ОБРАТНОЙ СВЯЗИ</span></h4>
                                <h2 class="title w-600 mb--20">Свяжитесь с нами или задайте вопрос</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row row--15">
                        <div class="col-lg-12">
                            <div class="rainbow-contact-address mt_dec--30">
                                <div class="row">
                                    <!-- Блок телефона -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rainbow-address bg-flashlight">
                                            <div class="icon">
                                                <i class="feather-phone"></i>
                                            </div>
                                            <div class="inner">
                                                <h4 class="title">Позвоните нам</h4>
                                                <p><a href="tel:+444555666777">+444 555 666 777</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Блок email -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rainbow-address bg-flashlight">
                                            <div class="icon">
                                                <i class="feather-mail"></i>
                                            </div>
                                            <div class="inner">
                                                <h4 class="title">Напишите нам</h4>
                                                <p><a href="mailto:admin@gmail.com">admin@gmail.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Блок Telegram -->
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rainbow-address bg-flashlight">
                                            <div class="icon">
                                                <i class="feather-send"></i>
                                            </div>
                                            <div class="inner">
                                                <h4 class="title">Наш Telegram</h4>
                                                <p><a href="https://t.me/example_account" target="_blank">@example_account</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- Форма и карта -->
                    <div class="row mt--40 row--15">
                        <div class="col-lg-7">
                            <form class="contact-form-1 rainbow-dynamic-form" id="contact-form" method="POST" action="mail">
                                <div class="form-group">
                                    <input type="text" name="contact-name" id="contact-name" placeholder="Ваше имя">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="contact-phone" id="contact-phone" placeholder="Ваш номер телефона">
                                </div>
                                <div class="form-group">
                                    <input type="email" id="contact-email" name="contact-email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="subject" name="subject" placeholder="Тема">
                                </div>
                                <div class="form-group">
                                    <textarea name="contact-message" id="contact-message" placeholder="Ваше сообщение"></textarea>
                                </div>
                                <!-- Чекбокс согласия -->
                                <div class="form-group">
                                    <div class="rbt-checkbox-wrapper">
                                        <input id="contact-consent-checkbox" name="contact-consent" type="checkbox" value="yes" required>
                                        <label for="contact-consent-checkbox">
                                            Я согласен с 
                                            <a href="URL_СТРАНИЦЫ_С_ПРАВИЛАМИ" target="_blank">правилами обработки персональных данных</a>
                                        </label>
                                    </div>
                                </div>
                                <!-- Кнопка отправки -->
                                <div class="form-group">
                                    <button name="submit" type="submit" id="submit-button" class="btn-default btn-large rainbow-btn" disabled>
                                        <span>Отправить</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-5 mt_md--30 mt_sm--30">
                            <div class="yandex-map-style-1">
                                <div style="position:relative;overflow:hidden;">
                                    <a href="https://yandex.ru/maps" 
                                       style="color:#eee;font-size:12px;position:absolute;top:0px;">Посетить Яндекс Карты</a>
                                    <iframe
                                        src="https://yandex.ru/map-widget/v1/?ll=82.909136%2C55.028541&mode=poi&poi%5Bpoint%5D=82.905354%2C55.028401&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D1045481742&z=16.37"
                                        width="600"
                                        height="550"
                                        frameborder="1"
                                        allowfullscreen="true"
                                        style="position:relative; border:0;">
                                    </iframe>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Скрипт для управления кнопкой отправки
            const consentCheckbox = document.getElementById('contact-consent-checkbox');
            const submitBtn = document.getElementById('submit-button');
        
            consentCheckbox.addEventListener('change', function() {
                submitBtn.disabled = !this.checked;
            });
        </script>
        <!-- End Contact Area -->

        <!-- Start Footer Area  -->
        <x-footer />
        <!-- End Footer Area  -->

        <!-- Start Copy Right Area  -->
        <x-copyright />
        <!-- End Copy Right Area  -->

        <!--back to top -->
        <x-backtotop />

    </main>

    <!-- script -->
    <x-script />

</body>

</html>