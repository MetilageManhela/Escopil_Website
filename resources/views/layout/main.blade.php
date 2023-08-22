@extends("layout.header_footer")

@section('titulo')
Ocorrencias
@endsection

@section('conteudo')

<div id="slider-one" class="main-slider-area">
    <div class="slider-bg" style="background-color: #415ca4">
        <div class="sliders-active owl-carousel owl-theme">
            <div class="item" style="background-color: #415ca4">
                <div class="container custom-container-slider">
                    <div class="dodlle-one"></div>
                    <div class="dodlle-one two"></div>
                    <div class="dodlle-one three"></div>
                    <div class="row align-items-center" style="background-color: #415ca4">
                        <div class="col-xl-6 col-lg-6 order-last order-lg-first">
                            <div class="slider__content">
                                <h1 class="main-title-one">
                                    Future of
                                    <span class="bottom-shape">Business</span> Solution
                                </h1>
                                <p>Seamlessly visualize quality intellectual capital
                                    without superior collaboration and base portals. <strong>$0 Monthly Service
                                        Charge.</strong></p>
                                <ul class="btn-list d-md-flex align-items-center mt-45">
                                    <li><a class="theme_btn mr-30" href="#">Get Free Consultation</a></li>
                                    <li><a class="theme_btn border_btn" href="#">Our Services</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="slider-right">
                                <img class="img-fluid" src="assets/img/slider/pexels-anna.png" alt="Hero Img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="background-color: #415ca4">
                <div class="container custom-container-slider" style="background-color: #415ca4">
                    <div class="dodlle-one"></div>
                    <div class="dodlle-one two"></div>
                    <div class="dodlle-one three"></div>
                    <div class="row align-items-center" style="background-color: #415ca4">
                        <div class="col-xl-6 col-lg-6 order-last order-lg-first">
                            <div class="slider__content">
                                <h1 class="main-title-one">
                                    Future of
                                    <span class="bottom-shape">Business</span> Solution
                                </h1>
                                <p>Seamlessly visualize quality intellectual capital
                                    without
                                    superior collaboration and base portals. <strong>$0 Monthly Service
                                        Charge.</strong></p>
                                <ul class="btn-list d-md-flex align-items-center mt-45">
                                    <li><a class="theme_btn mr-30" href="#">Get Free Consultation</a></li>
                                    <li><a class="theme_btn border_btn" href="#">Our Services</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="slider-right">
                              
                                <img class="img-fluid" src="{{ asset('/assets/imagens/coo.png') }}" alt="Hero Img">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="background-color: #415ca4">
                <div class="container custom-container-slider">
                    <div class="dodlle-one"></div>
                    <div class="dodlle-one two"></div>
                    <div class="dodlle-one three"></div>
                    <div class="row align-items-center" style="background-color: #415ca4">
                        <div class="col-xl-6 col-lg-6 order-last order-lg-first">
                            <div class="slider__content">
                                <h1 class="main-title-one">
                                    Future of
                                    <span class="bottom-shape">Business</span> Solution
                                </h1>
                                <p>Seamlessly visualize quality intellectual capital
                                    without
                                    superior collaboration and base portals. <strong>$0 Monthly Service
                                        Charge.</strong></p>
                                <ul class="btn-list d-md-flex align-items-center mt-45">
                                    <li><a class="theme_btn mr-30" href="#">Get Free Consultation</a></li>
                                    <li><a class="theme_btn border_btn" href="#">Our Services</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="slider-right">
                                <img class="img-fluid" src="assets/img/slider/hero-man-3.png" alt="Hero Img">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--slider-area end-->
<!--feature-area start-->
<section class="feature-area pb-30">
    <div class="container-fluid px-0">
        <div class="row gx-0">
            <div class="col-lg-4">
                <div class="single-feature">
                    <img class="f-icon" src="assets/img/feature/icon-1.png" alt="Feature Iocn">
                    <h2>Visão</h2>
                    <h6><span>01.</span> Business Strategy &</h6>

                </div>
            </div>
            <div class="col-lg-4" >
                <div class="single-feature feat-2">
                    <img class="f-icon" src="assets/img/feature/icon-2.png" alt="Feature Iocn">
                    <h2>Missão</h2>
                    <h6><span>02.</span> Private Internet Access</h6>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-feature feat-3">
                    <img class="f-icon" src="assets/img/feature/icon-3.png" alt="Feature Iocn">
                    <h2>Valores</h2>
                    <h6><span>03.</span> Customer Strategy &</h6>

                </div>
            </div>
        </div>
    </div>
