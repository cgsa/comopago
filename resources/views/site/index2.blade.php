@extends('mainsite')

@section('content')

<section id="slider" class="slider-element slider-parallax full-screen">
	<div class="slider-parallax-inner">
	
		@if( isset($banner->image) )
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
		@endif
	</div>
</section>

<!-- Content
============================================= -->
<section id="content">

	<div class="content-wrap pt-0">

		<div class="row mb-0 common-height">

			<div class="col-lg-6 col-padding" style="background-color: #82C62A;">
				<div>
					<h2 class="uppercase text-white font-weight-bold">Por qué elegir
						<br><img src="/images/logo_wh.svg" width="200">
					</h2>
							@forelse($preguntas as $pregunta)
    							<div class="feature-box fbox-plain text-white">
    								<div class="fbox-icon">
    									<a href="#"><i class="icon-line-check" class="text-white"></i></a>
    								</div>
    								<h3 class="text-white">{{ $pregunta->pregunta }}</h3>
    								<p class="text-white font-weight-normal" style="font-size: 14px !important;">{{ $pregunta->respuesta }}</p>
    							</div>
							@empty
    							<div class="feature-box fbox-plain text-white">
    								<div class="fbox-icon">
    									<a href="#"><i class="icon-line-check" class="text-white"></i></a>
    								</div>
    								<h3 class="text-white">ES TOTALMENTE GRATUITO</h3>
    								<p class="text-white font-weight-normal">El uso de la plataforma es sin cargo y no cobramos comisiones.</p>
    							</div>
							@endforelse
							
						<div class="text-center">
							<a href="{{ route('site.help') }}" class="button button-circle button-border button-white more mt-5">Conocé más</a>
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
							@forelse($carrusels as $carrusel)
							
    							@php
    							
    								$image = ($carrusel->image)? Storage::url($carrusel->image) : '/images/step_01.png';
    								
    							@endphp
							<div class="slide">
							
							
								<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12">
									<img src="{{ $image }}" style="max-width: 400px">
								</div>
								<div class="col-lg-6 col-md-8 col-sm-12">
									<h1 class="mb-0 text-success" style="font-size: 75px">{{ $loop->iteration }}.</h1>
									<h3 class="mb-0 text-uppercase">{{ $carrusel->titulo }}</h3>
									<p>{{ $carrusel->descripcion }}</p>
									<a href="ayuda.html" class="button button-circle button-border more button-green mb-5">{{ $carrusel->boton_titulo }}</a>
								</div>
								</div>
							</div>
							@empty
							
							<div class="slide">
							
							
								<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12">
									<img src="/images/step_01.png" style="max-width: 400px">
								</div>
								<div class="col-lg-6 col-md-8 col-sm-12">
									<h1 class="mb-0 text-success" style="font-size: 75px">1.</h1>
									<h3 class="mb-0 text-uppercase">Ingresá a comopago</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
									<a href="ayuda.html" class="button button-circle button-border more button-green mb-5">Aprendé más</a>
								</div>
								</div>
							</div>
							@endforelse							
							
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		
		@if(isset($footer->titulo))
		
    		@php 		
    		$background = ($footer->image)? Storage::url($footer->image) : '/images/seguridad_parallax.jpg';
    		$titulo = isset($footer->titulo)? $footer->titulo : 'LA SEGURIDAD EN PRIMER LUGAR';
    		$subtitulo = isset($footer->subtitulo)? $footer->subtitulo : 'Y RECIBÍ BENEFICIOS';
    		$boton = isset($footer->boton_titulo)? $footer->boton_titulo : 'Políticas de privacidad y seguridad';		
    		$link = ($footer->link)? $footer->link : '';
    		@endphp
    		<section id="section-testimonials" class="page-section section parallax mb-0 mt-0" style="background-image: url('{{ $background }}'); padding: 100px 0;" data-bottom-top="background-position:0px 100px;" data-top-bottom="background-position:0px -100px;">
    
    			<div class="container clearfix">
    
    				<div class="row">
    					<div class="col-lg-6 col-md-4 nobottommargin">&nbsp;</div>
    					<div class="col-lg-6 col-md-8 col-sm-12 nobottommargin">
    
    						<div class="heading-block center">
    							<h4 class="mb-0">{{ $titulo }}</h4>
    							<span class="mt-0">{{ $subtitulo }}</span>
    						</div>
    						<div class="center">
    							<a href="{{ $link }}" class="button button-circle button-border more">Políticas de privacidad y seguridad</a>
    						</div>
    
    					</div>
    				</div>
    
    			</div>
    
    		</section>
		@endif
		<div class="section mt-0">
			<div class="container clearfix mt-0">
				<div class="heading-block center">
					<h4 class="mb-0">TESTIMONIOS</h4>
					<span class="mt-0">Las experiencias de nuestros usuarios</span>
				</div>
				<div class="fslider testimonial testimonial-full mb-0 mt-0 pt-0" data-animation="fade" data-arrows="false">
						<div class="flexslider">
							<div class="slider-wrap">
								@forelse( $testimonios as $testimonio )
								<div class="slide">
									<div class="testi-content">
										<p>“{{ $testimonio->testimonio }}”</p>
										<div class="testi-meta">
											{{ $testimonio->nombre }}
										</div>
									</div>
								</div>
								@empty
								<div class="slide">
									<div class="testi-content">
										<p>“In voluptate velit esse cillum dolore eu fugiat nulla pariatur”</p>
										<div class="testi-meta">
											María
										</div>
									</div>
								</div>
								@endforelse								
							</div>
						</div>
				</div>
			</div>
		</div>

		<div class="row mb-3 mt-5">
			<div class="container clearfix">
				<div id="oc-clients-full" class="owl-carousel image-carousel carousel-widget" data-margin="30" data-nav="false" data-loop="true" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6">
						
						
						@forelse( $clientes as $cliente )
    						@php						
    							$imagen = isset($cliente->image)? Storage::url($cliente->image) : '/images/seguridad_parallax.jpg';
    							$nombre = isset($cliente->nombre)? $cliente->nombre : ''; 	
    							$url = 	isset($cliente->url)? $cliente->url : '';					
    						@endphp
    						
    						<a href="{{ $url }}">
    							<img src="{{ $imagen }}" alt="{{ $nombre }}">
    						</a>
    						
						@empty
						
    						<a href="#"><img src="/images/clients/client_01.jpg" alt="Clients"></a>
    						<a href="#"><img src="/images/clients/client_02.png" alt="Clients"></a>
    						<a href="#"><img src="/images/clients/client_01.jpg" alt="Clients"></a>
    						<a href="#"><img src="/images/clients/client_02.png" alt="Clients"></a>
    						<a href="#"><img src="/images/clients/client_01.jpg" alt="Clients"></a>
    						<a href="#"><img src="/images/clients/client_02.png" alt="Clients"></a>
    						<a href="#"><img src="/images/clients/client_01.jpg" alt="Clients"></a>
    						<a href="#"><img src="/images/clients/client_02.png" alt="Clients"></a>
    						<a href="#"><img src="/images/clients/client_01.jpg" alt="Clients"></a>
    						<a href="#"><img src="/images/clients/client_02.png" alt="Clients"></a>
    						<a href="#"><img src="/images/clients/client_01.jpg" alt="Clients"></a>
    						<a href="#"><img src="/images/clients/client_02.png" alt="Clients"></a>
						
						@endforelse
				</div>
			</div>
		</div>

	</div>

</section><!-- #content end -->
    		
@stop



