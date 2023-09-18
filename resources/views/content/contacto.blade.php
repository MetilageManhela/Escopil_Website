@extends("layout.header_footer")

@section('titulo')
Contacto
@endsection

@section('conteudo')

<main>
      <!--jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!--jquery-validate-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--page-title-area start-->
    <section class="page-title-area" style="background-image: url(assets/img/page-title/contacto.jpg);">
        <img class="right-shape" src="assets/img/cta/dot-shape-1.png" alt="Dot Pattern">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-wrapper pt-30 pt-lg-40 pt-md-10 pt-xs-10">
                        <ul class="breadcrumb">
                            <li><a href="{{route('home.page')}}">Home /</a></li>
                            <li class="active" aria-current="page" style="color: #096fec">Contacto</li>
                        </ul>
                        <h2 class="page-title">Entre em Contacto</h2>
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
                                <h6 class="semi-title mb-10">Faça solicitação personalizada</h6>
                                <h2 class="sect-title mb-35">Fale nos sobre os seus projectos</h2>
                            </div>
                            <form class="row contact-form" name="formulario_cliente" action="{{route('contacto.gravar')}}" method="POST" id="formulario_cliente">
                                @csrf
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-box mb-20">
                                        <input name="nome" type="text" placeholder="Nome Coletivo/Pessoal" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-box mail-input mb-20">
                                        <input name="email" type="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-box mail-input mb-20">
                                        <input name="assunto" type="text" placeholder="Assunto" required>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-6 col-md-6 mb-20">
                                    <div class="input-box sub-input">
                                        <select name="job" class="job-select">
                                            <option value="Subject">Assunto</option>
                                            <option value="">It</option>
                                            <option value="">Development</option>
                                            <option value="">Ui/Ux</option>
                                        </select>
                                    </div>
                                </div> --}}
                                <div class="col-12">
                                    <div class="input-box text-input mb-30">
                                        <textarea name="mensagem" cols="30" rows="10"
                                            placeholder="Escreva a mensagem"></textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="form-btn" id="submeter" style="background-color: #245FA7">Submeter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center pt-120 pt-md-60 pt-xs-60">
                <div class="col-xl-8">
                    <div class="section-title text-center mb-55">
                        <h6 class="semi-title mb-10">Encontre-nos aqui</h6>
                        <h2 class="sect-title">Informação de Contacto</h2>
                        <p >Alcance nossa equipe de especialistas</p>
                       <p> Envie uma mensagem através do formulário fornecido. Se sua pergunta for urgente, use os detalhes de contato abaixo.</p>
                    </div>
                </div>
            </div>
            <div class="row pb-90 pb-md-30 pb-xs-30">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-box mb-30">
                        <h5 class="fs-20 mb-20">Endereço Postal</h5>
                        <p>Maputo - Mozambique</p>
                        <p>Av. Ahmed S. Toure 406/RC</p>
                        <a href="#" class="theme_btn mt-35"> <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-box mb-30">
                        <h5 class="fs-20 mb-20">Contactos</h5>
                        <p>Tel.: +258 84 314 7940 & +258 21 492 725</p>
                        <p>E-mail: comercial.tec@escopil.co.mz</p>
                        <a href="#" class="theme_btn mt-35"> <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="contact-box mb-30">
                        <h5 class="fs-20 mb-20">Horas de Funcionamento</h5>
                        <p>Segunda - Sexta: 08:00 às 17:00</p>
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
<script>

    $("#formulario_cliente").validate({
    //     submitHandler: function(form) {
    // //    form.submit();
    //  salvar();
    //  }
   });

//    function salvar (){
//     $("#submeter").html('Processando..');

//       $.ajax({
//         data: $('#formulario_cliente').serialize(),
//         url: "{{ route('send') }}",
//         type: "POST",
//         dataType: 'json',
//         success: function (data) {
//             $("#submeter").html('Sucesso');
//         },
//         error: function (data) {
//             console.log('Error:', data);
//             $("#submeter").html('Erro');
//         }
//     });

// }

// $(function() {
//     $.ajaxSetup({
//           headers: {
//               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//           }
//     });


// });
</script>
@endsection
