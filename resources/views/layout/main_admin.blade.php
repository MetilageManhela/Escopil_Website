@extends("layout.admin")

@section('titulo')

@endsection

@section('conteudo')

<section class="feature-area pb-30">
    <div class="container-fluid px-0">
		
        <div class="row gx-0">
			
            <div class="col-lg-4">
				<a href="{{route('blog.index')}}">
                <div class="single-feature">
                    <img class="f-icon" src="assets/img/feature/icon-1.png" alt="Feature Iocn">
                    <h2>+Blog</h2>
                    {{-- <h6><span>01.</span> Business Strategy &</h6> --}}
                </div>
			</a>
            </div>
	
            <div class="col-lg-4" >
				<a href="/">
                <div class="single-feature feat-3">
                    <img class="f-icon" src="assets/img/feature/icon-2.png" alt="Feature Iocn">
                    <h2>Solicitações</h2>
                    {{-- <h6><span>02.</span> Private Internet Access</h6> --}}

                </div>
			</a>
            </div>
            <div class="col-lg-4">
				<a href="/">
                <div class="single-feature ">
                    <img class="f-icon" src="assets/img/feature/icon-3.png" alt="Feature Iocn">
                    <h2>?????</h2>
                    {{-- <h6><span>03.</span> Customer Strategy &</h6> --}}

                </div>
			</a>
            </div>
        </div>
    </div>
</section>
							
@endsection