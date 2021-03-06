<!DOCTYPE html>
 <html lang="{{ app()->getLocale() }}">
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta charset="UTF-8" />
     <title>DIPOS.UZ | Автоматизация торговли </title>
     <meta name="viewport" content="width=device-width, initial-scale=1" />
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <meta name="description" content="DIPOS - Cовременная автоматизация торговли" />
     <meta name="keywords" content="" />

     <!-- For Mobile Ads-->
     <meta property="og:title" content="ООО «POINT OF SALE»" /> 
     <meta property="og:description" content="Cовременная автоматизация торговли" /> 
     <meta property="og:url" content="http://dipos.uz/" />
     <meta property="og:image" content="http://dipos.uz/assets/images/web_hi_res_512.png" />
     <meta property="og:site_name" content="ООО «POINT OF SALE»" /> 
    
     <link rel="stylesheet" href="/assets/css/animate.css" />
     <link rel="stylesheet" href="/assets/css/lightcase.css" />
     <link rel="stylesheet" href="/assets/css/simple-line-icons.css" />
     <link rel="stylesheet" href="/assets/css/ElegantIcons.css" />
     <link rel="stylesheet" href="/assets/css/swiper.min.css" />
     <link rel="stylesheet" href="/assets/css/font-awesome.min.css" />
     <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
     <link rel="stylesheet" href="/assets/css/style.css" />
     <link rel="stylesheet" href="/assets/css/home-7-style.css" />
     <link rel="stylesheet" href="/assets/css/responsive.css" />
 </head>
 <body data-spy="scroll" data-target=".navbar">
     <header class="header">
         <nav class="navbar navbar-expand-lg fixed-top" id="main-nav">
             <div class="container">
                 <a class="navbar-brand" href="#">
                     <img class="white-logo" src="/assets/images/logo-bd.png" alt="" />
                     <img class="color-logo" src="/assets/images/logo.png" alt="" />
                 </a>
                 <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#main-nav-collapse" aria-controls="main-nav-collapse" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="menu-toggle">
                         <span class="hamburger">
                             <span></span>
                             <span></span>
                             <span></span>
                         </span>
                         <span class="hamburger-cross">
                             <span></span>
                             <span></span>
                         </span>
                     </span>
                 </button>
                 <div class="collapse navbar-collapse order-3 order-lg-2" id="main-nav-collapse">
                     <ul class="navbar-nav ml-auto">
                         <!-- <li class="nav-item">
                             <a class="nav-link nav-link-scroll" href="home-7.html"> Главное </a>
                         </li> -->
                         <li class="nav-item">
                             <a class="nav-link nav-link-scroll" href="#feature">Возможности </a>
                         </li>
                         <li class="nav-item active">
                             <a class="nav-link nav-link-scroll" href="#pricing">Тарифы </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link nav-link-scroll" href="#download">Скачать </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link nav-link-scroll" href="#contact">Оставить заявку </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link nav-link-scroll" href="http://dipos.uz:8080" target="_blank">Вход в систему </a>
                         </li>
                     </ul>
                 </div>
                 <!-- <div class="nav-search order-2 order-lg-3">
                     <i class="fa fa-search"></i>
                 </div> -->
             </div>
         </nav>
     </header><!-- header -->
     <section class="home-7-banner main-banner" id="banner">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-6 col-md-7">
                     <div class="banner-content">
                         <div class="">
                             <h2 class="title wow fadeInUp" data-wow-duration=".65s" data-wow-delay=".1s">DIPOS современная автоматизация торговли</h2>
                         </div>
                         <div class="">
                             <span class="sub-title wow fadeInUp" data-wow-duration=".65s" data-wow-delay=".3s">Решение для учета товаров и финансов. Онлайн касса. </span>
                         </div>
                         <div class="btn-wrapper ">
                             <a class="btn store-btn fill-style wow fadeInUp" data-wow-duration=".65s" data-wow-delay=".4s" href="/files/app/sprint_1.20.7.apk"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="26px"><path fill-rule="evenodd" fill="rgb(96, 56, 247)" d="M19.618,13.605 L15.283,16.531 L12.240,13.090 L15.570,9.324 L19.618,12.058 C19.857,12.219 20.000,12.508 20.000,12.832 C20.000,13.154 19.857,13.442 19.618,13.605 ZM0.662,-0.003 L10.427,5.850 L14.882,8.859 L11.691,12.469 L0.662,-0.003 ZM-0.000,25.689 L0.010,0.502 L11.142,13.090 L-0.000,25.689 ZM14.596,16.996 L10.443,19.799 L0.824,25.998 L11.691,13.710 L14.596,16.996 Z"></path></svg>  <span>Google Play </span></a>
                             <!-- <a class="btn store-btn wow fadeInUp" data-wow-duration=".65s" data-wow-delay=".6s" href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21px" height="24px"><path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M18.423,9.825 C17.802,10.691 17.490,11.644 17.490,12.687 C17.490,13.828 17.820,14.856 18.481,15.769 C19.141,16.681 19.897,17.262 20.749,17.510 C20.376,18.662 19.787,19.814 18.983,20.967 C17.749,22.773 16.519,23.675 15.294,23.675 C14.825,23.675 14.155,23.527 13.284,23.233 C12.461,22.938 11.738,22.792 11.116,22.792 C10.532,22.792 9.853,22.943 9.077,23.248 C8.302,23.561 7.671,23.716 7.182,23.716 C5.728,23.716 4.287,22.524 2.861,20.138 C1.454,17.732 0.751,15.414 0.751,13.184 C0.751,11.082 1.292,9.360 2.373,8.014 C3.445,6.687 4.804,6.023 6.450,6.023 C7.139,6.023 7.986,6.162 8.991,6.438 C9.987,6.715 10.647,6.854 10.973,6.854 C11.403,6.854 12.088,6.696 13.026,6.384 C14.002,6.071 14.830,5.913 15.509,5.913 C16.648,5.913 17.667,6.213 18.567,6.811 C19.065,7.143 19.562,7.605 20.060,8.194 C19.304,8.812 18.759,9.355 18.423,9.825 ZM13.600,5.084 C13.083,5.581 12.566,5.913 12.049,6.080 C11.695,6.181 11.197,6.259 10.556,6.314 C10.585,4.940 10.958,3.757 11.676,2.761 C12.384,1.776 13.581,1.093 15.265,0.715 C15.275,0.743 15.287,0.794 15.301,0.867 C15.315,0.941 15.327,0.992 15.337,1.020 C15.337,1.057 15.339,1.102 15.344,1.157 C15.349,1.213 15.351,1.259 15.351,1.297 C15.351,1.858 15.212,2.486 14.935,3.175 C14.648,3.867 14.203,4.503 13.600,5.084 Z"></path></svg>  <span>App Store </span></a> -->
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6 col-md-5 banner-img-wrapper banner-7-img-wrapper">
                     <img src="assets/images/banner-mobile5.png" class="banner-img-1 wow slideInRightAlt" data-wow-delay=".2s" alt="" />
                     <img src="assets/images/banner-mobile6.png" class="banner-img-2 wow slideInUpAlt" alt="" />
                 </div>
             </div>
         </div>
         <span class="scroll-next-sec">
             <i class="arrow_down"></i>
         </span>
     </section><!-- banner -->
     <section class="feature">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-lg-4">
                     <div class="icon-box style-boxed">
                         <div class="icon-box-icon">
                             <i class="icon_pencil-edit"></i>
                         </div>
                         <div class="icon-box-details">
                             <h3 class="icon-box-title">Адаптация под бизнес </h3>
                             <p>Наши специалисты учитывают специфику бизнеса заказчика перед внедрением POS-системы. </p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <div class="icon-box style-boxed">
                         <div class="icon-box-icon">
                             <i class="icon_easel"></i>
                         </div>
                         <div class="icon-box-details">
                             <h3 class="icon-box-title">Аналитика и отчетность </h3>
                             <p>Аналитика поможет планировать закупки и вовремя пополнять запасы на складе и в магазине.</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <div class="icon-box style-boxed">
                         <div class="icon-box-icon">
                             <i class="icon_lightbulb_alt"></i>
                         </div>
                         <div class="icon-box-details">
                             <h3 class="icon-box-title">Программа лояльности </h3>
                             <p>Кассовая программа позволяет давать и списывать персональные и накопительные скидки. </p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section><!-- feature -->
     <section class="h7-about s-padding">
         <div class="container">
             <div class="row">
                 <div class="col-lg-5">
                     <div class="about-content">
                         <h2>Анализируйте свой магазин посредством Telegram-бота</h2>
                         <p>Отслеживайте в реальном времени продажи, выручку, почековый отчет по всем торговым точкам и кассовым сменам, через удобный интерфейс. </p>
                         <ul class="a-line-list">
                             <li>
                                 <i class="arrow_carrot-right"></i>
                                 <span>Информативный Z-отчет </span>
                                 <img class="wow fadeIn" data-wow-delay=".7s" src="assets/images/a-line1.png" alt="" />
                             </li>
                             <li>
                                 <i class="arrow_carrot-right"></i> 
                                 <span>Выручка от реализации по дням </span>
                                 <img class="wow fadeIn" data-wow-delay="1s" src="assets/images/a-line2.png" alt="" />
                             </li>
                             <li>
                                 <i class="arrow_carrot-right"></i> 
                                 <span>Самые продаваемые товары </span>
                                 <img class="wow fadeIn" data-wow-delay="1.3s" src="assets/images/a-line3.png" alt="" />
                             </li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-lg-7">
                     <div class="h7-about-img-wrapper">
                         <img src="assets/images/about-img7.png" class="about-img1 wow slideInRightAlt" alt="" />
                     </div>
                 </div>
             </div>
         </div>
         <div class="floating-shapes">
             <span data-parallax='{"x": 150, "y": -20, "rotateZ":500}'><img src="/assets/images/fl-shape-1.png" alt="" /></span>
             <span data-parallax='{"x": 250, "y": 150, "rotateZ":500}'><img src="/assets/images/fl-shape-2.png" alt="" /></span>
             <span data-parallax='{"x": -180, "y": 80, "rotateY":2000}'><img src="/assets/images/fl-shape-3.png" alt="" /></span>
             <span data-parallax='{"x": -20, "y": 180}'><img src="/assets/images/fl-shape-4.png" alt="" /></span>
             <span data-parallax='{"x": 300, "y": 70}'><img src="/assets/images/fl-shape-5.png" alt="" /></span>
             <span data-parallax='{"x": 250, "y": 180, "rotateZ":1500}'><img src="/assets/images/fl-shape-6.png" alt="" /></span>
             <span data-parallax='{"x": 180, "y": 10, "rotateZ":2000}'><img src="/assets/images/fl-shape-7.png" alt="" /></span>
             <span data-parallax='{"x": 250, "y": -30, "rotateX":2000}'><img src="/assets/images/fl-shape-8.png" alt="" /></span>
             <span data-parallax='{"x": 60, "y": -100}'><img src="/assets/images/fl-shape-9.png" alt="" /></span>
             <span data-parallax='{"x": -30, "y": 150, "rotateZ":1500}'><img src="/assets/images/fl-shape-10.png" alt="" /></span>
         </div>
     </section><!-- about -->
     <section class="h7-awesome-feature bg-color s-padding" id="feature">
         <div class="container">
             <div class="s-title">
                 <h2 class="wow">Дополнительные возможности </h2>
                 <p></p>
             </div>
             <div class="row align-items-center justify-content-center">
                 <div class="col-lg-3">
                     <div class="ovh">
                         <div class="icon-box text-center text-lg-right awf-item  wow slideInUp">
                             <div class="icon-box-icon">
                                 <i class="icon_drawer_alt"></i>
                             </div>
                             <div class="icon-box-details">
                                 <h3 class="icon-box-title">Интеграция с поставщиками </h3>
                                 <p>Мы предоставляем возможность интеграции с крупнейшними поставщиками товаров для розничной торговли. </p>
                             </div>
                         </div>
                     </div>
                     <div class="ovh">
                         <div class="icon-box text-center text-lg-right awf-item mb-0 wow slideInUp" data-wow-delay=".1s">
                             <div class="icon-box-icon">
                                 <i class="icon_cloud-upload_alt"></i>
                             </div>
                             <div class="icon-box-details">
                                 <h3 class="icon-box-title">Автоматизация <br />складского учета </h3>
                                 <p> - Отслеживание остатков в реальном времени;<br />
                                     - Печать ценников (этикеток);<br />
                                     - Заказы на закупку поставщикам;<br />
                                     - Формирование онлайн-заказов. <br /> </p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <div class="awesome-feature-img">
                         <img src="assets/images/feature-m3.png" alt="" />
                     </div>
                 </div>
                 <div class="col-lg-3">
                     <div class="ovh">
                         <div class="icon-box text-lg-left text-center awf-item wow slideInUp">
                             <div class="icon-box-icon">
                                 <i class="icon_ribbon_alt"></i>
                             </div>
                             <div class="icon-box-details">
                                 <h3 class="icon-box-title">Учёт в мобильном телефоне </h3>
                                 <p>– Отслеживайте основные показатели бизнеса;<br />
                                     – Фиксируйте расходы, увеличивайте продажи;<br />
                                     – Контролируйте движение денежных средств.</p>
                             </div>
                         </div>
                     </div>
                     <div class="ovh">
                         <div class="icon-box text-lg-left text-center awf-item mb-0 wow slideInUp" data-wow-delay=".1s">
                             <div class="icon-box-icon">
                                 <i class="icon_headphones"></i>
                             </div>
                             <div class="icon-box-details">
                                 <h3 class="icon-box-title">Круглосуточная<br /> поддержка</h3>
                                 <p>Свяжитесь с нашей круглосуточной службой поддержки и получите
                                     необходимую помощь удобным для вас способом — онлайн чат, email или звонок. </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section><!-- awesome-feature -->
     <!--
