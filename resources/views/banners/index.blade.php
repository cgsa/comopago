@extends('main')

@section('contenido')

<div class="content">

    <div class="">
        <div class="page-header-title">
            <h4 class="page-title">Administrador de Banners</h4>
        </div>
    </div>

    <div class="page-content-wrapper ">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <h4 class="m-b-30 m-t-0">Banner</h4>
                            <div class="row">
                                <div class="col-md-12 m-b-5">
                                	<a href="{{ route('banners.create') }}" class="btn btn-primary">Nuevo Banner</a>
                                	
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                            	<th>Tipo</th>
                                                <th>Titulo</th>
                                                <th>Sub Titulos</th>
                                                <th>Boton Titulo</th>
                                                <th>Descripcion</th>
                                                <th width="15%"></th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            @foreach( $banners as $banner)                                        
                                                <tr>
                                                    <td>{{ $banner->tipo }}</td>
                                                    <td>{{ $banner->titulo }}</td>
                                                    <td>{{ $banner->subtitulo }}</td>
                                                    <td>{{ $banner->boton_titulo }}</td>
                                                    <td>{{ $banner->descripcion }}</td>
                                                    <td>                                                 	
                                                      	<a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-default" >
                                                      		<i class="fa fa-check-square-o" aria-hidden="true"></i>
                                                      	</a>                                           	
                                                      	<a href="{{ route('banners.view2', $banner->id) }}" class="btn btn-default" >
                                                      		<i class="fa fa-eye" aria-hidden="true"></i>
                                                      	</a>
                                                      	<form id="delete_item_{{ $banner->id }}" action="{{ route('items.destroy', $banner->id) }}" style="display: inline;" method="POST">
                                                      		{!! csrf_field() !!}
                                                      		{!! method_field('DELETE') !!}
                                                      		<a href="" class="btn_delete_items btn btn-default" title="Eliminar Item" data-id="{{ $banner->id }}" >
                                                      			<i class="fa fa-trash "></i>
                                                      		</a>                  		                   		                 		
                                                  		</form>
                                                    </td>
                                                </tr>
                                        	@endforeach                                        
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- End Row -->



        </div><!-- container -->

    </div> <!-- Page content Wrapper -->

</div> <!-- content -->
@stop

@section('javascript')
	$(document).ready(function()
	{
		$('body').delegate('.btn_delete_items','click',function()
		{
			var id = $(this).attr('data-id');
			$('#delete_item_'+id).submit();
			return false;
		});
	});
@stop


