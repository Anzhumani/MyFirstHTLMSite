<!-- Start Footer Area  -->
<footer class="rainbow-footer footer-style-default footer-style-3 position-relative">
    <div class="chatenai-separator has-position-top">
        <img class="w-100 separator-dark" src="{{ asset('assets/images/separator/separator-top.svg') }}" alt="separator">
        <img class="w-100 separator-light" src="{{ asset('assets/images/light/separator/separator-top.svg') }}" alt="separator">
    </div>
    <div class="footer-top">
        <div class="container">
            <div class="row justify-content-center mb--30">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="rainbow-footer-widget text-center">
                        <div class="logo">
                            <a href="{{ route('index') }}">
                                <img class="logo-light" src="{{ asset('assets/images/logo/logo.png') }}" alt="Corporate Logo">
                                <img class="logo-dark m-auto" src="{{ asset('assets/images/logo/logo-dark.png') }}" alt="Corporate Logo">
                            </a>
                        </div>
                        <p class="b1 text-center mt--20 mb--0">Робоинновации — автоматизация общения с клиентами без лишних затрат</p>
                    </div>
                </div>
            </div>
            <div class="separator-animated animated-true mt--50 mb--50"></div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="rainbow-footer-widget">
                        <h4 class="title">Заказать обратный звонок</h4>
                        <div class="inner">
                            <h6 class="subtitle">
                                <div class="rbt-checkbox-wrapper">
                                    <input id="rbt-checkbox-1" name="consent" type="checkbox" value="yes" required>
                                    <label for="rbt-checkbox-1">
                                        Я согласен с 
                                        <a href="URL_СТРАНИЦЫ_С_ПРАВИЛАМИ" target="_blank">правилами обработки персональных данных</a>
                                    </label>
                                </div>
                            </h6>
                            <form class="newsletter-form" action="/callback-requests" method="POST">
                                @csrf
                                <div class="form-group" style="position: relative;">
                                    <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); font-size: 14px;"></span>
                                    <input
                                        type="tel"
                                        name="phone_number"
                                        placeholder="Ваш номер телефона"
                                        pattern="^(\+7\d{10}|7\d{10}|8\d{10}|\d{10})$"
                                        required
                                        inputmode="tel"
                                        onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode === 43"
                                        title="10 цифр, 11 цифр с 8, +7"
                                        style="padding-left: 10px;"
                                    />
                                    <button class="btn-default bg-solid-primary" type="submit" disabled>
                                        <i class="feather-arrow-right"></i>
                                    </button>
                                </div>
                            </form>
                            <script>
                                const checkbox = document.getElementById('rbt-checkbox-1');
                                const submitButton = document.querySelector('.newsletter-form button');
                                
                                checkbox.addEventListener('change', function() {
                                    submitButton.disabled = !this.checked;
                                });
                            </script>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="rainbow-footer-widget">
                        <div class="widget-menu-top">
                            <h4 class="title">Services</h4>
                            <div class="inner">
                                <ul class="footer-link link-hover">
                                    <li><a href="{{ route('imageGenerator') }}">Image Generator</a></li>
                                    <li><a href="{{ route('vedioGenerator') }}">Video Generator</a></li>
                                    <li><a href="{{ route('textGenerator') }}">Text Generator</a></li>
                                    <li><a href="{{ route('codeGenerator') }}">Code Generator</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="rainbow-footer-widget">
                        <div class="widget-menu-bottom">
                            <h4 class="title">Products</h4>
                            <div class="inner">
                                <ul class="footer-link link-hover">
                                    <li><a href="{{ route('utilize') }}">About</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                    <li><a href="{{ route('roadmap') }}">Roadmap</a></li>
                                    <li><a href="{{ route('termsPolicy') }}">Terms Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="rainbow-footer-widget">
                        <div class="widget-menu-top">
                            <h4 class="title">Company</h4>
                            <div class="inner">
                                <ul class="footer-link link-hover">
                                    <li><a href="#">Corporate</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">SEO Agency</a></li>
                                    <li><a href="#">Web Agency</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="rainbow-footer-widget">
                        <div class="widget-menu-bottom">
                            <h4 class="title">Solutions</h4>
                            <div class="inner">
                                <ul class="footer-link link-hover">
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="{{ route('team') }}">Testimonial</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                    <li><a href="{{ route('roadmap') }}">Roadmap</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area  -->