<section class="h7-app-screenshot s-padding" id="screenshot">
    <div class="container">
        <div class="s-title">
            <h2>Онлайн-кассы </h2>
            <p>Готовые комплекты оборудования </p>
        </div>
        <div class="row app-screenshot-slider-row">
            <div class="col-12">
                <div class="swiper-container app-screenshot-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="app-screenshot-item">
                                <a href="assets/images/screenshot1.jpg" data-rel="lightbox-popup:screenshot"><img src="assets/images/screenshot1.jpg" alt="" /></a>
                                <div class="asi-icon-wr"><span class="asi-icon"><i class="icon_plus"></i></span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="app-screenshot-item">
                                <a href="assets/images/screenshot2.jpg" data-rel="lightbox-popup:screenshot"><img src="assets/images/screenshot2.jpg" alt="" /></a>
                                <div class="asi-icon-wr"><span class="asi-icon"><i class="icon_plus"></i></span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="app-screenshot-item">
                                <a href="assets/images/screenshot3.jpg" data-rel="lightbox-popup:screenshot"><img src="assets/images/screenshot3.jpg" alt="" /></a>
                                <div class="asi-icon-wr"><span class="asi-icon"><i class="icon_plus"></i></span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="app-screenshot-item">
                                <a href="assets/images/screenshot4.jpg" data-rel="lightbox-popup:screenshot"><img src="assets/images/screenshot4.jpg" alt="" /></a>
                                <div class="asi-icon-wr"><span class="asi-icon"><i class="icon_plus"></i></span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="app-screenshot-item">
                                <a href="assets/images/screenshot2.jpg" data-rel="lightbox-popup:screenshot"><img src="assets/images/screenshot2.jpg" alt="" /></a>
                                <div class="asi-icon-wr"><span class="asi-icon"><i class="icon_plus"></i></span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="app-screenshot-item">
                                <a href="assets/images/screenshot3.jpg" data-rel="lightbox-popup:screenshot"><img src="assets/images/screenshot3.jpg" alt="" /></a>
                                <div class="asi-icon-wr"><span class="asi-icon"><i class="icon_plus"></i></span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="app-screenshot-item">
                                <a href="assets/images/screenshot4.jpg" data-rel="lightbox-popup:screenshot"><img src="assets/images/screenshot4.jpg" alt="" /></a>
                                <div class="asi-icon-wr"><span class="asi-icon"><i class="icon_plus"></i></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>

