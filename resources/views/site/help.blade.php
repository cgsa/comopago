@extends('mainsite')

@section('content')

@php 
    		
$image = isset($banner->image)? Storage::url($banner->image) : '/images/ayuda.jpg';
$titulo = isset($banner->titulo)? $banner->titulo : 'D GESTIONÁ TUS DEUDAS';
$subtitulo = isset($banner->subtitulo)? str_replace(',', '|', $banner->subtitulo) : 'Y RECIBÍ BENEFICIOS';
@endphp

<section id="slider" class="slider-element" style="background: url({{ $image }}) center; overflow: visible;" data-height-xl="500" data-height-lg="500" data-height-md="600" data-height-sm="600" data-height-xs="600">
	<div class="container clearfix">
		<div class="vertical-middle no-fade">
			<div class="col-lg-6 col-md-7 col-sm-12 dark fright nobottommargin" data-animate="fadeIn">
				<div class="emphasis-title">
					<h2 class="text-uppercase">
					<strong>{{ $titulo }}<br> {{ $subtitulo }}</strong>
					</h2>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Content
============================================= -->
<section id="content">
	<div class="content-wrap" style="background-color: #f9f9f9">
		<div class="container clearfix">
			<div class="row">
				<div class="col-lg-9 col-md-7 col-sm-12">
					<h3>Así funciona <img src="/images/logo.svg" width="200"></h3>
					<iframe src="https://player.vimeo.com/video/107092062" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
				<div class="col-lg-3 col-md-5 col-sm-12">
					<a href="#" class="button button-desc button-border button-green button-rounded w-100 pt-3 pb-3 pr-3 pl-4"><div class="font-weight-bold">¿Necesitás ayuda?<span>¡Chatea con nosotros!</span></div></a>
				</div>
			</div>
		</div>
	</div>
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="row">
    			<div class="col-lg-9 col-md-12 col-sm-12">
    				<h3>Preguntas frecuentes</h3>
    				
        				@forelse( $preguntas as $pregunta)
        					<div class="toggle toggle-bg mt-5">
            					<div class="togglet">
                					<i class="toggle-closed icon-line-arrow-right"></i>
                					<i class="toggle-open icon-line-cross"></i>
                					¿{{ $pregunta->pregunta }}?
            					</div>
            					<div class="togglec">{{ $pregunta->respuesta }}</div>
            				</div>
        				@empty
            				<div class="toggle toggle-bg mt-5">
            					<div class="togglet"><i class="toggle-closed icon-line-arrow-right"></i><i class="toggle-open icon-line-cross"></i>¿Qué es comopago.com?</div>
            					<div class="togglec">comopago.com es una plataforma que conecta deudores y acreedores a los cuales les brinda herramientas de contacto y pago. comopago.com está desarrollada con los mas altos estándares de protección de datos para garantizar la privacidad de los mismos.</div>
            				</div>
            				<div class="toggle toggle-bg">
            					<div class="togglet"><i class="toggle-closed icon-line-arrow-right"></i><i class="toggle-open icon-line-cross"></i>¿Es totalmente gratis?</div>
            					<div class="togglec">Sí. El uso de la plataforma comopago.com es 100% gratuito para el deudor, y no existen comisiones de ningún tipo sobre los acuerdos concretados.</div>
            				</div>
            				<div class="toggle toggle-bg">
            					<div class="togglet"><i class="toggle-closed icon-line-arrow-right"></i><i class="toggle-open icon-line-cross"></i>¿Qué tipo de entidades acreedoras participan?</div>
            					<div class="togglec">Participan entidades bancarias, tarjetas de crédito, empresas de servicios y tiendas departamentales, entre otras.</div>
            				</div>
            				<div class="toggle toggle-bg">
            					<div class="togglet"><i class="toggle-closed icon-line-arrow-right"></i><i class="toggle-open icon-line-cross"></i>¿Cuáles son los requisitos para registrarme?</div>
            					<div class="togglec">Tenés que ser mayor de edad, poseer un número de documento argentino y contestar de manera efectiva preguntas de validación de identidad para controlar de manera efectiva el acceso a tus datos.</div>
            				</div>
            				<div class="toggle toggle-bg">
            					<div class="togglet"><i class="toggle-closed icon-line-arrow-right"></i><i class="toggle-open icon-line-cross"></i>¿Quién gestiona mis deudas?</div>
            					<div class="togglec">Vos. comopago.com te brinda la plataforma y vías de contacto directo con la entidad acreedora. comopago.com no intermedia ni participa de ninguna manera en la gestión.</div>
            				</div>
            
            				<div class="toggle toggle-bg">
            					<div class="togglet"><i class="toggle-closed icon-line-arrow-right"></i><i class="toggle-open icon-line-cross"></i>¿Qué tipo de beneficios recibo?</div>
            					<div class="togglec">Como deudor, puedo tomar contacto con la entidad acreedora, realizar preguntas, visualizar planes de pagos, proponer mi plan de pago, y realizar la cancelación de la deuda.</div>
            				</div>
            				<div class="toggle toggle-bg">
            					<div class="togglet"><i class="toggle-closed icon-line-arrow-right"></i><i class="toggle-open icon-line-cross"></i>¿Existe un plazo para cancelar mi deuda?</div>
            					<div class="togglec">No. La entidad acreedora te ofrecerá alternativas para que vos elijas el plan de pagos que mejor se ajusta a tus necesidades.</div>
            				</div>
            				<div class="toggle toggle-bg">
            					<div class="togglet"><i class="toggle-closed icon-line-arrow-right"></i><i class="toggle-open icon-line-cross"></i>¿Cómo me pongo en contacto con la entidad acreedora?</div>
            					<div class="togglec">comopago.com te ofrece la posibilidad de enviarle mensajes directos, dialogar por chat o enviarle un mensaje de audio. También podrás acceder a otros datos de contacto, como su sitio web y número telefónico.</div>
            				</div>
        				@endforelse
    				<div class="toggle toggle-bg">
					<div class="togglet"><i class="toggle-closed icon-line-arrow-right"></i><i class="toggle-open icon-line-cross"></i>¿Cómo me registro en comopago.com?</div>
					<div class="togglec">Ingresá en compago.com y realizá un clic en “Registrate”, o directamente en este 
						<a href="https://ar.comopago.com/registroNuevoUsuario/registro">link</a>.<br>
							En esa dirección ingresarás tu nro. de DNI, mail y otros datos personales muy sencillos un mail te llegará a tu cuenta para activarla y finalmente deberás contestar preguntas para que validemos tu identidad para asegurarnos que solo vos puedas acceder a los datos de u deuda.
						</div>
					</div>
					<div class="toggle toggle-bg">
						<div class="togglet"><i class="toggle-closed icon-line-arrow-right"></i><i class="toggle-open icon-line-cross"></i>¿Cómo veo mi deuda en comopago.com?</div>
						<div class="togglec">Luego de registrarte y contestar las preguntas de validación, accedés al panel de deudas informadas por los acreedores.
						</div>
					</div>
					<div class="toggle toggle-bg">
						<div class="togglet"><i class="toggle-closed icon-line-arrow-right"></i><i class="toggle-open icon-line-cross"></i>¿Qué significa que una deuda informada por el Banco Central (BCRA)?</div>
						<div class="togglec">El BCRA recibe información crediticia de las entidades financieras bajo su control. Estas entidades envían trimestralmente, la información de la situación crediticia de cada uno de sus clientes. La información que detalla el BCRA no significa necesariamente que la deuda esté vencida y/o sea exigible.
						</div>
					</div>
					<div class="toggle toggle-bg">
						<div class="togglet"><i class="toggle-closed icon-line-arrow-right"></i><i class="toggle-open icon-line-cross"></i>¿Cómo se realizan los pagos?</div>
						<div class="togglec">Seleccionás un plan de pagos, imprimís el cupón y vas a un PagoFacil o Rapipago para realizar el pago efectivo de tu deuda.
						</div>
					</div>
    			</div>
			</div>
		</div>
	</div>
</section><!-- #content end -->
    		
@stop



