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
                                        <form class="" method="post" action="{{ route('preguntas.update', $pregunta->id) }}" enctype="multipart/form-data" >
                                        {!! method_field('PUT') !!}
                                        {!! csrf_field() !!}

                                            <div class="form-group">
                                                <label>Tipo</label>
                                                
												<select class="form-control" name="tipo" >
                                                    <option {{ ($pregunta->tipo == 1)? "selected='selected'" : '' }} value="1">Principal</option>
                                                    <option {{ ($pregunta->tipo == 2)? "selected='selected'" : '' }} value="2">Preguntas Frecuentes</option>
                                                </select>
                                                {{ $errors->first('tipo') }}
                                            </div>                                            
                                            
                                            <div class="form-group">
                                                <label>Pregunta</label>
                                                <input type="text" name="pregunta" value="{{ $pregunta->pregunta }}" class="form-control" required placeholder="Pregunta"/>
                                                {{ $errors->first('pregunta') }}
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Respuesta</label>
                                                <div>
                                                    <textarea name="respuesta" required class="form-control" rows="5">{{ $pregunta->respuesta }}</textarea>
                                                    {{ $errors->first('respuesta') }}
                                                </div>
                                            </div>                                            
                                            
                                            
                                            <div class="form-group">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                        Registrar
                                                    </button>
                                                    <a href="{{ route('preguntas.index') }}" class="btn btn-default waves-effect m-l-5" >
                                                    	Volver
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
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