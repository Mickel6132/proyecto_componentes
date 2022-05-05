@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <div>
<h2 class="text-white col-md-3" style="background:#5E5ED5">Crear Componentes</h2>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formulario Componentes') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('componentes.store')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="comp_nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input id="comp_nombre" type="text" class="form-control @error('comp_nombre') is-invalid @enderror" name="comp_nombre" value="{{ old('comp_nombre') }}" required autocomplete="comp_nombre" autofocus>

                                @error('comp_nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="comp_cantidad" class="col-md-4 col-form-label text-md-right">Cantidad</label>

                            <div class="col-md-6">
                                <input id="comp_cantidad" type="comp_cantidad" class="form-control @error('comp_cantidad') is-invalid @enderror" name="comp_cantidad" value="{{ old('comp_cantidad') }}" required autocomplete="comp_cantidad">

                                @error('comp_cantidad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                       <div class="form-group row">
                            <label for="comp_detalle" class="col-md-4 col-form-label text-md-right">Detalle</label>

                            <div class="col-md-6">
                                <input id="comp_detalle" type="comp_detalle" class="form-control @error('comp_detalle') is-invalid @enderror" name="comp_detalle" value="{{ old('comp_detalle') }}" required autocomplete="comp_detalle">

                                @error('comp_detalle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="comp_precio" class="col-md-4 col-form-label text-md-right">Precio</label>

                            <div class="col-md-6">
                                <input id="comp_precio" type="comp_precio" class="form-control @error('comp_precio') is-invalid @enderror" name="comp_precio" value="{{ old('comp_precio') }}" required autocomplete="comp_precio">

                                @error('comp_precio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       


                         

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Crear
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection