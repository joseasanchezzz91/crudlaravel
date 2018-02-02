<head>
  <title> Ver Marcas</title>
<link rel="stylesheet" type="text/css" href="{{ asset("css/app.css") }}">
</head>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('/') }}">Laravel</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{url('marcas')}}" >Marcas</a></li>
      <li><a href="{{ url('marcas/create') }}">Registrar </a></li>
      <li><a href="{{ url('marca/ver') }}" style="background-color: blue; color:white;">Ver Marcas</a></li>
      
    </ul>
  </div>
</nav>
<div class="container">
              <h1>Marcas</h1>                                                                          
  <div class="table-responsive">          
  <table class="table  ">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th> Codigo del Pais</th>
        
      
      </tr>
    </thead>
    <tbody>
    	  @foreach($model as $row)
      <tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->nombre }}</td>
			<td>{{$row->pais}}</td>
      </tr>
      	  @endforeach
    
    </tbody>




















