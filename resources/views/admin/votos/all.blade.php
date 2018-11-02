@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
 <div class="container-fluid">
   

             @if(Session::has('flash_message_error'))
            <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_error') !!}</strong>
            </div>
            @endif   
            @if(Session::has('flash_message_success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{!! session('flash_message_success') !!}</strong>
                </div>
            @endif 
       
        
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre de proyecto</th>
      <th scope="col">Acciones</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach ($proyectos as $proyecto)
    <tr>
      
       <td>{{$proyecto->id}}</td>
      <td>{{$proyecto->nombre}}</td>
      <td>
        @if ($proyecto->acciones == 'Habilitado')
        <form action="{{url('/admin/votos/all/'.$proyecto->id.'/deshabilitar')}}" method="post">
          {{ csrf_field() }}
        <input type="submit" class="btn btn-danger" name="id" value="deshabilitar">
        </form>
         @endif
        @if($proyecto->acciones == 'Deshabilitado')
          <form action="{{url('/admin/votos/all/'.$proyecto->id.'/habilitar')}}" method="post">
            {{ csrf_field() }}
         <input  checked="" class="btn btn-primary"  type="submit" name="id" value="habilitar">
           </form>
         @endif
      </td>
    </tr>
      @endforeach
  </tbody>
</table>
{!!$proyectos->render()!!}

        
       
      
    
  </div>
</div>


<!--<script src="{{ asset('archivos_js/admin/nombre_votos.js') }}"></script>-->

@endsection