</section>
app-screenshot-->
<!-- <section class="h7-fun-fact s-padding bg-img bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                    <div class="counter-item-icon">
                        <i class="icon-cloud-download"></i>
                    </div>
                    <div class="counter-item-count"><span class="counter-count">2400</span></div>
                    <h4>Скачиваний App </h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                    <div class="counter-item-icon">
                        <i class="icon-like"></i>
                    </div>
                    <div class="counter-item-count"><span class="counter-count">120</span></div>
                    <h4>Довольных клиентов </h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                    <div class="counter-item-icon">
                        <i class="icon-star"></i>
                    </div>
                    <div class="counter-item-count"><span class="counter-count">10 </span><span>+ </span></div>
                    <h4>Рейтинг</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                    <div class="counter-item-icon">
                        <i class="icon-people"></i>
                    </div>
                    <div class="counter-item-count"><span class="counter-count">99 </span><span>% </span></div>
                    <h4>Положительных отзывов</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="h7-video-sec bg-color">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="video-img-area">
                    <img src="assets/images/img2.jpg" alt="" />
                    <div class="video-play-btn">
                        <a href="https://player.vimeo.com/video/62742116" data-rel="lightbox-popup"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="20px">
                        <path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M-0.001,1.104 C-0.001,2.027 -0.001,18.234 -0.001,18.872 C-0.001,19.698 0.872,20.312 1.734,19.829 C2.425,19.442 13.233,11.631 14.411,10.962 C15.185,10.523 15.172,9.478 14.411,9.038 C13.563,8.548 2.702,0.697 1.699,0.152 C0.964,-0.247 -0.001,0.194 -0.001,1.104 Z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> video sec
