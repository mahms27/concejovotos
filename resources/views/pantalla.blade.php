
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"><html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['proyectos', 'Aprobado', 'No Aprobado', 'Abstencion'],
            @foreach($pantallas as $pantalla)
            ['{{$pantalla->id_nombre_votos}}',{{$pantalla->total_si}},{{$pantalla->total_no}},{{$pantalla->total_voto_blanco}}],
             @endforeach
        
        ]);

        var options = {
          chart: {
            title: 'Graficas de Votos',
          
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
        

      } 

    </script>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  </head>
  <body>
  
     <div id="columnchart_material" class="span4"> 
  <div class"row">
  </div>
</div>



    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nombre Concejal</th>
  
       <th scope="col">Nombre proyecto</th>
     <th scope="col">Aprobado </th>
      <th scope="col">No Aprobado</th>
       <th scope="col">Abstencion</th>
    </tr>
  </thead>
  <tbody>


    @foreach ($mostrarusers as $mostraruser)
    <tr>
      
   
      <td>{{$mostraruser->usuario}}</td>

        <td>{{$mostraruser->proyecto}}</td>
        <td>{{$mostraruser->si}}</td>
        <td>{{$mostraruser->no}}</td>
         <td>{{$mostraruser->voto_en_blanco}}</td>

    </tr>
      @endforeach
  </tbody>
</table>
    
 

  </body>
   
 
</html>
