@extends('mainsite')

@section('content')

@if( $banner->tipo == 1 )
<section id="slider" class="slider-element slider-parallax full-screen">
	<div class="slider-parallax-inner">
		@php 
		
		$image = ($banner->image)? Storage::url($banner->image) : '/images/header.jpg';
		$titulo = ($banner->titulo)? $banner->titulo : 'D GESTIONÁ TUS DEUDAS';
		$subtitulo = ($banner->subtitulo)? str_replace(',', '|', $banner->subtitulo) : 'Y RECIBÍ BENEFICIOS';
		$boton = ($banner->boton_titulo)? $banner->boton_titulo : 'EMPEZÁ HOY MISMO';
		$descripcion = ($banner->descripcion)? $banner->descripcion : 'Es un servicio completamente gratuito';
		$link = ($banner->link)? $banner->link : '';
		@endphp
		
		<div class="full-screen" style="background: url({{ $image }}); background-size: cover;">
			<div class="container clearfix">


				<div class="vertical-middle no-fade">
					<div class="col-lg-6 col-md-7 col-sm-12 dark fright nobottommargin" data-animate="fadeIn">

						<div class="emphasis-title">
							<h2>
							<div class="text-rotater" data-separator="|" data-rotate="flipInX" data-speed="3500">
							<strong>{{ $titulo }}
							<br>
							<span class="t-rotate d-none d-md-block">{{ $subtitulo }}</span></strong>
							</div>
							</h2>
						</div>

						<div class="d-none d-md-block">
							<a href="{{ $link }}" class="button button-desc button-border button-light button-rounded nomargin">
							<i class="icon-line-arrow-right"></i>
    							<div class="font-weight-bold">
    								{{ $boton }}<span>{{ $descripcion}}</span>
    							</div>
							</a>
						</div>

						<div class="d-block d-md-none font-weight-bold">
							<a href="registro.html" class="button button-light button-xlarge button-rounded nomargin"><i class="icon-line-arrow-right"></i>EMPEZÁ HOY</a>
						</div>

					</div>
				</div>

			</div>
		</div>

	</div>
</section>
@endif

