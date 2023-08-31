@extends("layout.header_footer")

@section('titulo')
Sobre Nos
@endsection

@section('conteudo')


<main>
    <!--page-title-area start-->
    <section class="page-title-area" style="background-image: url(assets/img/page-title/pexels-kindel-media-6774143.jpg);">
        <img class="right-shape" src="assets/img/cta/dot-shape-1.png" alt="Dot Pattern">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-wrapper pt-30 pt-lg-40 pt-md-10 pt-xs-10">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home /</a></li>
                            <li class="active" aria-current="page">Sobre Nós</li>
                        </ul>
                        <h2 class="page-title">Sobre Nós</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page-title-area end-->
    <!--about-us-area start-->
    <section class="about-us-area about-us-2 pt-120 pb-90 pt-md-60 pb-md-10 pb-xs-10 pt-xs-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img-wrapper pos-rel mb-30">
                        <img class="shape-square" src="assets/img/shape/square-1.png" alt="Shape">
                        <img class="img-fluid" src="assets/img/about/pexels-monstera-9487242.jpg" alt="About Img">
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="about-content-wrapper3 pt-20 pl-60">
                        <div class="section-title">
                            <h6 class="semi-title mb-10">Sobre Nós</h6>
                            <h2 class="sect-title">Compromisso com a Qualidade</h2>
                            <p class="paragraph-title">Escopil Tecnologia afirma-se, com orgulho, como empresa moçambicana a trabalhar para o mercado moçambicano desde 1998, sendo hoje uma referência no mercado das Tecnologias de Comunicação e Informação.
                                Acreditamos fortemente que a tecnologia assume um papel crucial no desenvolvimento. Como tal, desafiamo-nos diariamente a encontrar novas soluções que respondam às necessidades dos nossos clientes. Mais do que dar uma resposta aos problemas encontrados no mercado, procuramos sempre usar os nossos conhecimentos alicerçados numa ampla experiência de mercado e o acesso a tecnologia de ponta para antecipar os desafios que os nossos clientes possam vir a enfrentar, oferecendo-lhes soluções seguras, completas, integradas e, acima de tudo, adequadas às suas realidades.
                                Enquanto membro do Grupo Escopil, implementámos, com sucesso, uma vasta gama soluções, desde o e-Government a Infra-estrutura (Redes e Hardware).
                                Com o intuito de reforçarmos o nosso propósito de sermos o parceiro preferencial dos nossos clientes, estamos, agora, a introduzir na nossa carteira de serviços, inovações quer na área da infraestrutura e seguranca, quer do desenvolvimento de Software.
                            </p>
                        </div>
                        {{-- <p>Long established fact that reader will be distracted the readable of pages
                            when looking at its layout. The point using lorem ipsum has a more-or-less
                            normal distribution of letters.</p> --}}
                        <ul class="btn-list about-btn d-md-flex align-items-center">
                            <li><a href="{{route('contacto.page')}}" class="theme_btn2">Entrar em contato</a></li>
                            <li><a href="{{route('service.page')}}" class="theme_btn2 ml-20">Nossos Serviço</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about-us-area end-->
    <!--our-journey-area start-->
    <section class="our-journey-area time-line pt-120 pb-250 pb-lg-90 pt-md-60 pb-md-60 pt-xs-60 pb-xs-30">
        <div class="container">
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-55">
                        <h6 class="semi-title mb-10">Nossa História</h6>
                        <h2 class="sect-title">O percurso da nossa empresa</h2>
                    </div>
                </div>
            </div> --}}
            <div class="reacttimeline">
                  <ul>
                      <li class="default-line"></li>
                      <li class="draw-line"></li>				    				    				    				    
                  </ul>
            </div>
            <ul class="journey-list">	
                <li>
                    <div class="row timeline-box mb-10">
                        <div class="col-lg-6">
                            <div class="left-content mb-30">
                                <h2 style="color: #245FA7">Visão</h2>
                                {{-- <h4>Company Foundation</h4> --}}
                                <p><strong>Líderar na</strong> transformação de negócios, com recurso as potencialidades de tecnologia para melhor servir as necessidades de clientes.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-content mb-30">
                                <img class="img-fluid" src="assets/img/journey/j-1.jpg" alt="Img">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row timeline-box mb-10">
                        <div class="col-lg-6 order-last order-md-first">
                            <div class="right-content mb-30">
                                <img class="img-fluid" src="assets/img/journey/j-2.jpg" alt="Img">
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="left-content mb-30">
                                <h2 style="color: #245FA7">Missão</h2>
                                {{-- <h4>Construindo uma equipa sólida</h4> --}}
                                <p>Desenvolver e implementar processos e tecnologias que contribuam para o desenvolvimento econômico e social do país, gerando valor e sustentabilidade associados às nossas acções.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row timeline-box mb-10">
                        <div class="col-lg-6">
                            <div class="left-content mb-30">
                                <h2 style="color: #245FA7">Valores</h2>
                                {{-- <h4>Company Foundation</h4>
                                <p>The sontent provides fully integrated
                                    marketing services designed</p> --}}
                               
                                    <p>Cultura de inovação;</p>
                                    <p>Priorização do cliente;</p>
                                    <p>Aposta na Tecnologia como serviço para uma sociedade melhor;</p>
                                    <p>Responsabilidade social; </p>
                                    <p>Conduta ética em todas as acções</p>
                                   
                                
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-content mb-30">
                                <img class="img-fluid" src="assets/img/journey/j-3.jpg" alt="Img">
                            </div>
                        </div>
                    </div>
                </li>
                {{-- <li>
                    <div class="row timeline-box mb-10">
                        <div class="col-lg-6 order-last order-md-first">
                            <div class="right-content mb-30">
                                <img class="img-fluid" src="assets/img/journey/j-4.jpg" alt="Img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="left-content mb-30">
                                <h2 class="heding-grey">2012</h2>
                                <h4>Get 1st Rewards</h4>
                                <p>The sontent provides fully integrated
                                    marketing services designed</p>
                            </div>
                        </div>
                    </div>
                </li> --}}
                {{-- <li>
                    <div class="row timeline-box mb-10">
                        <div class="col-lg-6">
                            <div class="left-content mb-30">
                                <h2 class="heding-grey">2016</h2>
                                <h4>WWC Design Rewards</h4>
                                <p>The sontent provides fully integrated
                                    marketing services designed</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-content mb-30">
                                <img class="img-fluid" src="assets/img/journey/j-5.jpg" alt="Img">
                            </div>
                        </div>
                    </div>
                </li> --}}
                {{-- <li>
                    <div class="row timeline-box mb-10">
                        <div class="col-lg-6 order-last order-md-first">
                            <div class="right-content mb-30">
                                <img class="img-fluid" src="assets/img/journey/j-6.jpg" alt="Img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="left-content mb-30">
                                <h2 class="heding-grey">2018</h2>
                                <h4>Website Of The Day</h4>
                                <p>The sontent provides fully integrated
                                    marketing services designed</p>
                            </div>
                        </div>
                    </div>
                </li> --}}
                {{-- <li>
                    <div class="row timeline-box mb-10">
                        <div class="col-lg-6">
                            <div class="left-content mb-30">
                                <h2 class="heding-grey">2020</h2>
                                <h4>Design Team Award</h4>
                                <p>The sontent provides fully integrated
                                    marketing services designed</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-content mb-30">
                                <img class="img-fluid" src="assets/img/journey/j-7.jpg" alt="Img">
                            </div>
                        </div>
                    </div>
                </li> --}}
                {{-- <li>
                    <div class="row timeline-box">
                        <div class="col-lg-6 order-last order-md-first">
                            <div class="right-content mb-30">
                                <img class="img-fluid" src="assets/img/journey/j-8.jpg" alt="Img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="left-content mb-30">
                                <h2 class="heding-grey">2021</h2>
                                <h4>Archivement On Going</h4>
                                <p>The sontent provides fully integrated
                                    marketing services designed</p>
                            </div>
                        </div>
                    </div>
                </li> --}}
            </ul>
        </div>
    </section>
    <!--our-journey-area end-->
    <!--team-area start-->
    <section class="grey-bg3 team-area pt-120 pb-90 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-55">
                        <h6 class="semi-title mb-10">RECOMENDAÇÕES</h6>
                        <h2 class="sect-title">RECOMENDAÇÕES</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="team-wrapper mb-30">
                        <div >
                            <a href="team-details.html"><img class="img-fluid" src="assets/img/team/Capture.PNG"
                                    alt="Team Img"></a>
                        </div>
                        {{-- <div class="team-content">
                            <h6>Founder</h6>
                            <h3><a href="team-details.html">Alonso D. Dowson</a></h3>
                            <div class="footer__social mt-30">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-wrapper mb-30">
                        <div >
                            <a href="team-details.html"><img  class="img-fluid" src="assets/img/team/idra.PNG"
                                    alt="Team Img"></a>
                        </div>
                        {{-- <div class="team-content">
                            <h6>CEO</h6>
                            <h3><a href="team-details.html">Rolinda D. Willin</a></h3>
                            <div class="footer__social mt-30">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-wrapper mb-30">
                        <div>
                            <a href="team-details.html"><img class="img-fluid" src="assets/img/team/mct.PNG"
                                    alt="Team Img"></a>
                        </div>
                        {{-- <div class="team-content">
                            <h6>CTO</h6>
                            <h3><a href="team-details.html">Piklonis D. Dowson</a></h3>
                            <div class="footer__social mt-30">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-wrapper mb-30">
                        <div>
                            <a href="team-details.html"><img class="img-fluid" src="assets/img/team/Netcare.PNG"
                                    alt="Team Img"></a>
                        </div>
                        {{-- <div class="team-content">
                            <h6>CTO</h6>
                            <h3><a href="team-details.html">Piklonis D. Dowson</a></h3>
                            <div class="footer__social mt-30">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-wrapper mb-30">
                        <div>
                            <a href="team-details.html"><img class="img-fluid" src="assets/img/team/stae.PNG"
                                    alt="Team Img"></a>
                        </div>
                        {{-- <div class="team-content">
                            <h6>CTO</h6>
                            <h3><a href="team-details.html">Piklonis D. Dowson</a></h3>
                            <div class="footer__social mt-30">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-wrapper mb-30">
                        <div>
                            <a href="team-details.html"><img class="img-fluid" src="assets/img/team/ugea.PNG"
                                    alt="Team Img"></a>
                        </div>
                        {{-- <div class="team-content">
                            <h6>CTO</h6>
                            <h3><a href="team-details.html">Piklonis D. Dowson</a></h3>
                            <div class="footer__social mt-30">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--team-area end-->
    <!--cta-area start-->
    {{-- <section class="cta-area cta-full cta-full2">
        <img class="shape-one" src="assets/img/cta/dot-shape-1.png" alt="Shape">
        <div class="cta-bg">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xxl-6 col-xl-8 col-lg-8 col-md-12">
                        <div class="cta-wrapper">
                            <h6 class="semi-title text-white mb-10">Global Clients From Around The World</h6>
                            <h2 class="sect-title text-white">We build ideas driven
                                by the future.</h2>
                            <ul class="btn-list d-md-flex align-items-center justify-content-center mt-50">
                                <li><a class="theme_btn mr-30 mr-xs-0" href="contact.html">Join Our Community</a>
                                </li>
                                <li><a class="theme_btn border_btn" href="contact.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--cta-area end-->

</main>
@endsection