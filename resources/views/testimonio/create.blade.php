@extends('main')

@section('contenido')
<div class="content">

    <div class="">
        <div class="page-header-title">
            <h4 class="page-title">Nuevo Testimonio</h4>
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
                                         <form class="" method="post" action="{{ route('testimonios.store') }}" >
                                        {!! csrf_field() !!}
                                            
                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <input type="text" name="nombre" value="{{ old('nombre') }}" class="form-control" required placeholder="Nombre Y Apellido"/>
                                                {{ $errors->first('nombre') }}
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Testimonio</label>
                                                <div>
                                                    <textarea name="testimonio" required class="form-control" rows="5">{{ old('testimonio') }}</textarea>
                                                    {{ $errors->first('testimonio') }}
                                                </div>
                                            </div>                                     
                                            
                                            <div class="form-group">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                        Submit
                                                    </button>
                                                    <a href="{{ route('testimonios.index') }}" class="btn btn-default waves-effect m-l-5" >
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