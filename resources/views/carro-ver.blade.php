<head>
  <title> Ver Carros</title>
<link rel="stylesheet" type="text/css" href="{{ asset("css/app.css") }}">
</head>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('/') }}">Laravel</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{url('carros')}}" >Carros</a></li>
      <li><a href="{{ url('carros/create') }}" >Registrar </a></li>
      <li><a href="{{ url('carro/ver') }}" style="background-color: blue; color:white;">Ver Carros</a></li>
      
    </ul>
  </div>
</nav>
<div class="container">
              <h1>Carros</h1>                                                                          
  <div class="table-responsive">          
  <table class="table  ">
    <thead>
      <tr>
        <th>#</th>
        <th>Placa</th>
        <th>Modelo</th>
        <th>Color</th>
        <th>Tipo</th>
        <th>Marca</th>
        
      
      </tr>
    </thead>
    <tbody>
    	  @foreach($model as $row)
      <tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->placa }}</td>
			<td>{{ $row->modelo }}</td>
			<td>{{ $row->color }}</td>

			@foreach($tipocar as $t)
           @if($row->tipo== $t->id)
           <td>{{ $t->descripcion }}</td>
           @endif
			@endforeach

			@foreach($marca as $m)
           @if($row->marca==$m->id)
           <td>{{ $m->nombre }}</td>
           @endif
			@endforeach
			

			
      </tr>
      	  @endforeach
    
    </tbody>

