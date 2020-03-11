@extends('main')

@section('contenido')
<div class="content">

    <div class="">
        <div class="page-header-title">
            <h4 class="page-title">Vista Cliente</h4>
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
                                          
                                          <dt class="col-sm-3">Nombre</dt>
                                          <dd class="col-sm-9">{{ $cliente->nombre }}</dd>   
                                          
                                          <dt class="col-sm-3">Url</dt>
                                          <dd class="col-sm-9">{{ $cliente->url }}</dd> 
                                    	
                                          <dt class="col-sm-3">Estado</dt>
                                          <dd class="col-sm-9 m-b-10">{{ $cliente->getEstado() }}</dd> 
                                          
                                          <dt class="col-sm-3">Imagen</dt>
                                          
                                          @if($cliente->image)                                          
                                          	<dd class="col-sm-9">
                                          		<img width="50%" alt="" src="{{ Storage::url($cliente->image) }}" />
                                          	</dd> 
                                          @endif
                                                                              
                                        </dl>
                                        <div class="row" >
                                        	<a href="{{ route('clientes.index') }}" class="btn btn-default waves-effect m-l-5" >
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