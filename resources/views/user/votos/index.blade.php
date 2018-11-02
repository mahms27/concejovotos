@extends('layouts.app')
@section('content')
<div id="content">
  <div id="content-header">
   
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
             @if(Session::has('flash_message_error'))
            <div class="alert alert-danger alert-block">
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
   <form id="registerForm"  name="registerForm" class="form-horizontal" method="POST"  action="{{ url('user/votos/index') }}">
    {{ csrf_field() }}
   <ul class="list-group">

<li class="list-group-item">
                            <div class="radio">
                                <label> PROYECTOS A VOTAR</label>
                                  
     
              <select class="form-control" name="proyecto" >
      @foreach ($proyectos as $proyecto)
      @if ($proyecto->acciones == 'Habilitado')
      <option value="{{$proyecto->id}}">{{$proyecto->nombre}}</option>
      @endif
      @endforeach
    </select>


                                   

                               
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="votar" value="si"><H1>Aprobado</H1>

                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="radio">
                                <label>
                                    
                                    <input type="radio" name="votar" value="no">
                                                                        <H1>No aprobado</H1>

                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="radio">
                                <label>
                                    
                                    <input type="radio" name="votar" value="voto_en_blanco">
                                                                        <H1>Abstención</H1>

                                </label>
                            </div>
                        </li>
                        <input class="btn btn-success"type="submit" name="voto">
                    </ul>


    </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection