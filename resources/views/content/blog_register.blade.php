@extends("layout.main_admin")

@section('titulo')
Contacto
@endsection

@section('conteudo')



<section class="contact-area pt-105 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30" style="background-color: rgb(243, 245, 247)">
    <div class="container">
        <div class="contact-border pb-90 pb-md-30 pb-xs-30">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="contact-img-wrapper pr-30 pr-md-0 pr-xs-0 mb-30">
                        <img class="w-100" src="assets/img/contact/blog.jpg" alt="Img">
                        {{-- <img class="icons" src="assets/img/contact/icon-1.png" alt="Icon"> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="contact-input-wrapper mb-30">
                        <div class="section-title mb-25">
                            {{-- <h6 class="semi-title mb-10">Faça solicitação personalizada</h6> --}}
                            <h2 class="sect-title mb-35">Blog Register</h2>
                        </div>
                        <form class="row contact-form" action="{{route('blog.gravar')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-6 col-md-6">
                                <div class="input-box mb-20">
                                    <input name="titulo" type="text" placeholder="titulo" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="">
                                    <input name="foto" type="file" required>
                                </div>
                            </div>
                            {{-- <div class="col-lg-6 col-md-6">
                                <div class="input-box mail-input mb-20">
                                    <input name="assunto" type="text" placeholder="Assunto">
                                </div>
                            </div> --}}
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
                                        placeholder="Enter massge" required></textarea>
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
       
    </div>
</section>
@endsection