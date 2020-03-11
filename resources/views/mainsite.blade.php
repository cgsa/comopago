<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Portafolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="/assets/images/favicon.ico">

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="/assets/plugins/morris/morris.css">
        
        <!-- DataTables -->
        <link href="/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/style.css" rel="stylesheet" type="text/css">
        
        
        <!-- Stylesheets
    	============================================= -->
    	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
    	<link rel="stylesheet" href="/css/bootstrap.css" type="text/css" />
    	<link rel="stylesheet" href="/style.css" type="text/css" />
    	<link rel="stylesheet" href="/css/swiper.css" type="text/css" />
    	<link rel="stylesheet" href="/css/dark.css" type="text/css" />
    	<link rel="stylesheet" href="/css/font-icons.css" type="text/css" />
    	<link rel="stylesheet" href="/css/animate.css" type="text/css" />
    	<link rel="stylesheet" href="/css/magnific-popup.css" type="text/css" />
    
    	<link rel="stylesheet" href="/css/responsive.css" type="text/css" />
    	<meta name="viewport" content="width=device-width, initial-scale=1" />

    </head>
    
    <body class="stretched">

    	<!-- Document Wrapper
    	============================================= -->
    	<div id="wrapper" class="clearfix">
    
    		<!-- Top Bar
    		============================================= -->
    		<div id="top-bar">
    
    			<div class="col-12 nobottommargin">
    
    					<!-- Top Social
    					============================================= -->
    					<div class="top-links fright">
    						<ul>
    							@if(Auth::guard(null)->check())
    								<li><a href="{{ route('site.vista') }}" class="text-uppercase">Administrador</a></li>
    							@endif
    							
    							<li><a href="login.html" class="text-uppercase">Ingresá</a></li>
    							<li><a href="registro.html" class="text-uppercase">Registrate</a></li>
    						</ul>
    					</div><!-- #top-social end -->
    
    
    			</div>
    
    		</div><!-- #top-bar end -->
    
    		
    		<!-- Header
    		============================================= -->
    		<header id="header" class="full-header">
    
    			<div id="header-wrap">
    
    				<div class="container clearfix">
    
    					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
    
    					<!-- Logo
    					============================================= -->
    					<div id="logo">
    						<a href="{{ route('index') }}" class="standard-logo" data-dark-logo="/images/logo.svg"><img src="/images/logo.svg" class="institional-s"></a>
    						<a href="{{ route('index') }}" class="retina-logo" data-dark-logo="/images/logo.svg"><img src="/images/logo.svg" class="institional-r"></a>
    					</div><!-- #logo end -->
    
    					<!-- Primary Navigation
    					============================================= -->
    					<nav id="primary-menu">
    
    						<ul class="pl-3">
    							<li><a href="#"><div>Sumá tu empresa</div></a></li>
    							<li><a href="{{ route('site.help') }}"><div>Ayuda</div></a></li>
    						</ul>
    
    
    					</nav><!-- #primary-menu end -->
    
    				</div>
    
    			</div>
    
    		</header><!-- #header end -->
    
    		@yield('content')
    
    				<!-- Footer
    		============================================= -->
    		<footer id="footer" class="dark institional">
    
    			<div class="container">
    
    				<!-- Footer Widgets
    				============================================= -->
    				<div class="footer-widgets-wrap clearfix pt-5 pb-5">
    
    					<div class="row">
    						<div class="col-lg-3">
    							<img src="/images/logo_wh.svg" width="200px">				
    						</div>
    
    						<div class="col-lg-9 pt-3">
    
    							<div class="copyrights-menu copyright-links float-sm-left float-md-left float-lg-right float-xl-right clearfix">
    								<a href="#">Sobre comopago.com</a><br class="d-block d-sm-block d-md-none d-lg-none d-xl-none">
    								<a href="#">Sumá tu empresa</a><br class="d-block d-sm-block d-md-none d-lg-none d-xl-none">
    								<a href="{{ route('site.help') }}">Ayuda</a><br class="d-block d-sm-block d-md-none d-lg-none d-xl-none">
    								<a href="seguridad.html">Políticas de privacidad y seguridad</a><br class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
    								<a href="tel:08003330033" onclick="window.open('tel:08003330033', '_system'); return false;"><i class="icon-phone3"></i> +54 0000 0000</a>
    							</div>
    
    						</div>
    					</div>
    
    				</div><!-- .footer-widgets-wrap end -->
    
    			</div>
    
    			<!-- Copyrights
    			============================================= -->
    			<div id="copyrights">
    
    				<div class="container clearfix">
    
    							Copyrights © 2018 Todos los derechos reservados
    		
    				</div>
    
    			</div><!-- #copyrights end -->
    
    		</footer><!-- #footer end -->
    
    	</div><!-- #wrapper end -->
    
    	<!-- Go To Top
    	============================================= -->
    	<div id="gotoTop" class="icon-angle-up"></div>
    
    	<!-- External JavaScripts
    	============================================= -->
    	<script src="/js/jquery.js"></script>
    	<script src="/js/plugins.js"></script>
    
    	<!-- Footer Scripts
    	============================================= -->
    	<script src="/js/functions.js"></script>
    
    </body>


</html>