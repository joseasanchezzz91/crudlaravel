<head>
  <title>Marcas</title>
<link rel="stylesheet" type="text/css" href="{{ asset("css/app.css") }}">
</head>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('/') }}">Laravel</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{url('marcas')}}" style="background-color: blue; color:white;">Marcas</a></li>
      <li><a href="{{ url('marcas/create') }}">Registrar </a></li>
      <li><a href="{{ url('marca/ver') }}">Ver Marcas</a></li>
      
    </ul>
  </div>
</nav>





<div class="container-fluid"> <h1>Aqui puedes registrar las marcas!</h1></div>
