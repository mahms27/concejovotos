@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">eleccion</a> </div>
    <h1>Crear nueva elecion </h1<
  </div>
  
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">

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
            <form id="registerForm"  name="registerForm" class="form-horizontal" method="POST"  action="{{ url('/admin/add-votos') }}">
                  {{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Proyecto de Acuerdo</label>

                    <div class="col-md-6">
                        <input id="name" required type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary" >
                            registrar
                        </button>
                    </div>
                </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--<script src="{{ asset('archivos_js/admin/nombre_votos.js') }}"></script>-->

@endsection