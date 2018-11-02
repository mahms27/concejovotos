<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="{{ url('/admin/dashboard')}}"><i class="glyphicon   glyphicon-dashboard"></i> <span>Dashboard</span></a> </li>
    <li class="submenu"> <a href="#"><i class="glyphicon glyphicon-user"></i> <span>Crear Usuarios</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{ url('/admin/create') }}">añadir usuario</a></li>

      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="glyphicon glyphicon-edit"></i> <span>Proyectos</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{ url('/admin/nombre_votos') }}">Crear Proyectos</a></li>
        <li><a href="{{ url('/admin/votos/all') }}">Ver  proyectos</a></li>
      </ul>
    </li>
  
  </ul>
</div>
<!--sidebar-menu-->