<section class="h7-faq-sec s-padding bg-color" id="faq">
    <div class="s-title">
        <h2>Frequently Asked </h2>
        <p>Ut totam hymenaeos aenim, duis erat mollitia,_ac metus! </p>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="img-wrapper">
                    <img class="wow slideInLeft" src="assets/images/faq-img2.png" alt="" />
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="accordion accordion-style-2" id="iconicAccordion">
                      <div class="card accordion-item">
                           <div class="accordion-header" id="accordionHeading1">
                              <h5 class="mb-0">
                                <button class="accordion-btn" type="button" data-toggle="collapse" data-target="#accordionItem1" aria-expanded="true" aria-controls="accordionItem1">
                                    <span class="accordion-icon"><i class="icon-settings"></i></span>
                                    <span class="accordion-title">This is a simple? </span>
                                    <span class="accordion-arrow"><i class="acco-toggle-icon"></i></span>
                                </button>
                              </h5>
                        </div>

                        <div id="accordionItem1" class="collapse show" aria-labelledby="accordionHeading1" data-parent="#iconicAccordion">
                              <div class="card-body accordion-body">
                               Think _bandwidth academic; effective then circular paradigm deep dive.__support inclusion, entrepreneur ideate; _incarceration social return on__ collective.!
                              </div>
                        </div>
                      </div>
                      <div class="card accordion-item">
                        <div class="accordion-header" id="accordionHeading2">
                              <h5 class="mb-0">
                                <button class="accordion-btn collapsed" type="button" data-toggle="collapse" data-target="#accordionItem2" aria-expanded="false" aria-controls="accordionItem2">
                                      <span class="accordion-icon"><i class="icon-support"></i></span>
                                    <span class="accordion-title">Is there 24/7 customer? </span>
                                    <span class="accordion-arrow"><i class="acco-toggle-icon"></i></span>
                                </button>
                              </h5>
                        </div>
                        <div id="accordionItem2" class="collapse" aria-labelledby="accordionHeading2" data-parent="#iconicAccordion">
                              <div class="card-body accordion-body">
                               Think _bandwidth academic; effective then circular paradigm deep dive.__support inclusion, entrepreneur ideate; _incarceration social return on__ collective.!
                              </div>
                        </div>
                      </div>
                      <div class="card accordion-item">
                        <div class="accordion-header" id="accordionHeading3">
                              <h5 class="mb-0">
                                <button class="accordion-btn collapsed" type="button" data-toggle="collapse" data-target="#accordionItem3" aria-expanded="false" aria-controls="accordionItem3">
                                      <span class="accordion-icon"><i class="icon-rocket"></i></span>
                                    <span class="accordion-title">Ea commodo Consequat? </span>
                                    <span class="accordion-arrow"><i class="acco-toggle-icon"></i></span>
                                </button>
                              </h5>
                        </div>
                        <div id="accordionItem3" class="collapse" aria-labelledby="accordionHeading3" data-parent="#iconicAccordion">
                              <div class="card-body accordion-body">
                               Think _bandwidth academic; effective then circular paradigm deep dive.__support inclusion, entrepreneur ideate; _incarceration social return on__ collective.!
                              </div>
                        </div>
                      </div>
                      <div class="card accordion-item">
                        <div class="accordion-header" id="accordionHeading4">
                              <h5 class="mb-0">
                                <button class="accordion-btn collapsed" type="button" data-toggle="collapse" data-target="#accordionItem4" aria-expanded="false" aria-controls="accordionItem4">
                                      <span class="accordion-icon"><i class="icon-diamond"></i></span>
                                    <span class="accordion-title">Amet Consequateta Adipisicing? </span>
                                    <span class="accordion-arrow"><i class="acco-toggle-icon"></i></span>
                                </button>
                              </h5>
                        </div>
                        <div id="accordionItem4" class="collapse" aria-labelledby="accordionHeading4" data-parent="#iconicAccordion">
                              <div class="card-body accordion-body">
                               Think _bandwidth academic; effective then circular paradigm deep dive.__support inclusion, entrepreneur ideate; _incarceration social return on__ collective.!
                              </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- faq-->
