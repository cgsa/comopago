@extends('main')

@section('contenido')
<div class="content">

    <div class="">
        <div class="page-header-title">
            <h4 class="page-title">Actualizar Pregunta</h4>
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
                                    	
                                          <dt class="col-sm-3">Pregunta</dt>
                                          <dd class="col-sm-9">{{ $pregunta->pregunta }}</dd>  
                                          
                                          <dt class="col-sm-3">Respuesta</dt>
                                          <dd class="col-sm-9">{{ $pregunta->respuesta }}</dd>   
                                                                              
                                        </dl>
                                        <div class="row" >
                                        	<a href="{{ route('preguntas.index') }}" class="btn btn-default waves-effect m-l-5" >
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