</section>
<!--feature-area end-->
<!--about-us-area start-->
<section class="about-us-area pt-90 pb-90 pb-md-25 pt-xs-50 pb-xs-30">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img-wrapper pos-rel mb-30">
                    <img class="shape-square" src="{{asset('assets/img/shape/square-1.png')}}" alt="Shape">
                    <img class="img-fluid" src="{{asset('assets/img/about/about-1.jpg')}}" alt="About Img">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-wrapper pl-60">
                    <div class="section-title">
                        <h6 class="semi-title mb-10">Sobre Nós</h6>
                        <h2 class="sect-title mb-30">Missão & Visão
                            <span class="bottom-shape">Efficiant</span> Consulting</h2>
                        <p class="paragraph-title">Seamlessly visualize quality intellectual capital
                            without superior collaboration and base portals. <strong>$0 Monthly Service
                                Charge.</strong>
                        </p>
                    </div>
                </div>
                <div class="tab-wrapper mb-30">
                    <nav>
                        <div class="nav nav-tabs mb-25" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">01. <span>Missão</span> <i
                                    class="fal fa-long-arrow-down"></i></button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab"
                                aria-controls="nav-profile" aria-selected="false">02. <span>Visão</span>
                                <i class="fal fa-long-arrow-down"></i></button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <p>Long established fact that reader will be distracted
                                the readable of pages when looking at its layout. The point using lorem ipsum
                                has a
                                more-or-less normal distribution of letters.</p>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                            aria-labelledby="nav-profile-tab">
                            <p>Long established fact that reader will be distracted
                                the readable of pages when looking at its layout. The point using lorem ipsum
                                has a
                                more-or-less normal distribution of letters.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--about-us-area end-->
<!--services-area start-->
<section class="services-area services-bg pt-120 pb-105 mb-10 pt-md-60 pb-md-25 pt-xs-50 pb-xs-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-45">
                    <h6 class="semi-title mb-10">Services</h6>
                    <h2 class="sect-title">Nossos serviço</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-services mb-120">
                    <div class="services__thumb">
                        <img class="img-fluid" src="{{asset('assets/img/services/service-1.jpg')}}" alt="Services Img">
                    </div>
                    <div class="services__content text-center">
                        <h5 class="service-text"><img src="{{asset('assets/img/icon/s-icon1.png')}}" alt="Icon"> Asset
                            Management</h5>
                        <p>Become faster, more flexible, and intensely
                            customer-focused.</p>
                        <a class="service-btn" href="services-details.html">More Details <i
                                class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services mb-120">
                    <div class="services__thumb">
                        <img class="img-fluid" src="{{asset('assets/img/services/service-2.jpg')}}" alt="Services Img">
                    </div>
                    <div class="services__content text-center">
                        <h5 class="service-text"><img src="{{asset('assets/img/icon/s-icon2.png')}}" alt="Icon"> Smart
                            Manufacturing</h5>
                        <p>Become faster, more flexible, and intensely
                            customer-focused.</p>
                        <a class="service-btn" href="services-details.html">More Details <i
                                class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services mb-120">
                    <div class="services__thumb">
                        <img class="img-fluid" src="{{asset('assets/img/services/service-3.jpg')}}" alt="Services Img">
                    </div>
                    <div class="services__content text-center">
                        <h5 class="service-text"><img src="{{asset('assets/img/icon/s-icon3.png')}}" alt="Icon"> Life
                            Insurance</h5>
                        <p>Become faster, more flexible, and intensely
                            customer-focused.</p>
                        <a class="service-btn" href="services-details.html">More Details <i
                                class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--services-area end-->
<!--brand-area start-->
<section class="brand-area pb-60 pb-md-10 pb-xs-10">
    <div class="container border-line pb-60">
        <div class="row">
            <div class="col-12 brand-title mb-60">
                <h5 class="border-bg">Happy Users</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-active owl-carousel">
                    <div class="brand-item">
                        <a class="brand-front" href="#"><img src="{{asset('assets/img/brand/brand-1.png')}}"
                                alt="Brand Logo"></a>
                        <a class="brand-back" href="#"><img src="{{asset('assets/img/brand/brand-1y.png')}}"
                                alt="Brand Logo"></a>
                    </div>
                    <div class="brand-item">
                        <a class="brand-front" href="#"><img src="{{asset('assets/img/brand/brand-2ys.png')}}"
                                alt="Brand Logo"></a>
                        <a class="brand-back" href="#"><img src="{{asset('assets/img/brand/brand-2.png')}}"
                                alt="Brand Logo"></a>
                    </div>
                    <div class="brand-item">
                        <a class="brand-front" href="#"><img src="{{asset('assets/img/brand/brand-3.png')}}"
                                alt="Brand Logo"></a>
                        <a class="brand-back" href="#"><img src="{{asset('assets/img/brand/brand-3y.png')}}"
                                alt="Brand Logo"></a>
                    </div>
                    <div class="brand-item">
                        <a class="brand-front" href="#"><img src="{{asset('assets/img/brand/brand-4.png')}}"
                                alt="Brand Logo"></a>
                        <a class="brand-back" href="#"><img src="{{asset('assets/img/brand/brand-4y.png')}}"
                                alt="Brand Logo"></a>
                    </div>
                    <div class="brand-item">
                        <a class="brand-front" href="#"><img src="{{asset('assets/img/brand/brand-5.png')}}"
                                alt="Brand Logo"></a>
                        <a class="brand-back" href="#"><img src="{{asset('assets/img/brand/brand-5y.png')}}"
                                alt="Brand Logo"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--brand-area end-->
