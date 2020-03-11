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
                                        <form class="" method="post" action="{{ route('banners.update', $banner->id) }}" enctype="multipart/form-data" >
                                        {!! method_field('PUT') !!}
                                        {!! csrf_field() !!}

                                            <div class="form-group">
                                                <label>Tipo</label>
                                                
												<select class="form-control" name="tipo" >
                                                    <option {{ ($banner->tipo == 1)? "selected='selected'" : '' }} value="1">Principal</option>
                                                    <option {{ ($banner->tipo == 2)? "selected='selected'" : '' }} value="2">Carrusel Medio</option>
                                                    <option {{ ($banner->tipo == 3)? "selected='selected'" : '' }} value="3">Carrusel Footer</option>
                                                    <option {{ ($banner->tipo == 4)? "selected='selected'" : '' }} value="3">Interna</option>
                                                </select>
                                                {{ $errors->first('tipo') }}
                                            </div>                                            
                                            
                                            <div class="form-group">
                                                <label>Titulo</label>
                                                <input type="text" name="titulo" value="{{ $banner->titulo }}" class="form-control" required placeholder="Titulo"/>
                                                {{ $errors->first('titulo') }}
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Sub-Titulo</label>
                                                <input type="text" name="subtitulo" value="{{ $banner->subtitulo }}" class="form-control" required placeholder="Sub-titulo"/>
                                                {{ $errors->first('subtitulo') }}
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Titulo Boton</label>
                                                <input type="text" name="boton_titulo" value="{{ $banner->boton_titulo }}" class="form-control" required placeholder="Titulo Boton"/>
                                                {{ $errors->first('boton_titulo') }}
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Descripción</label>
                                                <div>
                                                    <textarea name="descripcion" required class="form-control" rows="5">{{ $banner->descripcion }}</textarea>
                                                    {{ $errors->first('descripcion') }}
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Link</label>
                                                <input type="text" name="link" value="{{ $banner->link }}" class="form-control" required placeholder="Link"/>
                                                {{ $errors->first('link') }}
                                            </div>  
                                            
                                            <div class="form-group m-b-10">
                                                <p>Imagen</p>
                                                <input type="file" class="filestyle" name="image" data-buttonname="btn-primary">
                                                {{ $errors->first('imagen') }}
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Estado</label>
                                                
												<select class="form-control" name="status" >
                                                    <option {{ ($banner->status == 1)? "selected='selected'" : '' }} value="1">Activo</option>
                                                    <option {{ ($banner->status == 0)? "selected='selected'" : '' }} value="0">Inactivo</option>
                                                    <option {{ ($banner->status == 2)? "selected='selected'" : '' }} value="2">Pausado</option>
                                                </select>
                                                {{ $errors->first('status') }}
                                            </div>
                                            
                                            @if($banner->image)
                                                <div class="form-group m-b-10">
                                                    <img width="50%" alt="" src="{{ Storage::url($banner->image) }}" />
                                                </div>
                                            @endif
                                            
                                            <div class="form-group">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                        Registrar
                                                    </button>
                                                    <a href="{{ route('banners.index') }}" class="btn btn-default waves-effect m-l-5" >
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