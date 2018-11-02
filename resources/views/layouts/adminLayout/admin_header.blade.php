<!--Header-part-->
<div id="header">
  <h1><a href="{{ url('/admin/dashboard') }}">Laravel Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="glyphicon glyphicon-chevron-down"></i>  <span class="text">Bienvenido {{ Auth::user()->name }}</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
       <!-- <li><a href="#"><i class="icon-user"></i> My Profile</a></li>-->
        <li class="divider"></li>
        <li><a href="{{ url('/admin/settings') }}"><i class="glyphicon glyphicon-cog"></i>Configuracion</a></li>
        <li class="divider"></li>
        <li><a href="{{url('/logout')}}"><i class="glyphicon glyphicon-log-out"></i> Cerrar sesion</a></li>
      </ul>
    </li>
  
    </li>
    <li class=""><a title="" href="{{ url('/admin/settings') }}"><i class="glyphicon glyphicon-cog"></i> <span class="text">Configurar</span></a></li>
    <li class=""><a title="" href="{{ url('/logout')}}"><i class="glyphicon glyphicon-log-out"></i> <span class="text">cerrar session</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->