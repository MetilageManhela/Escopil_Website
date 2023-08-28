@extends("layout.header_footer")

@section('titulo')
Ocorrencias
@endsection

@section('conteudo')

<div id="slider-one" class="main-slider-area">
    <div class="slider-bg" style="background-color: #245FA7">
        <div class="sliders-active owl-carousel owl-theme">
            <div class="item" style="background-color: #245FA7">
                <div class="container custom-container-slider">
                    <div class="dodlle-one"></div>
                    <div class="dodlle-one two"></div>
                    <div class="dodlle-one three"></div>
                    <div class="row align-items-center" style="background-color: #245FA7">
                        <div class="col-xl-6 col-lg-6 order-last order-lg-first">
                            <div class="slider__content">
                                <h1 class="main-title-one">
                                    A Sua Satisfação é Nossa
                                    <span class="bottom-shape">Prioridade</span> 
                                </h1>
                                <p>Facilite o precesso de Gestão  dos seus recursos apostando na Tecnologia <strong></strong></p>
                                <ul class="btn-list d-md-flex align-items-center mt-45">
                                    {{-- <li><a class="theme_btn mr-30" href="#">Get Free Consultation</a></li> --}}
                                    <li><a class="theme_btn border_btn" href="#">Nossos Serviços</a></li>
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
            <div class="item" style="background-color: #245FA7">
                <div class="container custom-container-slider" style="background-color: #245FA7">
                    <div class="dodlle-one"></div>
                    <div class="dodlle-one two"></div>
                    <div class="dodlle-one three"></div>
                    <div class="row align-items-center" style="background-color: #245FA7">
                        <div class="col-xl-6 col-lg-6 order-last order-lg-first">
                            <div class="slider__content">
                                <h1 class="main-title-one">
                                    A Sua Satisfação é Nossa
                                    <span class="bottom-shape">Prioridade</span> 
                                </h1>
                                <p> Melhorar a eficiencia do seu Negócio  usando a Tecnologia e a razão  da nossa Existência <strong></strong></p>
                                <ul class="btn-list d-md-flex align-items-center mt-45">
                                    {{-- <li><a class="theme_btn mr-30" href="#">Get Free Consultation</a></li> --}}
                                    <li><a class="theme_btn border_btn" href="#">Nossos Serviços</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="slider-right">
                              
                                <img class="img-fluid" src="{{ asset('assets/img/slider/coo.png') }}" alt="Hero Img">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="background-color: #245FA7">
                <div class="container custom-container-slider">
                    <div class="dodlle-one"></div>
                    <div class="dodlle-one two"></div>
                    <div class="dodlle-one three"></div>
                    <div class="row align-items-center" style="background-color: #245FA7">
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
                                    {{-- <li><a class="theme_btn mr-30" href="#">Get Free Consultation</a></li> --}}
                                    <li><a class="theme_btn border_btn" href="#">Our Services</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="slider-right">
                                <img class="img-fluid" src="assets/img/slider/friends.png" alt="Hero Img">  
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
                <div class="single-feature feat-3">
                    <img class="f-icon" src="assets/img/feature/icon-2.png" alt="Feature Iocn">
                    <h2>Missão</h2>
                    <h6><span>02.</span> Private Internet Access</h6>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-feature ">
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
                        <h2 class="sect-title mb-30">Missão & Visão &
                            <span class="bottom-shape"></span> Valores</h2>
                        <p class="paragraph-title">Escopil Tecnologia afirma-se, com orgulho, como empresa moçambicana a trabalhar para o mercado moçambicano desde 1998, sendo hoje uma referência no mercado das Tecnologias de Comunicação e Informação. <strong>Tecnologias de Comunicação e Informação.</strong>
                        </p>
                    </div>
                </div>
                <div class="tab-wrapper mb-30">
                    <nav>
                        <div class="nav nav-tabs mb-25" id="nav-tab" role="tablist">
                            <button style="width: 405px" style="background-color: #245FA7" class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">01. <span>Missão</span> <i
                                    class="fal fa-long-arrow-down"></i></button>

                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab"
                                aria-controls="nav-profile" aria-selected="false">02. <span>Visão</span>
                                <i class="fal fa-long-arrow-down"></i></button>

                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile1" type="button" role="tab"
                                aria-controls="nav-profile" aria-selected="false">02. <span>Valores</span>
                                <i class="fal fa-long-arrow-down"></i></button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <p>Desenvolver e implementar processos e tecnologias que contribuam para o desenvolvimento econômico e social do país, gerando valor e sustentabilidade associados às nossas acções.</p>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                            aria-labelledby="nav-profile-tab">
                            <p>Líderar na transformação de negócios, com recurso as potencialidades de tecnologia para melhor servir as necessidades de clientes.</p>
                        </div>

                        <div class="tab-pane fade" id="nav-profile1" role="tabpanel"
                        aria-labelledby="nav-profile-tab">
                        <ul>
                            <li>Cultura de inovação</li>
                            <li>Priorização do cliente</li>
                            <li>Aposta na Tecnologia como serviço para uma sociedade melhor</li>
                            <li>Responsabilidade social; Conduta ética em todas as acções</li>
                        </ul>
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
                    <h6 class="semi-title mb-10">Serviços</h6>
                    <h2 class="sect-title">Nossos serviço</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-services mb-120">
                    <div class="services__thumb">
                        <img class="img-fluid" src="{{asset('assets/img/services/serv1.jpg')}}" alt="Services Img">
                    </div>
                    <div class="services__content text-center" style="background-color: #143966">
                        <h5   class="service-text"><img src="{{asset('assets/img/icon/s-icon1.png')}}" alt="Icon"> Ifra-Estrututa</h5>
                        <p>Infra-estruturas de comunicação que consistem na montagem de redes e infra-estruturas de Tecnologias de Informação...</p>
                        <a class="service-btn" href="{{route('infra_estrutura.pages')}}">Mais Detalhes<i 
                                class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services mb-120">
                    <div class="services__thumb">
                        <img class="img-fluid" src="{{asset('assets/img/services/serv2.jpg')}}" alt="Services Img">
                    </div>
                    <div class="services__content text-center" style="background-color: #143966">
                        <h5   class="service-text"><img src="{{asset('assets/img/icon/s-icon2.png')}}" alt="Icon"> Segurança</h5>
                        <p>O nosso maior objectivo é satisfazer a necessidade do cliente, assegurando a segurança física e logística dos equipamentos...</p>
                        <a class="service-btn" href="{{route('seguranca.pages')}}">Mais Detalhes <i
                                class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services mb-120">
                    <div class="services__thumb">
                        <img class="img-fluid" src="{{asset('assets/img/services/serv3.jpg')}}" alt="Services Img">
                    </div>
                    <div class="services__content text-center" style="background-color: #143966">
                        <h5  class="service-text"><img src="{{asset('assets/img/icon/s-icon3.png')}}" alt="Icon"> R&D</h5>
                        <p>Implementação de várias soluções inovadoras, potenciadas por parcerias com actores altamente experientes e qualificados...</p>
                        <a class="service-btn" href="{{route('rd.pages')}}">Mais Detalhes<i
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
                <h5 class="border-bg">Nossos Parceiros</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-active owl-carousel">
                    <div class="brand-item">
                        <a class="brand-front" href="#"><img src="{{asset('assets/img/brand/tabloTech.PNG')}}"
                                alt="Brand Logo"></a>
                        {{-- <a class="brand-back" href="#"><img src="{{asset('assets/img/brand/brand-1y.png')}}"
                                alt="Brand Logo"></a> --}}
                    </div>
                    <div class="brand-item">
                        <a class="brand-front" href="#"><img src="{{asset('assets/img/brand/duys.PNG')}}"
                                alt="Brand Logo"></a>
                        {{-- <a class="brand-back" href="#"><img src="{{asset('assets/img/brand/brand-2.png')}}"
                                alt="Brand Logo"></a> --}}
                    </div>
                    <div class="brand-item">
                        <a class="brand-front" href="#"><img src="{{asset('assets/img/brand/mrt.PNG')}}"
                                alt="Brand Logo"></a>
                        {{-- <a class="brand-back" href="#"><img src="{{asset('assets/img/brand/brand-3y.png')}}"
                                alt="Brand Logo"></a> --}}
                    </div>
                    <div class="brand-item">
                        <a class="brand-front" href="#"><img src="{{asset('assets/img/brand/sgs.PNG')}}"
                                alt="Brand Logo"></a>
                        {{-- <a class="brand-back" href="#"><img src="{{asset('assets/img/brand/brand-4y.png')}}"
                                alt="Brand Logo"></a> --}}
                    </div>
                    <div class="brand-item">
                        <a class="brand-front" href="#"><img src="{{asset('assets/img/brand/skil.PNG')}}"
                                alt="Brand Logo"></a>
                        {{-- <a class="brand-back" href="#"><img src="{{asset('assets/img/brand/brand-5y.png')}}"
                                alt="Brand Logo"></a> --}}
                    </div>
                    <div class="brand-item">
                        <a class="brand-front" href="#"><img src="{{asset('assets/img/brand/vesame.PNG')}}"
                                alt="Brand Logo"></a>
                        {{-- <a class="brand-back" href="#"><img src="{{asset('assets/img/brand/brand-5y.png')}}"
                                alt="Brand Logo"></a> --}}
                    </div>
                    <div class="brand-item">
                        <a class="brand-front" href="#"><img src="{{asset('assets/img/brand/vortal.PNG')}}"
                                alt="Brand Logo"></a>
                        {{-- <a class="brand-back" href="#"><img src="{{asset('assets/img/brand/brand-5y.png')}}"
                                alt="Brand Logo"></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--brand-area end-->
<!--faq-area start
<section class="faq-area pt-60 pb-90 pt-md-50 pb-md-30 pt-xs-50 pb-xs-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="faq-content-wrapper pr-40">
                    <div class="section-title mb-50">
                        {{-- <h6 class="semi-title mb-10">FAQ</h6> --}}
                        <h2 class="sect-title pr-35">Obtenha uma solução sólida
                             <span class="bottom-shape"></span></h2>
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
                    <img class="img-fluid img-four" src="{{asset('assets/img/faq/excited-friends-on-couch.jpg')}}" alt="Faq Img">
                </div>
            </div>
        </div>
    </div>
</section>
faq-area end-->
<!--portfolio-area start-->
<section class="grey-bg2 portfolio-area portfolio-nav pt-120 pb-120 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-60">
                    <h6 class="semi-title mb-10">Portfolio</h6>
                    <h2 class="sect-title">Nossos Trabalhos</h2>
                </div>
            </div>
        </div>
        <div class="portfolio-slide owl-carousel">
            <div class="item">
                <div class="portfolio-wrapper mb-30">
                    <div class="single-portfolio white-bg">
                        <h5>Ministério da Ciência e Tecnologia</h5>
                        <p>Desenvolvemos o portal e a biblioteca de informação digital, incluindo a ...</p>
                        
                        <img src="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" alt="Portfolio Img">
                    </div>
                    <a class="read-btn" href="portfolio-details.html">Ler Mais<i
                            class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="item">
                <div class="portfolio-wrapper mb-30">
                    <div class="single-portfolio white-bg">
                        <h5>CMAM-JSI Research & Training Institute, Inc. (JSI)</h5>
                        <p>Provisão de serviços de Migração de Ambientes da Ferramenta Central...

                        </p>
                        
                        <img src="{{asset('assets/img/portfolio/portfolio-2.jpg')}}" alt="Portfolio Img">
                    </div>
                    <a class="read-btn" href="portfolio-details.html">Ler Mais<i
                            class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="item">
                <div class="portfolio-wrapper mb-30">
                    <div class="single-portfolio white-bg">
                        <h5>Autoridade Tributária – Ministério das Finanças</h5>
                        <p>Gestão da concessão para a implementação do sistema de...</p>
                       
                        <img src="{{asset('assets/img/portfolio/portfolio-3.jpg')}}" alt="Portfolio Img">
                    </div>
                    <a class="read-btn" href="portfolio-details.html">Ler Mais<i
                            class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="item">
                <div class="portfolio-wrapper mb-30">
                    <div class="single-portfolio white-bg">
                        <h5>CISM– Centro de investigação de Saúde de Manhiça</h5>
                        <p>Concepção, desenvolvimento e Implementação de um Sistema de ...</p>
                        
                        <img src="{{asset('assets/img/portfolio/portfolio-4.jpg')}}" alt="Portfolio Img">
                    </div>
                    <a class="read-btn" href="portfolio-details.html">Ler Mais<i
                            class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="item">
                <div class="portfolio-wrapper mb-30">
                    <div class="single-portfolio white-bg">
                        <h5>Instituto Nacional de Viação (INAV)</h5>
                        <p>Desenhámos um sistema de registo de veículos e automatização das c...</p>
                        
                        <img src="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" alt="Portfolio Img">
                    </div>
                    <a class="read-btn" href="portfolio-details.html">Ler Mais<i
                            class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="item">
                <div class="portfolio-wrapper mb-30">
                    <div class="single-portfolio white-bg">
                        <h5>Revimo– Rede Viária de Moçambique, S.A</h5>
                        <p>Instalação da infraestrutura de rede & manutenção da infraestrutura de TIC ...</p>
                        
                        <img src="{{asset('assets/img/portfolio/portfolio-2.jpg')}}" alt="Portfolio Img">
                    </div>
                    <a class="read-btn" href="portfolio-details.html">Ler Mais<i
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
                        <h6 class="semi-title mb-10"></h6>
                        <h2 class="sect-title mb-30">O futuro  
                            <span class="bottom-shape">é</span> já Amanhã</h2>
                        <p class="paragraph-title mb-50">Estamos, neste momento, a alargar a nossa 
                            oferta de produtos e serviços, quer na área de 
                            infraestruturas de TIC, quer na área de ciberse
                            -
                            gurança, e software, de forma a podermos re
                            -
                            sponder, com inovação e criatividade, às  <strong>neces
                                -
                                sidades específicas do mercado.</strong>
                        </p>
                    </div>
                    <ul class="text-list list-none">
                        <li>Eficiencia </li>
                        <li>Eficácia</li>
                    </ul>
                    <a href="#" class="theme_btn theme-border-btn mt-20">Descubra agora <i
                            class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12" >
                {{-- <div class="video-wrapper" >
                    <a href="https://www.youtube.com/watch?v=yeZpJ6lJC54" class="popup-video"><i
                            class="fas fa-play"></i></a>
                </div> --}}<div class="about-img-wrapper pos-rel mb-30">
                    {{-- <img class="shape-square" src="{{asset('assets/img/shape/square-1.png')}}" alt="Shape"> --}}
                    <img style="height: 600px" class="img-fluid" src="{{asset('assets/img/about/three-professionals-on-couch.jpg')}}" alt="About Img">
                </div
                
            </div>
        </div>
    </div>
</section>
<!--core-feature-area end-->
<!--cta-area start-->
<section style="background-color: #245FA7" class="cta-area pt-70 pb-50 pt-md-60 pb-md-50 pt-xs-50 pb-xs-30" >
    <div class="container" style="background-color: #245FA7">
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
                    <h6 class="semi-title mb-10">Novidades</h6>
                    <h2 class="sect-title">Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="blogs mb-30">
                    <div class="blogs__thumb mb-35">
                        <a href="blog-details.html">
                            <img src="{{asset('assets/img/blog/Capture.PNG')}}" alt="Blog Img">
                        </a>

                    </div>
                    <span class="tag" style="background-color: #143966">Business</span>
                    <div class="blogs__meta mb-1">
                        <span>January 21, 2022 / By </span>
                        <span class="author">Admin</span>
                    </div>
                    <h5><a class="blog-title" href="blog-details.html">Projetando interfaces homem-máquina para
                        Veículos do Futuro</a></h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blogs mb-30">
                    <div class="blogs__thumb mb-35">
                        <a href="blog-details.html">
                            <img src="{{asset('assets/img/blog/Capture.PNG')}}" alt="Blog Img">
                        </a>

                    </div>
                    <span class="tag" style="background-color: #143966">Business</span>
                    <div class="blogs__meta mb-1">
                        <span>January 21, 2022 / By </span>
                        <span class="author">Admin</span>
                    </div>
                    <h5><a class="blog-title" href="blog-details.html">Projetando interfaces homem-máquina para
                        Veículos do Futuro</a></h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blogs mb-30">
                    <div class="blogs__thumb mb-35">
                        <a href="blog-details.html">
                            <img src="{{asset('assets/img/blog/Capture.PNG')}}" alt="Blog Img">
                            {{-- <img src="{{asset('assets/img/blog/blog-3.jpg')}}" alt="Blog Img"> --}}
                        </a>

                    </div>
                    <span class="tag" style="background-color: #143966">Business</span>
                    <div class="blogs__meta mb-1">
                        <span>January 21, 2022 / By </span>
                        <span class="author">Admin</span>
                    </div>
                    <h5><a class="blog-title" href="blog-details.html">Projetando interfaces homem-máquina para
                        Veículos do Futuro</a></h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!--blog-area end-->

@endsection
