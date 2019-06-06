<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>vKapuste</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
    <div id="dark"></div>

    <header class="main_menu home_menu" id="back">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#glavnaya" data-target="anchor">Главная</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#uslugi" data-target="anchor">Услуги</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#onas" data-target="anchor">О нас</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#video" data-target="anchor">Работы</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#otzyvy" data-target="anchor">Отзывы</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#svyaz" data-target="anchor">Контакты</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="form-popup" id="myForm">
        <form id="form" method = "POST" class="form-container">
            <button type="button" class="cancel btn_1" onclick="closeForm()"><p>X</p></button>
            <h1>СВЯЖИТЕСЬ С НАМИ!</h1>
            Имя :   <input type="text" name="name" require><br/>
            Телефон :   <input type="text" name="phone" require><br/>
            Сообщение:   <input type="text" name="text" require><br/>
            <button>Submit</button>
        </form>
      </div>

      




    <section class="banner_part" id="glavnaya" style="margin-top: -5rem">
        <div class="container">
            
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Фото и видеосъемка с пеленок! </h5>
                            <h1>Более 2 500 Малышей было отснято за 2 года!</h1>
                            <p>Аксессуары для сохранения счастливых мгновений каждого Малыша!</p>
                            <a href="#" class="btn_1">Узнать больше </a>
                            <a href="#" class="btn_2" onclick="openForm()">Связаться </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="member_counter" style="margin-bottom: 2rem; margin-top: -5rem" id="count">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">2500</span>
                        <h4>Lorem</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">1000</span>
                        <h4>Lorem</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">1020</span>
                        <h4>Lorem</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">2500</span>
                        <h4>Lorem</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    
    <section class="feature_part" id="uslugi">
        <div class="container">
            <div class="row" style="display:flex; justify-content: center; margin-top: 0rem">
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-light-bulb"></i></span>
                            <h4>LOREM IPSUM</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-light-bulb"></i></span>
                            <h4>LOREM IPSUM</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                            <h4>LOREM IPSUM</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial_part" id="video" style="margin-top: 5rem; margin-bottom: 4rem">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        
                        <h2>Наши Работы</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-12 col-xl-9 col-sm-12" style="display:flex; align-items: center; justify-content:center">
                                        <iframe width="720" height="315"
                                        src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>                                
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial_slider">
                                <div class="row">
                                        <div class="col-lg-12 col-xl-9 col-sm-12" style="display:flex; align-items: center; justify-content:center">
                                                <iframe width="720" height="315"
                                                src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                                </iframe>                                
                                            </div>
                                    </div>
                                </div>
                            <div class="testimonial_slider">
                                <div class="row">
                                        <div class="col-lg-12 col-xl-9 col-sm-12" style="display:flex; align-items: center; justify-content:center">
                                                <iframe width="720" height="315"
                                                src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                                </iframe>                                
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <section class="learning_part" id="onas">
        <div class="container">
            <div class="row align-items-sm-center align-items-lg-stretch">
                <div class="col-md-7 col-lg-7">
                    <div class="learning_img">
                        <img src="img/shooting.png" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="learning_member_text">
                        <h5>О нас</h5>
                        <h2>LOREM IPSUM</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <ul>
                            <li><span class="ti-pencil-alt"></span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                            <li><span class="ti-ruler-pencil"></span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                        </ul>
                        <a href="#" class="btn_1">Связаться</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="testimonial_part" id="otzyvy">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>Счастливые Клиенты</p>
                        <h2>Отзывы о нас</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-12 col-xl-7 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <h4>Киря</h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_3.png" alt="#">
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="testimonial_slider">
                                <div class="row">
                                    <div class="col-lg-12 col-xl-7 col-sm-8 align-self-center">
                                        <div class="testimonial_slider_text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <h4>Киря</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-2 col-sm-4">
                                        <div class="testimonial_slider_img">
                                            <img src="img/testimonial_img_3.png" alt="#">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-7 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <h4>Киря</h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_3.png" alt="#">
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="footer-area" id="svyaz" style="margin-top: 25px">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-8 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>СВЯЖИТЕСЬ С НАМИ</h4>
                        <p>Отправьте нам ваш номер и мы обязательно вам перезвоним
                        </p>
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Введите ваше имя'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Введите ваше имя'">
                                    
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Введите ваш телефон'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Введите ваш телефон'">
                                    <div class="input-group-append">
                                        <button class="btn btn_1" type="button"><i class="ti-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="social_icon">
                            <a href="#"> <i class="ti-facebook"></i> </a>
                            <a href="#"> <i class="ti-twitter-alt"></i> </a>
                            <a href="#"> <i class="ti-instagram"></i> </a>
                            <a href="#"> <i class="ti-skype"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Наши контакты</h4>
                        <div class="contact_info">
                            <p><span> Адрес :</span> старана город улица дом </p>
                            <p><span> Телефон :</span> +12345678</p>
                            <p><span> Email : </span>info@mail.ry </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p>
                                    Created by Niyara Muradova
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="common.js"></script>
    <script src="js/popup.js"></script>
    <script src="js/animation.js" defer></script>
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/masonry.pkgd.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>