<!-- Content
============================================= -->
@if($banner->tipo == 2 or $banner->tipo == 3)
<section id="content">

	<div class="content-wrap pt-0">

		<div class="row mb-0 common-height">

			<div class="col-lg-6 col-padding" style="background-color: #82C62A;">
				<div>
					<h2 class="uppercase text-white font-weight-bold">Por qué elegir
						<br><img src="/images/logo_wh.svg" width="200">
					</h2>
							<div class="feature-box fbox-plain text-white">
								<div class="fbox-icon">
									<a href="#"><i class="icon-line-check" class="text-white"></i></a>
								</div>
								<h3 class="text-white">ES TOTALMENTE GRATUITO</h3>
								<p class="text-white font-weight-normal">El uso de la plataforma es sin cargo y no cobramos comisiones.</p>
							</div>

							<div class="feature-box fbox-plain text-white">
								<div class="fbox-icon">
									<a href="#"><i class="icon-line-check" class="text-white"></i></a>
								</div>
								<h3 class="text-white">SOS VOS QUIEN GESTIONA SU DEUDA</h3>
								<p class="text-white font-weight-normal">No intermediamos de ninguna forma en la negociación. </p>
							</div>

							<div class="feature-box fbox-plain text-white">
								<div class="fbox-icon">
									<a href="#"><i class="icon-line-check" class="text-white"></i></a>
								</div>
								<h3 class="text-white">ES 100% SEGURO</h3>
								<p class="text-white font-weight-normal">Tus datos están protegidos y brindamos plataformas de pago certiﬁcadas por su seguridad.</p>
							</div>

							<div class="feature-box fbox-plain text-white">
								<div class="fbox-icon">
									<a href="#"><i class="icon-line-check" class="text-white"></i></a>
								</div>
								<h3 class="text-white">DECIDÍS CÓMO PAGAR Y RECIBÍS BENEFICIOS</h3>
								<p class="text-white font-weight-normal">Elegís tu plan de pago y obtenés importantes descuentos.</p>
							</div>
						<div class="text-center">
							<a href="ayuda.html" class="button button-circle button-border button-white more mt-5">Conocé más</a>
						</div>
				</div>
			</div>			
			
			<div class="col-lg-6 col-padding" style="background-color: #F9F9F9;">
				<div>
					<h2 class="uppercase font-weight-bold">Cómo funciona
						<br><img src="/images/logo.svg" width="200">
					</h2>
					<div class="fslider testimonial p-0" data-animation="fade" data-arrows="false" data-loop="true" data-autoplay="5000">
					<div class="flexslider">
						<div class="slider-wrap">
							
							@if($banner->tipo == 2)
							
    							@php 
    		
                        		$image = ($banner->image)? Storage::url($banner->image) : '/images/step_01.png';
                        		$titulo = ($banner->titulo)? $banner->titulo : 'D GESTIONÁ TUS DEUDAS';
                        		$subtitulo = ($banner->subtitulo)? str_replace(',', '|', $banner->subtitulo) : 'Y RECIBÍ BENEFICIOS';
                        		$boton = ($banner->boton_titulo)? $banner->boton_titulo : 'EMPEZÁ HOY MISMO';
                        		$descripcion = ($banner->descripcion)? $banner->descripcion : 'Es un servicio completamente gratuito';
                        		$link = ($banner->link)? $banner->link : '';
                        		$i = 0;
                        		$i++;
                        		@endphp
                        		
							<div class="slide">
								<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12">
									<img src="{{ $image }}" style="max-width: 400px">
								</div>
								<div class="col-lg-6 col-md-8 col-sm-12">
									<h1 class="mb-0 text-success" style="font-size: 75px">{{ $i }}.</h1>
									<h3 class="mb-0 text-uppercase">{{ $titulo }}</h3>
									<p>{{ $descripcion }}</p>
									<a href="{{ $link }}" class="button button-circle button-border more button-green mb-5">{{ $boton }}</a>
								</div>
								</div>
							</div>
							@endif
							<div class="slide">
								<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12">
									<img src="/images/step_02.png" class="w-100">
								</div>
								<div class="col-lg-6 col-md-8 col-sm-12">
									<h1 class="mb-0 text-success" style="font-size: 75px">2.</h1>
									<h3 class="mb-0 text-uppercase">Visualizá tu deuda</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
									<a href="ayuda.html" class="button button-circle button-border more button-green mb-5">Aprendé más</a>
								</div>
								</div>
							</div>
							<div class="slide">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-12">
										<img src="/images/step_01.png" class="w-100">
									</div>
									<div class="col-lg-6 col-md-8 col-sm-12">
										<h1 class="mb-0 text-success" style="font-size: 75px">3.</h1>
										<h3 class="mb-0 text-uppercase">Elegí cómo pagarla</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
										<a href="ayuda.html" class="button button-circle button-border more button-green mb-5">Aprendé más</a>
									</div>
								</div>
							</div>
							<div class="slide">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-12">
										<img src="/images/step_02.png" class="w-100">
									</div>
									<div class="col-lg-6 col-md-8 col-sm-12">
										<h1 class="mb-0 text-success" style="font-size: 75px">4.</h1>
										<h3 class="mb-0 text-uppercase">¡Listo!</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
										<a href="ayuda.html" class="button button-circle button-border more button-green mb-5">Aprendé más</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>			
		</div>
		
		@if($banner->tipo == 3)
		
			@php 
    		
    		$image = ($banner->image)? Storage::url($banner->image) : '/images/seguridad_parallax.jpg';
    		$titulo = ($banner->titulo)? $banner->titulo : 'LA SEGURIDAD EN PRIMER LUGAR';
    		$subtitulo = ($banner->subtitulo)? str_replace(',', '|', $banner->subtitulo) : 'Tus datos siempre están protegidos';
    		$boton = ($banner->boton_titulo)? $banner->boton_titulo : 'EMPEZÁ HOY MISMO';
    		$descripcion = ($banner->descripcion)? $banner->descripcion : 'Es un servicio completamente gratuito';
    		$link = ($banner->link)? $banner->link : '';
    		$i = 0;
    		$i++;
    		@endphp
		<section id="section-testimonials" class="page-section section parallax mb-0 mt-0" style="background-image: url({{ $image }}); padding: 100px 0;" data-bottom-top="background-position:0px 100px;" data-top-bottom="background-position:0px -100px;">

			<div class="container clearfix">

				<div class="row">
					<div class="col-lg-6 col-md-4 nobottommargin">&nbsp;</div>
					<div class="col-lg-6 col-md-8 col-sm-12 nobottommargin">
						<div class="heading-block center">
							<h4 class="mb-0">{{ $titulo }}</h4>
							<span class="mt-0">{{ $subtitulo }}</span>
						</div>
						<div class="center">
							<a href="{{ $link }}" class="button button-circle button-border more">{{ $boton }}</a>
						</div>

					</div>
				</div>

			</div>

		</section>
		@endif
		

	</div>

</section><!-- #content end -->
@endif

    		
@stop



