@extends("layout.header_footer")

@section('titulo')
Servico
@endsection

@section('conteudo')

<main>
    <!--page-title-area start-->
    <section class="page-title-area" style="background-image: url(assets/img/page-title/servicos.jpg);">
        <img class="right-shape" src="assets/img/cta/dot-shape-1.png" alt="Dot Pattern">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-wrapper pt-30 pt-lg-40 pt-md-10 pt-xs-10">
                        <ul class="breadcrumb">
                            <li><a href="#">Home /</a></li>
                            <li class="active" aria-current="page">Serviços</li>
                        </ul>
                        <h2 class="page-title">Nossos Serviços</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page-title-area end-->
    <!--services-area start-->
    <section class="services-area pt-120 pb-80 mb-10 pt-md-60 pb-md-25 pt-xs-50 pb-xs-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-services mb-150">
                        <div class="services__thumb">
                            <img class="img-fluid" src="assets/img/services/serv1.jpg" alt="Services Img">
                        </div>
                        <div class="services__content text-center">
                            <h5 class="service-text"><img src="assets/img/icon/s-icon2.png" alt="Icon"> Infra-Estrutura</h5>
                            <p>Infra-estruturas de comunicação que consistem na montagem de redes e infra-estruturas de Tecnologias de Informação...</p>
                            <a class="service-btn" href="{{route('infra_estrutura.pages')}}">Mais Detalhes <i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services mb-150">
                        <div class="services__thumb">
                            <img class="img-fluid" src="assets/img/services/serv2.jpg" alt="Services Img">
                        </div>
                        <div class="services__content text-center">
                            <h5 class="service-text"><img src="assets/img/icon/s-icon3.png" alt="Icon">Segurança</h5>
                            <p>O nosso maior objectivo é satisfazer a necessidade do cliente, assegurando a segurança física e logística dos equipamentos...</p>
                            <a class="service-btn" href="{{route('seguranca.pages')}}">Mais Detalhes<i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services mb-150">
                        <div class="services__thumb">
                            <img class="img-fluid" src="assets/img/services/serv3.jpg" alt="Services Img">
                        </div>
                        <div class="services__content text-center">
                            <h5 class="service-text"><img src="assets/img/icon/s-icon11.png" alt="Icon"> R&D</h5>
                            <p>Implementação de várias soluções inovadoras, potenciadas por parcerias com actores altamente experientes e qualificados...</p>
                            <a class="service-btn" href="{{route('rd.pages')}}">Mais Detalhes<i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services mb-150">
                        <div class="services__thumb">
                            <img class="img-fluid" src="assets/img/services/serv4.jpg" alt="Services Img">
                        </div>
                        <div class="services__content text-center">
                            <h5 class="service-text"><img src="assets/img/icon/s-icon10.png" alt="Icon"> Gestão de Projectos</h5>
                            <p>Possuímos recursos e talento necessários para executar as necessidades dos nossos clientes dentro dos prazos acordados...</p>
                            <a class="service-btn" href="{{route('gestao_projecto.pages')}}">Mais Detalhes <i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services mb-150">
                        <div class="services__thumb">
                            <img class="img-fluid" src="assets/img/services/erpnext.png" alt="Services Img">
                        </div>
                        <div class="services__content text-center">
                            <h5 class="service-text"><img src="assets/img/icon/s-icon16.png" alt="Icon"> ERPNEXT</h5>
                            <p>Sistema de gestão RH, estoque, projetos e recursos de CRM, alem disso a plataforma oferece funcoes de contabilidaden, RH e folha de pagamento...</p>
                            <a class="service-btn" href="{{route('erpnext.pages')}}">Mais Detalhes <i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services mb-150">
                        <div class="services__thumb">
                            <img class="img-fluid" src="assets/img/services/serv6.jpg" alt="Services Img">
                        </div>
                        <div class="services__content text-center">
                            <h5 class="service-text"><img src="assets/img/icon/s-icon17.png" alt="Icon"> Análise de Sistemas</h5>
                            <p>Desenvolvemos soluções para as empresas por meio de sistemas informatizados para empresas. Fazemos o trabalho de analise, documentacao...</p>
                            <a class="service-btn" href="{{route('analise_sistema.pages')}}">Mais Detalhes <i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services-area end-->
    <!--feature-area start
    {{-- <section class="feature-area">
        <div class="service-feature-bg">
            <div class="container">
                <div class="row align-items-center justify-content-md-end">
                    <div class="col-xl-7">
                        <div class="service-feature-wrapper">
                            <h6 class="semi-title mb-10">Core Features</h6>
                            <h2 class="sect-title">Magnificient Quality Gives You</h2>
                            <ul class="feature-btn-list">
                                <li><a class="service-btn" href="services-details.html"><img
                                            src="assets/img/icon/s-icon4.png" alt="icon">
                                        <span>Strategic Consulting Services</span> <i
                                            class="fal fa-long-arrow-right"></i></a>
                                </li>
                                <li><a class="service-btn" href="services-details.html"><img
                                            src="assets/img/icon/s-icon5.png" alt="icon">
                                        <span>Strategic Consulting Services</span> <i
                                            class="fal fa-long-arrow-right"></i></a>
                                </li>
                                <li><a class="service-btn" href="services-details.html"><img
                                            src="assets/img/icon/s-icon6.png" alt="icon">
                                        <span>Strategic Consulting Services</span> <i
                                            class="fal fa-long-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    feature-area end-->
    <!--plan-area start
    {{-- <section class="plan-area service-plan-bg pb-90 pb-md-30 pb-xs-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="semi-title mb-10">Our Plans</h6>
                    <h2 class="sect-title mb-40">Service Price & Plans</h2>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6">
                    <div class="plan mb-30">
                        <div class="plan-header">
                            <h4 class="plan-title">Startup Plan</h4>
                            <p>Business Content makes social media</p>
                        </div>
                        <div class="plan-body">
                            <h2>$49.00</h2>
                            <p>10,000 monthly active users</p>
                            <ul class="plan-list">
                                <li>Real time monthly startup</li>
                                <li>Voice & Video calling support</li>
                                <li class="delete">Collaboratiove Whiteboard</li>
                                <li class="delete">Priority iOs & Android option</li>
                                <li class="delete">Role based access control</li>
                            </ul>
                            <a href="#" class="theme_btn price-btn">Start Free Trails <i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="plan plan2 mb-30">
                        <div class="plan-header">
                            <h4 class="plan-title">Team Plan</h4>
                            <p>Business Content makes social media</p>
                        </div>
                        <div class="plan-body">
                            <span class="tag">Recomanded</span>
                            <h2>$99.00</h2>
                            <p>10,000 monthly active users</p>
                            <ul class="plan-list">
                                <li>Real time monthly startup</li>
                                <li>Voice & Video calling support</li>
                                <li>Collaboratiove Whiteboard</li>
                                <li class="delete">Priority iOs & Android option</li>
                                <li class="delete">Role based access control</li>
                            </ul>
                            <a href="#" class="theme_btn price-btn">Start Free Trails <i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="plan plan3 mb-30">
                        <div class="plan-header">
                            <h4 class="plan-title">Mega Plan</h4>
                            <p>Business Content makes social media</p>
                        </div>
                        <div class="plan-body">
                            <h2>$299.00</h2>
                            <p>10,000 monthly active users</p>
                            <ul class="plan-list">
                                <li>Real time monthly startup</li>
                                <li>Voice & Video calling support</li>
                                <li>Collaboratiove Whiteboard</li>
                                <li>Priority iOs & Android option</li>
                                <li>Role based access control</li>
                            </ul>
                            <a href="#" class="theme_btn price-btn">Start Free Trails <i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    plan-area end-->
    <!--brand-area start-->
    <section class="brand-area pt-120 pb-120 pt-md-60 pb-md-60 pb-xs-60 pt-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-12 brand-title mb-60">
                    <h5 class="border-bg">Parceiros</h5>
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

</main>
@endsection