<!--faq-area start-->
<section class="faq-area pt-60 pb-90 pt-md-50 pb-md-30 pt-xs-50 pb-xs-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="faq-content-wrapper pr-40">
                    <div class="section-title mb-50">
                        <h6 class="semi-title mb-10">FAQ</h6>
                        <h2 class="sect-title pr-35">Get Solid Solution
                            & <span class="bottom-shape">Answer</span> QA.</h2>
                    </div>
                    <div class="faq-que-list mb-30">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        <span>01.</span> What is your favorite family vacation?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="fs-14">Initial conversations set the tone for if the person
                                            wants to continue to get to know
                                            you, so be ready to answer some questions as well. Initial
                                            conversations set the tone
                                            for if the person wants to continue to get to know.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        <span>02.</span> What really makes you angry?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse show"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="fs-14">Initial conversations set the tone for if the person
                                            wants to continue to get to know
                                            you, so be ready to answer some questions as well. Initial
                                            conversations set the tone
                                            for if the person wants to continue to get to know.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        <span>03.</span> Purchases & balance transfers for the first?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="fs-14">Initial conversations set the tone for if the
                                            person
                                            wants to continue to get to know
                                            you, so be ready to answer some questions as well. Initial
                                            conversations set the tone
                                            for if the person wants to continue to get to know.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="faq-img-wrapper text-md-end mb-30">
                    <div class="dodle-1"></div>
                    <img class="img-one one" src="{{asset('assets/img/faq/faq-1.jpg')}}" alt="Faq Img">
                    <img class="img-one two" src="{{asset('assets/img/faq/faq-2.jpg')}}" alt="Faq Img">
                    <img class="img-one three" src="{{asset('assets/img/shape/f-shape-1.png')}}" alt="Faq Img">
                    <img class="img-fluid img-four" src="{{asset('assets/img/faq/faq-3.jpg')}}" alt="Faq Img">
                </div>
            </div>
        </div>
    </div>
</section>
<!--faq-area end-->
<!--portfolio-area start-->
<section class="grey-bg2 portfolio-area portfolio-nav pt-120 pb-120 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-60">
                    <h6 class="semi-title mb-10">Portfolio</h6>
                    <h2 class="sect-title">Company Case Study</h2>
                </div>
            </div>
        </div>
        <div class="portfolio-slide owl-carousel">
            <div class="item">
                <div class="portfolio-wrapper mb-30">
                    <div class="single-portfolio white-bg">
                        <p>Consultancy, Business</p>
                        <h5>Miranda Business Consulting</h5>
                        <img src="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" alt="Portfolio Img">
                    </div>
                    <a class="read-btn" href="portfolio-details.html">Read More <i
                            class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="item">
                <div class="portfolio-wrapper mb-30">
                    <div class="single-portfolio white-bg">
                        <p>Consultancy, Business</p>
                        <h5>Miranda Business Consulting</h5>
                        <img src="{{asset('assets/img/portfolio/portfolio-2.jpg')}}" alt="Portfolio Img">
                    </div>
                    <a class="read-btn" href="portfolio-details.html">Read More <i
                            class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="item">
                <div class="portfolio-wrapper mb-30">
                    <div class="single-portfolio white-bg">
                        <p>Consultancy, Business</p>
                        <h5>Miranda Business Consulting</h5>
                        <img src="{{asset('assets/img/portfolio/portfolio-3.jpg')}}" alt="Portfolio Img">
                    </div>
                    <a class="read-btn" href="portfolio-details.html">Read More <i
                            class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="item">
                <div class="portfolio-wrapper mb-30">
                    <div class="single-portfolio white-bg">
                        <p>Consultancy, Business</p>
                        <h5>Miranda Business Consulting</h5>
                        <img src="{{asset('assets/img/portfolio/portfolio-4.jpg')}}" alt="Portfolio Img">
                    </div>
                    <a class="read-btn" href="portfolio-details.html">Read More <i
                            class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="item">
                <div class="portfolio-wrapper mb-30">
                    <div class="single-portfolio white-bg">
                        <p>Consultancy, Business</p>
                        <h5>Miranda Business Consulting</h5>
                        <img src="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" alt="Portfolio Img">
                    </div>
                    <a class="read-btn" href="portfolio-details.html">Read More <i
                            class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="item">
                <div class="portfolio-wrapper mb-30">
                    <div class="single-portfolio white-bg">
                        <p>Consultancy, Business</p>
                        <h5>Miranda Business Consulting</h5>
                        <img src="{{asset('assets/img/portfolio/portfolio-2.jpg')}}" alt="Portfolio Img">
                    </div>
                    <a class="read-btn" href="portfolio-details.html">Read More <i
                            class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--portfolio-area end-->
