@extends('main')

@section('contenido')
<div class="content">

    <div class="">
        <div class="page-header-title">
            <h4 class="page-title">Nuevo Cliente</h4>
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
                                         <form class="" method="post" action="{{ route('clientes.store') }}" enctype="multipart/form-data" >
                                        {!! csrf_field() !!}
											
                                            
                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <input type="text" name="nombre" class="form-control" required placeholder="Nombre"/>
                                                {{ $errors->first('nombre') }}
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Url</label>
                                                <input type="text" name="url" class="form-control" required placeholder="Url"/>
                                                {{ $errors->first('url') }}
                                            </div>  
                                            
                                            <div class="form-group m-b-10">
                                                <p>Imagen</p>
                                                <input type="file" class="filestyle" name="image" data-buttonname="btn-primary">
                                                {{ $errors->first('imagen') }}
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Estado</label>
                                                
												<select class="form-control" name="actived" >
                                                    <option value="1">Activo</option>
                                                    <option value="0">Inactivo</option>
                                                    <option value="2">Pausado</option>
                                                </select>
                                                {{ $errors->first('actived') }}
                                            </div>
                                            
                                            <div class="form-group">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                        Submit
                                                    </button>
                                                    <a href="{{ route('clientes.index') }}" class="btn btn-default waves-effect m-l-5" >
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