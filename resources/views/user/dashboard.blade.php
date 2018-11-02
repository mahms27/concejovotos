@extends('layouts.userLayout.user_design')
@section('content')

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{url('/user/dashboard/')}}" title="dashboard" class="tip-bottom"><i class="glyphicon glyphicon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="{{ url('/user/votos/index') }}" title="Votaciones" class="tip-bottom" > <i class="icon-dashboard"></i> <span class="label label-important"></span> Votaciones</a> </li>
        

      </ul>
    </div>
<!--End-Action boxes-->    


  </div>
</div>
<!--end-main-container-part-->

@endsection