<!--core-feature-area start-->
<section class="core-feature-area pt-145 pb-80 pt-md-60 pb-md-60 pt-xs-60 pb-xs-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="core-wrapper mb-30">
                    <div class="section-title pr-70">
                        <h6 class="semi-title mb-10">Core Features</h6>
                        <h2 class="sect-title mb-30">Serving 50% Of
                            <span class="bottom-shape">Global</span> Companies</h2>
                        <p class="paragraph-title mb-50">Seamlessly visualize quality intellectual capital
                            without superior collaboration and base portals. <strong>$0 Monthly Service
                                Charge.</strong>
                        </p>
                    </div>
                    <ul class="text-list list-none">
                        <li>Credit limit up to $5,000</li>
                        <li>Up to 5% cash back on two categories you choose</li>
                    </ul>
                    <a href="#" class="theme_btn theme-border-btn mt-20">Discover Now <i
                            class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="video-wrapper">
                    <a href="https://www.youtube.com/watch?v=yeZpJ6lJC54" class="popup-video"><i
                            class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--core-feature-area end-->
<!--cta-area start-->
<section class="cta-area cta-bg pt-70 pb-50 pt-md-60 pb-md-50 pt-xs-50 pb-xs-30">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-12">
                <h3 class="cta-title mb-30">Vamos discutir sobre como podemos ajudar
                    a tornar seu negócio melhor</h2>
            </div>
            <div class="col-lg-4 col-md-12 text-center text-lg-end">
                <div class="cta-box mb-30">
                    <img class="cta-icon" src="{{asset('assets/img/icon/mail-1.png')}}" alt="Icon">
                    <span>Free Consultancy</span>
                    <h5>info@webmail.com</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!--cta-area end-->
<!--blog-area start-->
<section class="blog-area pt-120 pb-90 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-55">
                    <h6 class="semi-title mb-10">News</h6>
                    <h2 class="sect-title">Blog Insights</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="blogs mb-30">
                    <div class="blogs__thumb mb-35">
                        <a href="blog-details.html">
                            <img src="{{asset('assets/img/blog/blog-1.jpg')}}" alt="Blog Img">
                        </a>

                    </div>
                    <span class="tag">Business</span>
                    <div class="blogs__meta mb-1">
                        <span>January 21, 2022 / By </span>
                        <span class="author">Admin</span>
                    </div>
                    <h5><a class="blog-title" href="blog-details.html">Designing Human-Machine Interfaces For
                            Vehicles Of The Future</a></h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blogs mb-30">
                    <div class="blogs__thumb mb-35">
                        <a href="blog-details.html">
                            <img src="{{asset('assets/img/blog/blog-2.jpg')}}" alt="Blog Img">
                        </a>

                    </div>
                    <span class="tag">Business</span>
                    <div class="blogs__meta mb-1">
                        <span>January 21, 2022 / By </span>
                        <span class="author">Admin</span>
                    </div>
                    <h5><a class="blog-title" href="blog-details.html">Designing Human-Machine Interfaces For
                            Vehicles Of The Future</a></h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blogs mb-30">
                    <div class="blogs__thumb mb-35">
                        <a href="blog-details.html">
                            <img src="{{asset('assets/img/blog/blog-3.jpg')}}" alt="Blog Img">
                        </a>

                    </div>
                    <span class="tag">Business</span>
                    <div class="blogs__meta mb-1">
                        <span>January 21, 2022 / By </span>
                        <span class="author">Admin</span>
                    </div>
                    <h5><a class="blog-title" href="blog-details.html">Designing Human-Machine Interfaces For
                            Vehicles Of The Future</a></h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!--blog-area end-->

@endsection
