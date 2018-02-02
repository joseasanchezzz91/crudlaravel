<head>
  <title> RegistarCarros</title>
<link rel="stylesheet" type="text/css" href="{{ asset("css/app.css") }}">
</head>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('/') }}">Laravel</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{url('carros')}}" >Carros</a></li>
      <li><a href="{{ url('carros/create') }}" style="background-color: blue; color:white;">Registrar </a></li>
      <li><a href="{{ url('carro/ver') }}">Ver Carros</a></li>
      
    </ul>
  </div>
</nav>
<div class="container">
  <div class="container">
    <h1 align="center">Registar Carros</h1>
  </div>
    <form class="form-horizontal" method="POST" action="{{url('carros')}}">
  
   {{ csrf_field() }}
        <div class="form-group">

            <label class="control-label col-xs-2">Placa:</label>

            <div class="col-xs-10">

                <input type="text" class="form-control" name="placa">
                   @if($errors->has('placa'))
                        <span style="color:red;">{{ $errors->first("placa")  }}</span>
                    @endif
            </div>
          </div>
           <div class="form-group">

            <label class="control-label col-xs-2">Modelo:</label>

            <div class="col-xs-10">

                <input type="text" class="form-control" name="modelo">
                   @if($errors->has('modelo'))
                        <span style="color:red;">{{ $errors->first("modelo")  }}</span>
                    @endif
            </div>
          </div>
           <div class="form-group">

            <label class="control-label col-xs-2">Color:</label>

            <div class="col-xs-10">

                <input type="text" class="form-control" name="color">
                   @if($errors->has('color'))
                        <span style="color:red;">{{ $errors->first("color")  }}</span>
                    @endif
            </div>
          </div>
           <div class="form-group">

            <label class="control-label col-xs-2">Tipo:</label>

            <div class="col-xs-10">

                 <select name="tipo" class="form-control">
                       @foreach($tipocar as $row)
                       <option  value="" > </option>
                    <option value="{{$row->id}}">{{$row->descripcion }}</option>
                    @endforeach
                      </select>
                   @if($errors->has('tipo'))
                        <span style="color:red;">{{ $errors->first("tipo")  }}</span>
                    @endif
            </div>
          </div>

          <div class="form-group">

   
             <label class="control-label col-xs-2">Marca:</label>
            <div class="col-xs-10">

               <select name="marca" class="form-control">
                       @foreach($model as $row)
                       <option  value="" ></option>
                    <option value="{{$row->id}}">{{$row->nombre }}</option>
                    @endforeach
                      </select>
                     @if($errors->has('marca'))
                        <span style="color:red;">{{ $errors->first("marca")  }}</span>
                    @endif
            </div>
    
        </div>

        <div class="form-group">

            <div class="col-xs-offset-2 col-xs-10">

                <button type="submit" class="btn btn-primary">Registar</button>

            </div>

        </div>

    </form>

    
</div>