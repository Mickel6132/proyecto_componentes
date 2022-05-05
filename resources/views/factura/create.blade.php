@extends('layouts.app')
@section('content')
<div class="container">
  <div class="col-md-12">
<h2 class="text-white ">Crear Factura</h2>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Formulario Registro</title>
</head>
<body>
  <section class="form-register">
    <h4>Crear Factura</h4>
    <form method="POST" action="{{route('facturas.store')}}">
      @csrf
        <label for="">Clientes</label>
        <select name="cli_id" id="cli_id" class="form-control">
        @foreach($clientes as $c)
        <option value="{{$c->cli_id}}">{{$c->cli_nombre}}</option>
        @endforeach
    </select>



    <input class="controls" type="text" name="fac_no" id="fac_no" placeholder="Ingrese N ">
    <input class="controls" type="date" name="fac_fecha" id="fac_fecha" placeholder="Ingrese Fecha">
    <input class="controls" type="text" name="fac_total" id="fac_total" placeholder="Total">
    <input class="controls" type="text" name="fac_iva" id="fac_iva" placeholder="Iva">
        <input class="controls" type="text" name="fac_descuento" id="fac_descuento" placeholder="Ingrese Descuento">
            <input class="controls" type="text" name="fac_observaciones" id="fac_observaciones" placeholder="Ingrese Obervaciones">
                <input class="controls" type="text" name="fac_estado" id="fac_estado" placeholder="Estado">
   <button class="btn btn-info">Crear</button>
  </section>

</div>

</body>
</html>

<table>
	<tr>
	<th>#</th>	
		<th>Cantidad</th>	
			<th>Producto</th>	
      	<th>Vu</th>	
      		<th>Vt</th>	
</tr>
</table>

@endsection