@extends('main')

@section('contenido')
<div class="content">

    <div class="">
        <div class="page-header-title">
            <h4 class="page-title">Actualizar Banner</h4>
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
                                        <form class="" method="post" action="{{ route('clientes.update', $cliente->id) }}" enctype="multipart/form-data" >
                                        {!! method_field('PUT') !!}
                                        {!! csrf_field() !!}

                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <input type="text" name="nombre" value="{{ $cliente->nombre }}" class="form-control" required placeholder="Nombre"/>
                                                {{ $errors->first('nombre') }}
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Url</label>
                                                <input type="text" name="url" value="{{ $cliente->url }}" class="form-control" required placeholder="Url"/>
                                                {{ $errors->first('url') }}
                                            </div>  
                                            
                                            <div class="form-group m-b-10">
                                                <p>Imagen</p>
                                                <input type="file" class="filestyle" name="image" data-buttonname="btn-primary">
                                                {{ $errors->first('image') }}
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Estado</label>
                                                
												<select class="form-control" name="actived" >
                                                    <option {{ ($cliente->actived == 1)? "selected='selected'" : '' }} value="1">Activo</option>
                                                    <option {{ ($cliente->actived == 0)? "selected='selected'" : '' }} value="0">Inactivo</option>
                                                    <option {{ ($cliente->actived == 2)? "selected='selected'" : '' }} value="2">Pausado</option>
                                                </select>
                                                {{ $errors->first('actived') }}
                                            </div>
                                            
                                            @if($cliente->image)
                                                <div class="form-group m-b-10">
                                                    <img width="50%" alt="" src="{{ Storage::url($cliente->image) }}" />
                                                </div>
                                            @endif
                                            
                                            <div class="form-group">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                        Registrar
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