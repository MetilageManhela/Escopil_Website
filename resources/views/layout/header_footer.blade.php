<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<title>Escopil Tecnologia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="manifest" href="site.webmanifest" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png" />
	<!-- Place favicon.ico in the root directory -->

	<!-- CSS here -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" />
	<link rel="stylesheet" href="{{asset('git imate.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/gt-font.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/metisMenu.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/spacing.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
</head>

<body>
	<!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

	<!-- Add your site or application content here -->
	<!-- preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- preloader end  -->
	<!-- header-area start -->
	<header>
		<div class="header-top heding-bg" style="background-color: white">
			<div class="container">
				<div class="row align-items-center" >
					<div class="col-md-6 col-6" >
						<div class="left-cta">
							<span style="color: #245FA7"><i class="fal fa-envelope"></i> info@webmail.com</span>
							<span style="color: #245FA7"><i class="fal fa-phone"></i> +258 XX XX XXX</span>
						</div>
					</div>
					<div class="col-md-6 col-6 text-end">
						<div class="right-language">
							<div class="dropdown">
								<a class="language-btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
									data-bs-toggle="dropdown" aria-expanded="false">
									English <i class="fal fa-chevron-down"></i>
								</a>

								<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
									<li><a class="dropdown-item" href="#">Arabic</a></li>
									<li><a class="dropdown-item" href="#">USA</a></li>
									<li><a class="dropdown-item" href="#">German</a></li>
									<li><a class="dropdown-item" href="#">Chaina</a></li>
									<li><a class="dropdown-item" href="#">Spanish</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom-border-line"></div>
			<div class="container d-none d-md-block">
				<div class="row pt-25">
					<div class="col-xl-4 col-lg-3 d-none d-lg-inline-block">
						<div class="logo-area">
							<a class="head-logo-1" href="/"><img src="assets/img/logo/ESCOPIL-11.png" style="height: 80px"
									alt="Header-logo"></a>
						</div>
					</div>
					<div class="col-xl-8 col-lg-9">
						<ul class="right-query mb-0">
							<li>
								<div class="icon"><i class="fal fa-map-marker-alt"></i></div>
								<div class="query-list" style="color: #245FA7">
									<span style="color: #245FA7">406/RC, Av. Ahmed S. Toure</span>
									<span style="color: #245FA7">Maputo, MZ.</span>
								</div>
							</li>
							<li>
								<div class="icon" ><i class="fal fa-clock"></i></div>
								<div class="query-list" style="color: #245FA7">
									<span style="color: #245FA7">Seg. - Sex.: 08:00 - 17:00</span>
									<span style="color: #245FA7">Sab. - Dom.: <strong style="color: #245FA7">Fechado</strong></span>
								</div>
							</li>
							{{-- <li style="background-color: #415ca4">
								<a class=" " href="contact.html">Get A Quote</a>
							</li> --}}
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="heding-bg-1" id="hideshow-sticky-menu" style="background-color: #245FA7">
			<div class="main-header-area">
				<div class="container">
					<div class="white-bg row align-items-center gx-0">
						<div class="col-lg-10 col-6 text-start">
							<div class="logo-area d-lg-none d-md-block">
								<a href="index.html"><img style="width: 150px; height: 80px;" src="assets/img/logo/ESCOPIL-11.png" alt="Header-logo"></a>
							</div>
							<nav id="topheader" class="navbar navbar-expand-lg justify-content-start py-0">
								<div class="nav-container">
									<div class="collapse navbar-collapse" id="navbarSupportedContent">
										<ul class="navbar-nav list-style-none">
											<li class="nav-item dropdown active">
												<a style="color: #245FA7" class="nav-link dropdown-toggle" href="{{route('home.page')}}"
													{{-- id="navbarDropdown1" role="button" data-bs-toggle="dropdown" --}}
													aria-expanded="false">Home
													<i class="fal fa-chevron-down"></i></a>
												{{-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
													<li class="dropdown-submenu">
														<a class="dropdown-item dropdown-toggle" href="services.html"
															id="navbarDropdow2a" role="button" data-bs-toggle="dropdown"
															aria-expanded="false">Multipage <i
																class="fal fa-chevron-down"></i></a>
														<ul class="dropdown-menu dropdown-menu2"
															aria-labelledby="navbarDropdown2a">
															<li>
																<a class="dropdown-item" href="index.html">Home Style 1</a>
															</li>
															<li>
																<a class="dropdown-item" href="index-2.html">Home Style 2</a>
															</li>
															<li>
																<a class="dropdown-item" href="index-3.html">Home Style 3</a>
															</li>
															<li>
																<a class="dropdown-item" href="index-4.html">Home Style 4</a>
															</li>
															<li>
																<a class="dropdown-item" href="index-5.html">Home Style 5</a>
															</li>
															<li>
																<a class="dropdown-item" href="index-6.html">Home Style 6</a>
															</li>
															<li>
																<a class="dropdown-item" href="index-7.html">Home Style 7</a>
															</li>
														</ul>
													</li>
													<li class="dropdown-submenu">
														<a class="dropdown-item dropdown-toggle" href="services.html"
															id="navbarDropdow2a" role="button" data-bs-toggle="dropdown"
															aria-expanded="false">Onepages <i
																class="fal fa-chevron-down"></i></a>
														<ul class="dropdown-menu dropdown-menu2"
															aria-labelledby="navbarDropdown2a">
															<li>
																<a class="dropdown-item" href="index_onepage.html">Onepage Style 1</a>
															</li>
															<li>
																<a class="dropdown-item" href="index-2_onepage.html">Onepage Style 2</a>
															</li>
															<li>
																<a class="dropdown-item" href="index-3_onepage.html">Onepage Style 3</a>
															</li>
															<li>
																<a class="dropdown-item" href="index-4_onepage.html">Onepage Style 4</a>
															</li>
															<li>
																<a class="dropdown-item" href="index-5_onepage.html">Onepage Style 5</a>
															</li>
															<li>
																<a class="dropdown-item" href="index-6_onepage.html">Onepage Style 6</a>
															</li>
															<li>
																<a class="dropdown-item" href="index-7_onepage.html">Onepage Style 7</a>
															</li>
														</ul>
													</li>
												</ul> --}}
											</li>
											<li class="nav-item">
												<a class="nav-link" href="{{route('about_us.page')}}">Sobre Nós</a>
											</li>
											<li class="nav-item dropdown">
												<a class="nav-link dropdown-toggle" href="services.html"
													id="navbarDropdow2" role="button" data-bs-toggle="dropdown"
													aria-expanded="false">Serviços <i
														class="fal fa-chevron-down"></i></a>
												<ul class="dropdown-menu">
													<li>
														<a class="dropdown-item" href="{{route('service.page')}}">Todos</a>
													</li>
													<li>
														<a class="dropdown-item" href="services-details.html">Detalhes dos
															Serviços</a>
													</li>
												</ul>
											</li>
											<li class="nav-item dropdown">
												<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4"
													role="button" data-bs-toggle="dropdown" aria-expanded="false">Páginas
													<i class="fal fa-chevron-down"></i></a>
												<ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
													<li>
														<a class="dropdown-item" href="team.html">Equipa</a>
													</li>
													<li>
														<a class="dropdown-item" href="team-details.html">Detalhes da
															Equipa</a>
													</li>
													<li>
														<a class="dropdown-item" href="portfolio.html">Portfolio</a>
													</li>
													<li>
														<a class="dropdown-item" href="portfolio-details.html">Detalhes do
														Portfolio</a>
													</li>
													<li>
														<a class="dropdown-item" href="career.html">Carreiras</a>
													</li>
													<li>
														<a class="dropdown-item" href="error.html">Error</a>
													</li>
													<li>
														<a class="dropdown-item" href="faq.html">Faq</a>
													</li>
												</ul>
											</li>
											<li class="nav-item dropdown">
												<a class="nav-link dropdown-toggle" href="blog.html"
													id="navbarDropdown5" role="button" data-bs-toggle="dropdown"
													aria-expanded="false">Novidades</a>
												<ul class="dropdown-menu" aria-labelledby="navbarDropdown5">
													<li>
														<a class="dropdown-item" href="{{route('blog.page')}}">Blog</a>
													</li>
													{{-- <li>
														<a class="dropdown-item" href="blog-details.html">Blog
															Details</a>
													</li> --}}
												</ul>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="{{route('contacto.page')}}">Contacto</a>
											</li>
										</ul>
									</div>
								</div>
							</nav>
						</div>
						<div class="col-lg-2 col-6">
							<ul class="right-nav mb-0 d-flex align-items-center justify-content-end">
								<li class="search-area">
									<a class="search_input nav-search search-trigger header-2-icon" href="#">
										<i class="fal fa-search"></i></a>
								</li>
								<li>
									<div class="hamburger-menu">
										<a href="javascript:void(0);">
											<img src="{{asset('assets/img/icon/eclips.png')}}" alt="Eclips">
										</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /.theme-main-menu -->
		</div>
	</header>
	<!-- header-area end -->

	<!-- slide-bar start -->
	<aside class="slide-bar">
		<div class="close-mobile-menu">
			<a href="javascript:void(0);"><i class="fas fa-times"></i></a>
		</div>
		<!-- offset-sidebar start -->
		<div class="offset-sidebar">
			<div class="offset-widget offset-logo mb-30">
				<a href="index.html">
					<img src="{{asset('assets/img/logo/footer-logo1.png')}}" alt="logo">
				</a>
			</div>
			<div class="offset-widget mb-40">
				<div class="info-widget">
					<h4 class="offset-title mb-20">Sobre Nós</h4>
					<p class="mb-30">
						But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
						was born and will give you a complete account of the system and expound the actual teachings of
						the great explore
					</p>
					<a class="theme_btn theme_btn_bg" href="contact.html">Entra em Contacto</a>
				</div>
			</div>
			<div class="offset-widget mb-30 pr-10">
				<div class="info-widget info-widget2">
					<h4 class="offset-title mb-20">Info Contacto</h4>
					<p> <i class="fal fa-address-book"></i> 406/RC, Av. Ahmed S. Toure, Maputo</p>
					<p> <i class="fal fa-phone"></i> +258 XX XX XX XXX</p>
					<p> <i class="fal fa-envelope-open"></i> info@example.com </p>
				</div>
			</div>
		</div>
		<!-- offset-sidebar end -->
		<!-- side-mobile-menu start -->
		<nav class="side-mobile-menu">
			<ul id="mobile-menu-active">
				<li class="has-dropdown">
					<a href="index.html">Home</a>
					<ul class="sub-menu">
						<li class="has-dropdown">
							<a href="#">Multipage</a>
							<ul class="sub-menu">
								<li><a href="index.html">Home Style 1</a></li>
								<li><a href="index-2.html">Home Style 2</a></li>
								<li><a href="index-3.html">Home Style 3</a></li>
								<li><a href="index-4.html">Home Style 4</a></li>
								<li><a href="index-5.html">Home Style 5</a></li>
								<li><a href="index-6.html">Home Style 6</a></li>
								<li><a href="index-7.html">Home Style 7</a></li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a href="#">Onepage</a>
							<ul class="sub-menu">
								<li><a href="index_onepage.html">Onepage Style 1</a></li>
								<li><a href="index-2_onepage.html">Onepage Style 2</a></li>
								<li><a href="index-3_onepage.html">Onepage Style 3</a></li>
								<li><a href="index-4_onepage.html">Onepage Style 4</a></li>
								<li><a href="index-5_onepage.html">Onepage Style 5</a></li>
								<li><a href="index-6_onepage.html">Onepage Style 6</a></li>
								<li><a href="index-7_onepage.html">Onepage Style 7</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="has-dropdown">
					<a href="services.html">Services</a>
					<ul class="sub-menu">
						<li><a href="services.html">Services</a></li>
						<li><a href="services-details.html">Services Details</a></li>
					</ul>
				</li>
				<li><a href="about.html">About</a></li>
				<li class="has-dropdown">
					<a href="#">Pages</a>
					<ul class="sub-menu">
						<li><a href="team.html">Team</a></li>
						<li><a href="team-details.html">Team Details</a></li>
						<li><a href="portfolio.html">Portfolio</a></li>
						<li><a href="portfolio-details.html">Portfolio Details</a></li>
						<li><a href="career.html">Career</a></li>
						<li><a href="error.html">Error</a></li>
						<li><a href="faq.html">Faq</a></li>
					</ul>
				</li>
				<li class="has-dropdown">
					<a href="blog.html">News</a>
					<ul class="sub-menu">
						<li><a href="blog.html">Blog</a></li>
						<li><a href="blog-details.html">Blog Details</a></li>
					</ul>
				</li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
		<!-- side-mobile-menu end -->
	</aside>
	<div class="body-overlay"></div>
	<!-- slide-bar end -->

	<main>
		<!--slider-area start-->

			@yield('conteudo')



	</main>
	<!--footer-area start-->
	<footer class="heding-bg footer-area pt-100" style="background-color: #245FA7">
		<div class="container">
			<div class="row mb-15">
				<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp2 animated" data-wow-delay=".1s">
					<div class="footer__widget mb-30">
						<h6 class="widget-title text-white pb-20 mb-35">A Empresa</h6>
						<p>Modern HMIs are transforming the way
							we interact with our vehicles. A becomes
							a gadget that we use in a similar way as
							we use our phones.
						</p>
						<div class="footer__social mt-30">
							<a href="#"><i class="fab fa-facebook-f"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-linkedin-in"></i></a>
							<a href="#"><i class="fab fa-google-plus-g"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp2 animated" data-wow-delay=".3s">
					<div class="border-theme footer__widget mb-30 pl-135 pl-md-0 pl-xs-0">
						<h6 class="widget-title text-white pb-20 mb-35">Nossos Serviços</h6>
						<ul class="fot-list">
							<li><a href="#">Infra-Estrutura</a></li>
							<li><a href="#">Segurança</a></li>
							<li><a href="#">R&D</a></li>
							<li><a href="#">Gestão de Projectos</a></li>
							<li><a href="#">ERP Next</a></li>
							<li><a href="#">Análise de Sistemas</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp2 animated" data-wow-delay=".5s">
					<div class="footer__widget mb-25 pl-25 pl-md-0 pl-xs-0">
						<h6 class="widget-title text-white pb-20 mb-35">Entre em Contacto</h6>
						<ul class="fot-list fot-list-1">
							<li><a href="#">(+258) xx xx xx xxx</a></li>
							<li><a href="#">support@example.com</a></li>
							<li><a href="#">Horário: <span style="color: aliceblue">08h - 17h</span></a>
							</li>
							<li>
								<a href="#">406/RC, Av. Ahmed S. Toure, Maputo, MZ </a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp2 animated" data-wow-delay=".7s">
					<div class="footer__widget mb-30">
						<h6 class="widget-title text-white pb-20 mb-35">Subscreva</h6>
						<form class="subscribe-form" action="#">
							<div class="input-box mb-10" >
								<input type="text" placeholder="Nome Completo">
							</div>
							<div class="input-box mail-input mb-10">
								<input type="text" placeholder="Endereço e-mail">
							</div>

							<button class="theme_btn subscribe-btn" style="background-color:#0d305c ">Subscreva<i
									class="fal fa-long-arrow-right"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="container pt-35">
			<div class="row white-bg align-items-center">
				<div class="col-lg-6 col-md-4 text-center text-md-start">
					<div class="logo-area pl-25 pt-20 mb-20">
						<a href="index.html"><img style="width: 100px; height: 50px;" src="{{asset('assets/img/logo/ESCOPIL-11.png')}}" alt="Footer-logo"></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-8 text-center text-md-end">
					<ul class="footer-nav">
						<li class="nav-item">
							<a class="nav-link" href="about.html">Sobre Nós</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="faq.html">FAQ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="blog-details.html">Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html">Contacte-nos</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="copy-right-area border-bot pt-30">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-12">
						<div class="copyright mb-30 text-center">
							<h6>Copyright & Design By <a href="index.html">@ReacThemes</a> - 2023</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--footer-area end-->
	<!-- Fullscreen search -->
	<div class="search-wrap">
		<div class="search-inner">
			<i class="fas fa-times search-close" id="search-close"></i>
			<div class="search-cell">
				<form method="get">
					<div class="search-field-holder">
						<input type="search" class="main-search-input" placeholder="Search Your Keyword...">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- end fullscreen search -->

	<!-- JS here -->

	<script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
	<script src="{{asset('assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.nice-select.js')}}"></script>
	<script src="{{asset('assets/js/wow.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
	<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
	<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('assets/js/plugins.js')}}"></script>
	<script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
