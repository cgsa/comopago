
@extends('mainlogin')

@section('contenido')

<div class="panel panel-color panel-primary panel-pages">

    <div class="panel-body">
        <h3 class="text-center m-t-0 m-b-15">
            <a href="{{ route('index') }}" class="logo logo-admin"><span>Web</span>Admin</a>
        </h3>
        <h4 class="text-muted text-center m-t-0"><b>Sign In</b></h4>

        <form class="form-horizontal m-t-20" method="post" action="{{ route('login') }}">
			
			{!! csrf_field() !!}
            <div class="form-group">
                <div class="col-xs-12">
                    <input class="form-control" type="text" name="email" required="" placeholder="Email">
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12">
                    <input class="form-control" type="password" name="password" required="" placeholder="Password">
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12">
                    <div class="checkbox checkbox-primary">
                        <input id="checkbox-signup" type="checkbox">
                        <label for="checkbox-signup">
                            Remember me
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group text-center m-t-40">
                <div class="col-xs-12">
                    <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Entrar</button>
                </div>
            </div>
        </form>
    </div>

</div>

@stop
