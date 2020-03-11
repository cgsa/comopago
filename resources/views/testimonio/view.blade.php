@extends('main')

@section('contenido')
<div class="content">

    <div class="">
        <div class="page-header-title">
            <h4 class="page-title">Actualizar Testimonio</h4>
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
                                          <dd class="col-sm-9">{{ $testimonio->nombre }}</dd>  
                                          
                                          <dt class="col-sm-3">Testimonio</dt>
                                          <dd class="col-sm-9">{{ $testimonio->testimonio }}</dd>   
                                                                              
                                        </dl>
                                        <div class="row" >
                                        	<a href="{{ route('testimonios.index') }}" class="btn btn-default waves-effect m-l-5" >
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