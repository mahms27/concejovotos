@extends('layouts.app')
@section('content')
<div id="content">
     
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
   <form id="registerForm"  name="registerForm" class="form-horizontal" method="POST" action="{{ url('user/votos/index') }}">
   <ul class="list-group">


<input type="text" disabled name="voto_en_blanco" value="{{ $data->nombre }}">
                        <li class="list-group-item">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="votar" value="si"><H1>SI</H1>

                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="radio">
                                <label>
                                    
                                    <input type="radio" name="votar" value="no">
                                                                        <H1>NO</H1>

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