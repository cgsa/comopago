@extends('main')

@section('contenido')

<div class="content">

    <div class="">
        <div class="page-header-title">
            <h4 class="page-title">Administrador Testimonios</h4>
        </div>
    </div>

    <div class="page-content-wrapper ">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <h4 class="m-b-30 m-t-0">Testimonios</h4>
                            <div class="row">
                                <div class="col-md-12 m-b-5">
                                	<a href="{{ route('testimonios.create') }}" class="btn btn-primary">Nueva Testimonio</a>
                                	
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                            	<th>Nombre</th>
                                                <th>Testimonio</th>
                                                <th width="15%"></th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            @foreach( $testimonios as $testimonio)                                        
                                                <tr>
                                                    <td>{{ $testimonio->nombre }}</td>
                                                    <td>{{ $testimonio->testimonio }}</td>
                                                    <td>                                                 	
                                                      	<a href="{{ route('testimonios.edit', $testimonio->id) }}" class="btn btn-default" >
                                                      		<i class="fa fa-check-square-o" aria-hidden="true"></i>
                                                      	</a>                                           	
                                                      	<a href="{{ route('testimonios.view', $testimonio->id) }}" class="btn btn-default" >
                                                      		<i class="fa fa-eye" aria-hidden="true"></i>
                                                      	</a>
                                                      	<form id="delete_item_{{ $testimonio->id }}" action="{{ route('testimonio.delete', $testimonio->id) }}" style="display: inline;" method="POST">
                                                      		{!! csrf_field() !!}
                                                      		{!! method_field('DELETE') !!}
                                                      		<a href="" class="btn_delete_items btn btn-default" title="Eliminar" data-id="{{ $testimonio->id }}" >
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


