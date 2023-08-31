@extends("layout.header_footer")

@section('titulo')
Ocorrencias
@endsection

@section('conteudo')
<main>
    <!--page-title-area start-->
    {{-- <section class="page-title-area" style="background-image: url(assets/img/page-title/page-title-bg1.jpg);">
        <img class="right-shape" src="assets/img/cta/dot-shape-1.png" alt="Dot Pattern">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-wrapper pt-30 pt-lg-40 pt-md-10 pt-xs-10">
                        <ul class="breadcrumb">
                            <li><a href="#">Home /</a></li>
                            <li class="active" aria-current="page">Services Details</li>
                        </ul>
                        <h2 class="page-title">Business Consulting</h2>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--page-title-area end-->
    <!--services-area start-->
    <section class="services-details-area pt-120 pb-80 pt-md-60 pb-md-25 pt-xs-50 pb-xs-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="services-left mb-30">
                        <img class="img-fluid" src="assets/img/portfolio/portfolio5.jpg" alt="Service Img">
                        <h3 class="s-sub-title mt-55 mb-20">Instituto Nacional de Viação (INAV)</h3>
                        <p class="mb-30">Desenhámos um sistema de registo de veículos e automatização das cartas de condução. Instalámos a infra-estrutura de tecnologias de informação em todos os escritórios regionais.</p>
                        {{-- <ul>
                            <li>Videovigilância, cercas eléctricas e contra intrusão</li>
                            <li>Análise de dados de videovigilância</li>
                            <li>Trabalho remoto e monitoria de SLAs</li>
                            <li>Cibersegurança</li>
                        </ul> --}}
                        <div class="row px-0 mt-55 mb-20">
                            <div class="col-lg-4 col-md-4">
                                <div class="details-box text-center mb-30">
                                    <span class="shadow-text">01</span>
                                    <img class="mb-30" src="assets/img/icon/s-icon13.png" alt="Icon">
                                    <h5 class="mb-10">Discutimos Projectos</h5>
                                    <p>Trabalhamos para entender os seus problemas</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="details-box text-center mb-30">
                                    <span class="shadow-text">02</span>
                                    <img class="mb-30" src="assets/img/icon/s-icon14.png" alt="Icon">
                                    <h5 class="mb-10">Filtramos os possiveis problemas</h5>
                                    <p>Analisamos diferentes abordagens</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="details-box text-center mb-30">
                                    <span class="shadow-text">03</span>
                                    <img class="mb-30" src="assets/img/icon/s-icon15.png" alt="Icon">
                                    <h5 class="mb-10">Damos boas Soluções </h5>
                                    <p>Oferecemos as melhores Soluções a  empresas</p>
                                </div>
                            </div>
                        </div>
                        {{-- <p>Team is a diverse network of consultants and industry professionals with a global mindset
                            and a collaborative
                            culture. We work to understand your issues and are driven to ask better questions in the
                            pursuit of making your business
                            work better. A We bring the breadth of our experience and industry knowledge to help you
                            succeed in
                            your work. Taking seamless key performance indicators offline to maximise the long tail.
                            Keeping your eye on the ball
                            while performing a deep dive.</p>
                        <p class="mt-15 mb-45">Completely synergize resource taxing relationships via premier niche
                            markets. Professionally cultivate one-to-one customer service with robust ideas.</p>
                        <blockquote class="blockquote grey-bg2 text-center">
                            <img class="q-icon" src="assets/img/services/quote-sm.png" alt="Icon">
                            <p class="h4">“ The completely synergize resource taxing relationships via
                                premier niche markets. Professionally cultivate one-to-one customer
                                service with robust ideas.</p>
                            <div class="author-box d-flex align-items-center justify-content-center">
                                <div class="author-img">
                                    <img src="assets/img/services/author-1.png" alt="Author Img">
                                </div>
                                <div class="author-content">
                                    <h5>Miranda H. Halim</h5>
                                    <p class="mb-0">Head Of Idea</p>
                                </div>
                            </div>
                        </blockquote>
                        <p>Leverage agile frameworks to provide a robust synopsis for high level overviews.
                            Iterative approaches to corporate strategy foster collaborative thinking to further the
                            overall value proposition. Organically grow the holistic world view of disruptive
                            innovation via workplace diversity and empowerment. </p>
                        <p class="mt-20 mb-55">Bring to the table win-win sur forward, a new normal that has evolved --}}
                            {{-- from generation X is on the runway heading towards a streamlined
                            cloud solution. Usergenerated content in real-time. Please note that we cannot help our
                            clients raise capital. This is a service that is
                            heavily regulated. In general, only brokers licensed with the Financial Industry
                            Regulatory Authority (FINRA)
                            can legally offer this type of service. Please make sure that any “finder” you talk to
                            is properly licensed with FINRA before
                            you hire them.</p> --}}
                        {{-- <div class="row align-items-center px-0">
                            <div class="col-lg-5 col-md-5 mb-20">
                                <div class="prev-box d-flex align-items-center justify-content-start">
                                    <div class="author-img mr-20">
                                        <img src="assets/img/services/prev.jpg" alt="Author Img">
                                    </div>
                                    <div class="prev-content">
                                        <h5>Business Consultancy</h5>
                                        <p class="fs-14">Prev Service</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ham-icons col-lg-2 col-md-2 mb-20 text-start text-md-center">
                                <img src="assets/img/services/eclips-2.png" alt="Icon">
                            </div>
                            <div class="col-lg-5 col-md-5 mb-20">
                                <div class="prev-box next-box d-flex align-items-center justify-content-md-end">
                                    <div class="prev-content order-last order-md-first text-start text-md-end">
                                        <h5>Business Consultancy</h5>
                                        <p class="fs-14">Next Service</p>
                                    </div>
                                    <div class="author-img ml-20">
                                        <img src="assets/img/services/next.jpg" alt="Author Img">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 pl-25 pl-lg-15 pl-md-15 pl-xs-15">
                    <div class="services-right-widget">
                        <div class="widget widget-categories mb-40">
                            <div class="widget-title-box pb-25 mb-30">
                                {{-- <h6 class="widget-sub-title mb-10">Category</h6> --}}
                                <h4 class="widget-sub-title2">Tipo de Serviços</h4>
                            </div>
                            <ul class="list-none">
                                <li><a href="{{route('infra_estrutura.pages')}}"> Infra-Estrutura <span class="f-right"><i
                                                class="fal fa-long-arrow-right"></i></span></a></li>
                                {{-- <li><a href="{{route('seguranca.pages')}}">Segurança <span class="f-right"><i
                                                class="fal fa-long-arrow-right"></i></span></a></li> --}}
                                <li><a href="{{route('rd.pages')}}">R&D <span class="f-right"><i
                                                class="fal fa-long-arrow-right"></i></span></a></li>
                                <li><a href="{{route('gestao_projecto.pages')}}">Gestão de Projectos<span class="f-right"><i
                                                class="fal fa-long-arrow-right"></i></span></a></li>
                                <li><a href="{{route('gestao_projecto.pages')}}">ERPNEXT <span class="f-right"><i
                                                class="fal fa-long-arrow-right"></i></span></a></li>
                                <li><a href="{{route('erpnext.pages')}}">Análise de Sistemas <span class="f-right"><i
                                                class="fal fa-long-arrow-right"></i></span></a></li>
                            </ul>
                        </div>
                        <div class="widget widget-subscribe mb-40">
                            <div class="widget-title-box pb-25 mb-30">
                                <h6 class="widget-sub-title mb-10">Contacto</h6>
                                <h4 class="widget-sub-title2">Entre em contato</h4>
                            </div>
                            <form class="row contact-form" action="#">
                                <div class="col-lg-12 col-md-6">
                                    <div class="input-box mb-20">
                                        <input type="text" placeholder="Full name">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="input-box mail-input mb-20">
                                        <input type="text" placeholder="Email address">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="input-box sub-input mb-20">
                                        <input type="text" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-box text-input mb-20">
                                        <textarea name="message" cols="30" rows="10"
                                            placeholder="Enter massge"></textarea>
                                    </div>
                                </div>

                                <div class="col-12 mb-15">
                                    <button class="form-btn" style="background-color: #245FA7">Submeter</button>
                                </div>
                            </form>
                        </div>
                        {{-- <div class="widget widget-banner-add">
                            <div class="banner-content">
                                <a class="banner-logo" href="index.html"><img src="assets/img/logo/logo-2.png"
                                        alt="Logo"></a>
                                <h3 class="s-sub-title text-white">098. 908. 051. 60</h3>
                                <p>Support Number</p>
                                <a href="contact.html" class="theme_btn text-capitalize mt-30">Buy This Theme</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services-area end-->


</main>

@endsection