@extends("layout.header_footer")

@section('titulo')
Contacto
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
                            <li class="active" aria-current="page">Contact</li>
                        </ul>
                        <h2 class="page-title">Get In Touch</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page-title-area end-->
    <!--contact-area start-->
    <section class="contact-area pt-105 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30" style="background-color: rgb(238, 242, 245)">
        <div class="container">
            <div class="contact-border pb-90 pb-md-30 pb-xs-30">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="contact-img-wrapper pr-30 pr-md-0 pr-xs-0 mb-30">
                            <img class="w-100" src="assets/img/contact/pexels-darlene-alderson-7971173.jpg" alt="Img">
                            {{-- <img class="icons" src="assets/img/contact/icon-1.png" alt="Icon"> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="contact-input-wrapper mb-30">
                            <div class="section-title mb-25">
                                <h6 class="semi-title mb-10">Make Custom Request</h6>
                                <h2 class="sect-title mb-35">Fale nos sobre os seus projectos</h2>
                            </div>
                            <form class="row contact-form" action="{{route('contacto.gravar')}}" method="POST">
                                @csrf
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-box mb-20">
                                        <input name="nome" type="text" placeholder="Full name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-box mail-input mb-20">
                                        <input name="email" type="text" placeholder="Email address">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-box mail-input mb-20">
                                        <input name="assunto" type="text" placeholder="Assunto">
                                    </div>
                                </div>
                                {{-- <div class="col-lg-6 col-md-6 mb-20">
                                    <div class="input-box sub-input">
                                        <select name="job" class="job-select">
                                            <option value="Subject">Subject</option>
                                            <option value="">It</option>
                                            <option value="">Development</option>
                                            <option value="">Ui/Ux</option>
                                        </select>
                                    </div>
                                </div> --}}
                                <div class="col-12">
                                    <div class="input-box text-input mb-30">
                                        <textarea name="mensagem" cols="30" rows="10"
                                            placeholder="Enter massge"></textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="form-btn" style="background-color: #245FA7">Submeter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center pt-120 pt-md-60 pt-xs-60">
                <div class="col-xl-8">
                    <div class="section-title text-center mb-55">
                        <h6 class="semi-title mb-10">Catch Us Here</h6>
                        <h2 class="sect-title">Informação de Contacto</h2>
                        <p >Alcance nossa equipe de especialistas</p>
                       <p> Envie uma mensagem através do formulário fornecido. Se sua pergunta for urgente, use os detalhes de contato abaixo.</p>
                    </div>
                </div>
            </div>
            <div class="row pb-90 pb-md-30 pb-xs-30">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-box mb-30">
                        <h5 class="fs-20 mb-20">Endereço postal</h5>
                        <p>Maputo - Mozambique</p>
                        <p>Av. Ahmed S. Toure 406/RC</p>
                        <a href="#" class="theme_btn mt-35"> <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-box mb-30">
                        <h5 class="fs-20 mb-20">Contactos</h5>
                        <p>Phone: +258 84 314 7940 & +258 21 492 725</p>
                        <p>Email: comercial.tec@escopil.co.mz</p>
                        <a href="#" class="theme_btn mt-35"> <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="contact-box mb-30">
                        <h5 class="fs-20 mb-20">horas de funcionamento</h5>
                        <p>monday - friday: 08:00 to 17.00</p>
                        {{-- <p>Av. Ahmed S. Toure 406/RC</p> --}}
                        <a href="#" class="theme_btn mt-35"> <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact-area end-->
    <!--map-area start-->
    <section class="contact-map-area">
        <div class="container-fluid px-0">
            <div class="row gx-0">
                <div class="col-12">
                    <div class="map-area">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14586.16663307975!2d90.3865062!3d23.941279099999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1641645837442!5m2!1sen!2sbd"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--map-area end-->


</main>
@endsection