@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
         <h1>NOMBRE  DEL PROYECTO A VOTAR</h1>
        <div class="col-sm-4">
           <div class="panel panel-pink">
            <div class="panel-body"><h1>SI</h1></div>
          </div>
        </div>

        <div class="col-sm-4">
           <div class="panel panel-blue">
            <div class="panel-body"><h1>
<pre>
@if($last->acciones=='Habilitado')
 {{ $last }}

 @endif </pre></h1></div>
          </div>
        </div>
        <div class="col-sm-4">
           <div class="panel panel-yellow">
            <div class="panel-body"><h1>Voto en Blanco</h1></div>
          </div>
        </div>
    </div>
</div>
                 
                
     </div>
        </div>
    </div>
</div>
@endsection
