<head>
  <title>Carros</title>
<link rel="stylesheet" type="text/css" href="{{ asset("css/app.css") }}">
</head>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('/') }}">Laravel</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{url('carros')}}" style="background-color: blue; color:white;">Carros</a></li>
      <li><a href="{{ url('carros/create') }}">Registrar Carros </a></li>
      <li><a href="{{ url('carro/ver') }}">Ver Carros</a></li>
      
    </ul>
  </div>
</nav>

<h1>Registrar Carros</h1>