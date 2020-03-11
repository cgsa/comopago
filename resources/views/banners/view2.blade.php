@extends('main')

@section('contenido')
<div class="content">

    <div class="">
        <div class="page-header-title">
            <h4 class="page-title">Vista de Pregunta</h4>
        </div>
    </div>

    <div class="page-content-wrapper ">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-primary">

                        <div class="panel-body">                       						
                            
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">

                                    <div class="m-t-20">
                                    	
                                    	<dl class="row">
                                    	
                                          <dt class="col-sm-3">Tipo</dt>
                                          <dd class="col-sm-9">{{ $banner->getDescripcionTipo() }}</dd>  
                                          
                                          <dt class="col-sm-3">Titulo</dt>
                                          <dd class="col-sm-9">{{ $banner->titulo }}</dd>   
                                          
                                          <dt class="col-sm-3">Sub-Titulo</dt>
                                          <dd class="col-sm-9">{{ $banner->subtitulo }}</dd> 
                                          
                                          <dt class="col-sm-3">Titulo Boton</dt>
                                          <dd class="col-sm-9">{{ $banner->boton_titulo }}</dd> 
                                          
                                          <dt class="col-sm-3">Descripcion</dt>
                                          <dd class="col-sm-9">{{ $banner->descripcion }}</dd> 
                                          
                                          <dt class="col-sm-3">Link</dt>
                                          <dd class="col-sm-9">{{ $banner->link }}</dd> 
                                    	
                                          <dt class="col-sm-3">Estado</dt>
                                          <dd class="col-sm-9 m-b-10">{{ $banner->getEstado() }}</dd> 
                                          
                                          <dt class="col-sm-3">Imagen</dt>
                                          
                                          @if($banner->image)                                          
                                          	<dd class="col-sm-9">
                                          		<img width="50%" alt="" src="{{ Storage::url($banner->image) }}" />
                                          	</dd> 
                                          @endif
                                                                              
                                        </dl>
                                        <div class="row" >
                                        	<a href="{{ route('banners.index') }}" class="btn btn-default waves-effect m-l-5" >
                                            	Volver
                                            </a>
                                        </div>
                                        
                                    </div>

                                </div>

                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- end row -->

        </div><!-- container -->

    </div> <!-- Page content Wrapper -->

</div> <!-- content -->
@stop