<section class="pricing s-padding" id="pricing">
    <div class="container">
        <div class="s-title">
            <h2>Наши тарифы </h2>
            <p>Стоимость решения DIPOS</p>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="pricing-tables-wrapper">
                    <ul class="nav nav-tabs pricing-tab" id="pricing-tab" role="tablist">
                        <li class="nav-item">
                            <a class=" active" id="monthly-pricing" data-toggle="tab" href="#monthly-pricing-tables" role="tab">Ежемесячно </a>
                          </li>
                          <li class="nav-item">
                            <a class="" id="yearly-pricing" data-toggle="tab" href="#yearly-pricing-tables" role="tab">Ежегодно</a>
                          </li>
                    </ul>
                    <div class="tab-content" id="pricing-tab-content">
                          <div class="tab-pane fade show active" id="monthly-pricing-tables" role="tabpanel" aria-labelledby="monthly-pricing">
                              <div class="row">
                                  <div class="col-lg-4">
                                      <div class="pricing-table">
                                          <div class="pricing-head">
                                              <h2 class="title">Эконом тариф</h2>
                                              <span class="sub-title">1 пользователь, 1 касса </span>

                                          </div>
                                          <div class="pricing-price">
                                              <span class="price-tag">
                                                  <span class="price-currency">100.000 </span>UZS
                                              </span>
                                              <span class="price-period">/в месяц </span>
                                          </div>
                                          <div class="pricing-body">
                                              <ul>
                                                  <li><i class="icon_check"></i> Онлайн-касса DIPOS </li>
                                                  <li><i class="icon_check"></i> Справочник товаров </li>
                                                  <li><i class="icon_close"></i> Складской учёт </li>
                                                  <li><i class="icon_close"></i> Движение денег, банки </li>
                                                  <li><i class="icon_close"></i> Клиенты и лояльность </li>
                                                  <li><i class="icon_close"></i> Онлайн веб-кабинет </li>
                                                  <li><i class="icon_close"></i> Онлайн весы </li>
                                                  <li><i class="icon_close"></i> Telegram-bot </li>
                                              </ul>
                                          </div>
                                          <div class="pricing-footer">
                                              <a href="#">Выбрать</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-4">
                                      <div class="pricing-table featured">
                                          <div class="pricing-badge">
                                              <span class="badge-name">Популярный </span>
                                          </div>
                                          <div class="pricing-head">
                                              <h2 class="title">Базовый тариф </h2>
                                              <span class="sub-title">2 пользователя, 1 касса </span>

                                          </div>
                                          <div class="pricing-price">
                                              <span class="price-tag">
                                                  <span class="price-currency">200.000 </span>UZS
                                              </span>
                                              <span class="price-period">/в месяц </span>
                                          </div>
                                          <div class="pricing-body">
                                              <ul>
                                                  <li><i class="icon_check"></i> Онлайн-касса DIPOS </li>
                                                  <li><i class="icon_check"></i> Справочник товаров </li>
                                                  <li><i class="icon_check"></i> Складской учёт </li>
                                                  <li><i class="icon_check"></i> Движение денег, банки </li>
                                                  <li><i class="icon_check"></i> Клиенты и лояльность </li>
                                                  <li><i class="icon_check"></i> Онлайн веб-кабинет </li>
                                                  <li><i class="icon_close"></i> Онлайн весы </li>
                                                  <li><i class="icon_close"></i> Telegram-bot </li>
                                              </ul>
                                          </div>
                                          <div class="pricing-footer">
                                              <a href="#">Выбрать </a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-4">
                                      <div class="pricing-table">
                                          <div class="pricing-head">
                                              <h2 class="title">Корпоративный </h2>
                                              <span class="sub-title">3 пользователя, 2 кассы </span>
                                          </div>
                                          <div class="pricing-price">
                                              <span class="price-tag">
                                                  <span class="price-currency">400.000 </span>UZS
                                              </span>
                                              <span class="price-period">/в месяц </span>
                                          </div>
                                          <div class="pricing-body">
                                              <ul>
                                                  <li><i class="icon_check"></i> Онлайн-касса DIPOS </li>
                                                  <li><i class="icon_check"></i> Справочник товаров </li>
                                                  <li><i class="icon_check"></i> Складской учёт </li>
                                                  <li><i class="icon_check"></i> Движение денег, банки </li>
                                                  <li><i class="icon_check"></i> Клиенты и лояльность </li>
                                                  <li><i class="icon_check"></i> Онлайн веб-кабинет </li>
                                                  <li><i class="icon_check"></i> Онлайн весы </li>
                                                  <li><i class="icon_check"></i> Telegram-bot </li>
                                              </ul>
                                          </div>
                                          <div class="pricing-footer">
                                              <a href="#">Выбрать</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane fade" id="yearly-pricing-tables" role="tabpanel" aria-labelledby="yearly-pricing">
                              <div class="row">
                                  <div class="col-lg-4">
                                      <div class="pricing-table">
                                          <div class="pricing-head">
                                              <h2 class="title">Эконом тариф</h2>
                                              <span class="sub-title">1 пользователь, 1 касса </span>

                                          </div>
                                          <div class="pricing-price">
                                              <span class="price-tag">
                                                  <span class="price-currency">1.000.000 </span>UZS
                                              </span>
                                              <span class="price-period">/в год </span>
                                          </div>
                                          <div class="pricing-body">
                                              <ul>
                                                  <li><i class="icon_check"></i> Онлайн-касса DIPOS </li>
                                                  <li><i class="icon_check"></i> Справочник товаров </li>
                                                  <li><i class="icon_close"></i> Складской учёт </li>
                                                  <li><i class="icon_close"></i> Движение денег, банки </li>
                                                  <li><i class="icon_close"></i> Клиенты и лояльность </li>
                                                  <li><i class="icon_close"></i> Онлайн веб-кабинет </li>
                                                  <li><i class="icon_close"></i> Онлайн весы </li>
                                                  <li><i class="icon_close"></i> Telegram-bot </li>
                                              </ul>
                                          </div>
                                          <div class="pricing-footer">
                                              <a href="#">Выбрать</a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-4">
                                      <div class="pricing-table featured">
                                          <div class="pricing-badge">
                                              <span class="badge-name">Популярный </span>
                                          </div>
                                          <div class="pricing-head">
                                              <h2 class="title">Базовый тариф </h2>
                                              <span class="sub-title">2 пользователя, 1 касса </span>
                                          </div>
                                          <div class="pricing-price">
                                              <span class="price-tag">
                                                  <span class="price-currency">2.000.000 </span>UZS
                                              </span>
                                              <span class="price-period">/в год </span>
                                          </div>
                                          <div class="pricing-body">
                                              <ul>
                                                  <li><i class="icon_check"></i> Онлайн-касса DIPOS </li>
                                                  <li><i class="icon_check"></i> Справочник товаров </li>
                                                  <li><i class="icon_check"></i> Складской учёт </li>
                                                  <li><i class="icon_check"></i> Движение денег, банки </li>
                                                  <li><i class="icon_check"></i> Клиенты и лояльность </li>
                                                  <li><i class="icon_check"></i> Онлайн веб-кабинет </li>
                                                  <li><i class="icon_check"></i> Онлайн весы </li>
                                                  <li><i class="icon_check"></i> Telegram-bot </li>
                                              </ul>
                                          </div>
                                          <div class="pricing-footer">
                                              <a href="#">Выбрать </a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-4">
                                      <div class="pricing-table">
                                          <div class="pricing-head">
                                              <h2 class="title">Корпоративный </h2>
                                              <span class="sub-title">3 пользователя, 2 кассы </span>
                                          </div>
                                          <div class="pricing-price">
                                              <span class="price-tag">
                                                  <span class="price-currency">3.200.000 </span>UZS
                                              </span>
                                              <span class="price-period">/в год </span>
                                          </div>
                                          <div class="pricing-body">
                                              <ul>
                                                  <li><i class="icon_check"></i> Онлайн-касса DIPOS </li>
                                                  <li><i class="icon_check"></i> Справочник товаров </li>
                                                  <li><i class="icon_check"></i> Складской учёт </li>
                                                  <li><i class="icon_check"></i> Движение денег, банки </li>
                                                  <li><i class="icon_check"></i> Клиенты и лояльность </li>
                                                  <li><i class="icon_check"></i> Онлайн веб-кабинет </li>
                                                  <li><i class="icon_check"></i> Онлайн весы </li>
                                                  <li><i class="icon_check"></i> Telegram-bot </li>
                                          </div>
                                          <div class="pricing-footer">
                                              <a href="#">Выбрать </a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- pricing
     <section class="testimonial s-padding bg-color">
         <div class="container">
             <div class="s-title">
                 <h2>What Customer Says </h2>
                 <p>Ut totam hymenaeos aenim, duis erat mollitia,_ac metus! </p>
             </div>
             <div class="row testimonial-slider-row">
                 <div class="col-12">
                     <div class="swiper-container testimonial-slider-2-item">
                         <div class="swiper-wrapper">
                             <div class="swiper-slide">
                                 <div class="testimonial-item style-4">
                                     <span class="quote-mark">,, </span>
                                     <div class="testimonial-content">Doloremque, ipsa recusandae velit omnis       minima ipsam, habitantnon justo, tellus occaecati,eleifend congue   lacinia, tincidunt___!
                                        
                                     </div>
                                     <div class="testimonial-meta">
                                         <div class="t-meta-info">
                                             <h4 class="reviewer-name">Jason Response  <span class="deg">/ web designer </span></h4>
                                             <div class="rating-star">
                                                 <i class=" icon_star_alt"></i>
                                                 <i class=" icon_star_alt"></i>
                                                 <i class=" icon_star_alt"></i>
                                                 <i class=" icon_star_alt"></i>
                                                 <i class=" icon_star_alt"></i>
                                                 <span>
                                                     <i class="icon_star"></i>
                                                     <i class="icon_star"></i>
                                                     <i class="icon_star"></i>
                                                     <i class="icon_star"></i>
                                                     <i class="icon_star-half_alt"></i>
                                                 </span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="testimonial-item style-4">
                                     <span class="quote-mark">,, </span>
                                     <div class="testimonial-content">Doloremque, ipsa recusandae velit omnis       minima ipsam, habitantnon justo, tellus occaecati,eleifend congue   lacinia, tincidunt___!
                                        
                                     </div>
                                     <div class="testimonial-meta">
                                         <div class="t-meta-info">
                                             <h4 class="reviewer-name">Nathaneal Down  <span class="deg">/ web designer </span></h4>
                                             <div class="rating-star">
                                                 <i class=" icon_star_alt"></i>
                                                 <i class=" icon_star_alt"></i>
                                                 <i class=" icon_star_alt"></i>
                                                 <i class=" icon_star_alt"></i>
                                                 <i class=" icon_star_alt"></i>
                                                 <span>
                                                     <i class="icon_star"></i>
                                                     <i class="icon_star"></i>
                                                     <i class="icon_star"></i>
                                                     <i class="icon_star"></i>
                                                     <i class="icon_star-half_alt"></i>
                                                 </span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="testimonial-item style-4">
                                     <span class="quote-mark">,, </span>
                                     <div class="testimonial-content">Doloremque, ipsa recusandae velit omnis       minima ipsam, habitantnon justo, tellus occaecati,eleifend congue   lacinia, tincidunt___!
                                        
                                     </div>
                                     <div class="testimonial-meta">
                                         <div class="t-meta-info">
                                             <h4 class="reviewer-name">Phillip Anthropy  <span class="deg">/ UI designer </span></h4>
                                             <div class="rating-star">
                                                 <i class=" icon_star_alt"></i>
                                                 <i class=" icon_star_alt"></i>
                                                 <i class=" icon_star_alt"></i>
                                                 <i class=" icon_star_alt"></i>
                                                 <i class=" icon_star_alt"></i>
                                                 <span>
                                                     <i class="icon_star"></i>
                                                     <i class="icon_star"></i>
                                                     <i class="icon_star"></i>
                                                     <i class="icon_star"></i>
                                                     <i class="icon_star-half_alt"></i>
                                                 </span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="testimonial-item style-4">
                                     <span class="quote-mark">,, </span>
                                     <div class="testimonial-content">Doloremque, ipsa recusandae velit omnis       minima ipsam, habitantnon justo, tellus occaecati,eleifend congue   lacinia, tincidunt___!
                                        
                                     </div>
                                     <div class="testimonial-meta">
                                         <div class="t-meta-info">
                                             <h4 class="reviewer-name">Jason Phillip  <span class="deg">/ web developer </span></h4>
                                             <div class="rating-star">
                                                 <i class=" icon_star_alt"></i>
                                                 <i class=" icon_star_alt"></i>
                                                 <i class=" icon_star_alt"></i>
                                                 <i class=" icon_star_alt"></i>
                                                 <i class=" icon_star_alt"></i>
                                                 <span>
                                                     <i class="icon_star"></i>
                                                     <i class="icon_star"></i>
                                                     <i class="icon_star"></i>
                                                     <i class="icon_star"></i>
                                                     <i class="icon_star-half_alt"></i>
                                                 </span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="swiper-pagination"></div>
                     </div>
                 </div>
             </div>
         </div>
     </section><!-- testimonial -->
     <section class="h7-get-the-app" id="download">
         <div class="animated-waves">
             <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="animated-wave">
                 <title>Wave </title>
                 <defs></defs>
                 <path id="animated-wave-one" d=""></path>
             </svg>
             <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="animated-wave">
                 <title>Wave </title>
                 <defs></defs>
                 <path id="animated-wave-two" d=""></path>
             </svg>
         </div>
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-6">
                     <div class="get-the-app-content">
                         <h2>Скачайте онлайн-кассу, DIPOS </h2>
                         <p>Оптимальное решения для торговли, включающее в себя систему управления торговлей и складами, мобильные и
                             стационарные кассы для физических точек продаж и онлайн-кассу. </p>
                         <div class="apps-store-btn-wrpper">
                             <a href="/files/app/sprint_1.20.7.apk" class="app-store-btn">
                                 <img src="assets/images/play-store-btn.png" alt="" />
                                 <img src="assets/images/play-store-btn-alt.png" alt="" />
                             </a>
                             <!-- <a href="#" class="app-store-btn">
                                 <img src="assets/images/app-store-btn.png" alt="" />
                                 <img src="assets/images/app-store-btn-alt.png" alt="" />
                             </a> -->
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 offset-lg-2">
                     <div class="h7-download-img">
                         <img class="gtp-img1 wow slideInLeftHalf" data-wow-delay="2s" src="assets/images/d-phone4.png" alt="" />
                         <img class="gtp-img2" src="assets/images/d-phone5.png" alt="" />
                     </div>
                 </div>
             </div>
         </div>
     </section><!-- get-the-app
     <section class="h7-team s-padding" id="team">
         <div class="container">
             <div class="s-title">
                 <h2>Innovative Team </h2>
                 <p>Ut totam hymenaeos aenim, duis erat mollitia,_ac metus! </p>
             </div>
             <div class="row">
                 <div class="col-lg-3 col-md-6">
                     <div class="team-member style-2">
                         <div class="member-img">
                             <img src="assets/images/team-4.jpg" alt="" />
                             <div class="member-about">Social enterprise, empower communities, vibrant revolutionary resist. Save world compassion triple bottom__.! </div>
                             <ul class="social-profile rounded">
                                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                 <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                             </ul>
                         </div>
                         <div class="member-details">
                             <h2 class="name">Malcolm Function </h2>
                             <span class="deg">UI/UX Designer </span>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6">
                     <div class="team-member style-2">
                         <div class="member-img">
                             <img src="assets/images/team-5.jpg" alt="" />
                             <div class="member-about">Social enterprise, empower communities, vibrant revolutionary resist. Save world compassion triple bottom__.! </div>
                             <ul class="social-profile rounded">
                                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                 <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                             </ul>
                         </div>
                         <div class="member-details">
                             <h2 class="name">Gustavo Purpleson </h2>
                             <span class="deg">Web developer </span>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6">
                     <div class="team-member style-2">
                         <div class="member-img">
                             <img src="assets/images/team-6.jpg" alt="" />
                             <div class="member-about">Social enterprise, empower communities, vibrant revolutionary resist. Save world compassion triple bottom__.! </div>
                             <ul class="social-profile rounded">
                                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                 <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                             </ul>
                         </div>
                         <div class="member-details">
                             <h2 class="name">Jason Garrett </h2>
                             <span class="deg">App designer </span>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6">
                     <div class="team-member style-2">
                         <div class="member-img">
                             <img src="assets/images/team-7.jpg" alt="" />
                             <div class="member-about">Social enterprise, empower communities, vibrant revolutionary resist. Save world compassion triple bottom__.! </div>
                             <ul class="social-profile rounded">
                                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                 <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                             </ul>
                         </div>
                         <div class="member-details">
                             <h2 class="name">Jason Garrett </h2>
                             <span class="deg">App designer </span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section><!-- team -->
     <section class="h7-contact s-padding bg-color" id="contact">
         <div class="container">
             <div class="s-title">
                 <h2>Оставить заявку </h2>
             </div>
             <div class="row">
                 <div class="col-lg-6">
                     <form class="contact-form" method="POST" name="contactform" action="contact-form.php">
                         <div class="form-row">
                             <div class="form-group col-md-6">
                                 <input type="text" class="form-control" placeholder="Ваше имя" name="name" />
                             </div>
                             <div class="form-group col-md-6">
                                 <input type="email" class="form-control" placeholder="Ваш номер телефона" name="email" />
                             </div>
                         </div>
                         <div class="form-group">
                             <input type="text" class="form-control" placeholder="Ваша организация" name="subject" />
                         </div>
                         <div class="form-group">
                             <textarea class="form-control" rows="5" placeholder="Комментарий" name="message"></textarea>
                         </div>
                         <div class="text-lg-right">
                             <button type="submit" class="btn btn-full fill-style">Отправить заявку</button>
                         </div>
                     </form>
                 </div>
                 <div class="col-lg-6">
                     <div id="map"></div>
                 </div>
             </div>
         </div>
     </section><!-- contact -->
     <footer class="footer">
         <div class="animated-waves">
             <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="animated-wave">
                 <title>Wave </title>
                 <defs></defs>
                 <path id="animated-wave-three" d=""></path>
             </svg>
             <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="animated-wave">
                 <title>Wave </title>
                 <defs></defs>
                 <path id="animated-wave-four" d=""></path>
             </svg>
         </div>
         <div class="f-widget-area">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-3 col-sm-6">
                         <div class="f-widget">
                             <div class="f-logo">
                                 <img src="assets/images/logo-b1.png" alt="" />
                             </div>
                             <p>DIPOS – модульное решение. Мы готовы предложить онлайн-кассу на базе планшета Android
                                 наиболее подходящей и доступной модификации.
                                 Мы помогаем подобрать онлайн-кассу практически для любого типа онлайн и офлайн-торговли. </p>
                         </div>
                     </div>
                     <div class="col-lg-2 offset-lg-1 offset-md-1 col-md-5 col-sm-6">
                         <div class="f-widget">
                             <h3 class="f-widget-title">Справка </h3>
                             <ul class="f-list">
                                 <li><a href="#">Документация </a></li>
                                 <li><a href="#">FAQ </a></li>
                                 <li><a href="#">Конфиденциальность данных </a></li>
                                 <li><a href="#">Техническая поддержка</a></li>

                             </ul>
                         </div>
                     </div>
                     <div class="col-lg-3 pl-lg-5 col-md-6 col-sm-6">
                         <div class="f-widget">
                             <h3 class="f-widget-title">О компании </h3>
                             <ul class="f-list">
                                 <li><a href="#">Контакты </a></li>
                                 <li><a href="#">Доставка и оплата </a></li>
                                 <li><a href="#">Где купить? </a></li>
                                 <li><a href="#">Лицензионный договор </a></li>
                                 <li><a href="#">Для партнеров </a></li>
                                 <li><a href="#">Оставить отзыв </a></li>
                             </ul>
                         </div>
                     </div>
                     <div class="col-lg-3 offset-lg-0 offset-md-1 col-md-5 col-sm-6">
                         <div class="f-widget">
                             <h3 class="f-widget-title">Как нас найти? </h3>
                             <ul class="f-contact-list">
                                 <li><span>Офис: </span> Кичик-халка йули, Carpet Bazaar, Ташкент </li>
                                 <li><span>Телефон: </span> +998(99)866-7377 </li>
                                 <li><span>Email </span> info@dipos.uz </li>
                             </ul>
                             <ul class="f-contact-list">
                                 <li>
                                     <span>Мы в соц сетях: </span>
                                     <ul class="social-profile">
                                         <li><a href="#"><i class="social_facebook"></i></a></li>
                                         <li><a href="#"><i class="social_twitter"></i></a></li>
                                         <li><a href="#"><i class="social_instagram"></i></a></li>

                                     </ul>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!--<div class="f-copyright-area">
             <div class="container">
                 <div class="row align-items-center justify-content-center">
                     <div class="col-md-6">
                         <p class="copyright text-center text-md-left mb-2 mb-md-0">© 2018  <a href="#">Appbiz </a> ALL RIGHTS RESERVED </p>
                     </div>
                     <div class="col-md-6">
                         <ul class="nav f-nav justify-content-md-end justify-content-center">
                             <li class="nav-item">
                                 <a class="nav-link" href="#">ABOUT </a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="#">HELP </a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="#">CONTACT </a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="#">TERMS </a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="#">PRIVACY </a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div> -->
     </footer><!-- footer -->
    
     <div class="scroll-top"><i class="arrow_carrot-up"></i></div>
    
    <!-- <div class="main-search-area">
             <form class="main-search-form full-view">
             <div class="m-s-input">
                 <input type="search" name="search" class="search-input" placeholder="Поиск..." autocomplete="off" />
             </div>
             <span>Type and Hit Enter Search </span>
         </form>
         <i class="icon_close"></i>
     </div> -->

     <script src="/assets/js/jquery-2.2.3.min.js"></script>
     <script src="/assets/js/jquery.easing.min.js"></script>
     <script src="/assets/js/popper.min.js"></script>
     <script src="/assets/js/waypoints.min.js"></script>
     <script src="/assets/js/bootstrap.min.js"></script>
     <script src="/assets/js/swiper.min.js"></script>
     <script src="/assets/js/jquery.events.touch.min.js"></script>
     <script src="/assets/js/lightcase.js"></script>
     <script src="/assets/js/jquery.counterup.min.js"></script>
     <script src="/assets/js/TweenMax.min.js"></script>
     <script src="/assets/js/jquery.wavify.js"></script>
     <script src="/assets/js/wow.min.js"></script>
     <script src="/assets/js/jquery.parallax-scroll.js"></script>
     <script src="/assets/js/particles.min.js"></script>
     <script src="/assets/js/jarallax.min.js"></script>
     <script src="/assets/js/jarallax-video.min.js"></script>
     <script src="/assets/js/form-validator.js"></script>
     <script src="../../maps.googleapis.com/maps/api/js_67c55137.js"></script>
     <script src="/assets/js/map-function.js"></script>
     <script src="/assets/js/custom.js"></script>
 </body>
 </html>