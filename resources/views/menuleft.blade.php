<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <div class="user-details">
            <div class="text-center">
                <img src="/assets/images/users/avatar-1.jpg" alt="" class="img-circle">
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    	{{ auth()->user()->getFullName() }} 
                    </a>
                    	@include('menulink')
<!--                     <ul class="dropdown-menu"> -->
<!--                         <li><a href="javascript:void(0)"> Profile</a></li> -->
<!--                         <li><a href="javascript:void(0)"> Settings</a></li> -->
<!--                         <li><a href="javascript:void(0)"> Lock screen</a></li> -->
<!--                         <li class="divider"></li> -->
<!--                         <li><a href="javascript:void(0)"> Logout</a></li> -->
<!--                     </ul> -->
                </div>

                <p class="text-muted m-0"><i class="fa fa-dot-circle-o text-success"></i> Online</p>
            </div>
        </div>
        <!--- Divider -->


        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('site.vista') }}" class="waves-effect"><i class="mdi mdi-home"></i><span>Inicio</span></a>
                </li>
				@if(auth()->user()->isSuperAdmin() or auth()->user()->onlyPermited( collect(['ADMIN-USER','ADMIN-BASIC']) ))
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account"></i> <span> Usuarios </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('usuarios.index') }}">Usuarios</a></li>
                        <li><a href="{{ route('items.index') }}">Items</a></li>
                        <li><a href="{{ route('roles.index') }}">Roles</a></li>
                        <li><a href="{{ route('usuarios.log') }}">Logs</a></li>
                    </ul>
                </li>
				@endif
				
				@if(auth()->user()->isSuperAdmin() or auth()->user()->onlyPermited( collect(['ADMIN-USER','ADMIN-BASIC']) ))
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-web"></i> <span> Web Site </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('index') }}">Inicio</a></li>
                        <li><a href="{{ route('banners.index') }}">Banners</a></li>
                        <li><a href="{{ route('preguntas.index') }}">Preguntas Frecuentes</a></li>
                        <li><a href="{{ route('testimonios.index') }}">Testimonios</a></li>
                        <li><a href="{{ route('clientes.index') }}">Clientes</a></li>
                    </ul>
                </li>
				@endif
                
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>