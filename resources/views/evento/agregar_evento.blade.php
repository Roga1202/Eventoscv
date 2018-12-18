@extends('layouts.app')

@php

        // dd($errors);
@endphp
@section('head')
	<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
	<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}" charset="UTF-8"></script>
	<script src="{{ asset('assets/js/jquery-ui.min.js') }}" charset="UTF-8"></script>
@endsection

@section('block')
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><center>Agregar evento</center></h2>
			</div>
		</div>

		<form name="agregar_producto" class="form-horizontal" method="POST" enctype="multipart/form-data" action="/evento/agregar" autocomplete="off">
		<br>

			{{ csrf_field() }}

			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" id="name" name="name" >
						@if ($errors->has('name'))
							@foreach ($errors->get('name') as $error)
								<div class="invalid-feedback">{{ $error }}</div>   
							@endforeach
						@endif
					</div>
			</div>

			<div class="form-group">
					<label for="descripcion" class="col-sm-2 control-label">Descripcion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control @if($errors->has('descripcion')) is-invalid @endif" id="descripcion" name="descripcion" maxlength="45" >
						@if ($errors->has('descripcion'))
							@foreach ($errors->get('descripcion') as $error)
								<div class="invalid-feedback">{{ $error }}</div>   
							@endforeach
						@endif
					</div>
			</div>

			<div class="form-group">
				<label for="categoria" class="col-sm-2 control-label">Categoria</label>
				<div class="col-sm-10">
					<select class="selectpicker {{-- @if($errors->has('categoria')) is-invalid @endif --}} {{-- Intento de colocar error,$RL--}}" id="categoria" name="categoria" >
						/
						@if (isset($categorias))
							@foreach($categorias as $categoria)
							<option value="{{ $categoria->CA_ID }}">{{ $categoria->CA_ID }}.-{{ $categoria->CA_name }}</option>
							@endforeach
						@endif
						@if (empty($categorias))
							<option value="">No hay categorias creadas</option>
						@endif
					</select>
				</div>
				{{-- @if ($errors->has('categoria'))
					@foreach ($errors->get('categoria') as $error)
						<div class="invalid-feedback">{{ $error }}</div>   
					@endforeach
				@endif --}}
				{{-- Intento de colocar error --}}
			</div>

			<div class="form-group">
				<label for="lugar" class="col-sm-2 control-label">Lugar</label>
				<div class="col-sm-10">
					<input type="text" class="form-control @if($errors->has('lugar')) is-invalid @endif" id="lugar" name="lugar" maxlength="45" >
					@if ($errors->has('lugar'))
						@foreach ($errors->get('lugar') as $error)
							<div class="invalid-feedback">{{ $error }}</div>   
						@endforeach
					@endif
				</div>
			</div>

			<div class="form-group">
				<label for="prize" class="col-sm-2 control-label">Precio</label>
				<div class="col-sm-10">
					<input type="number" class="form-control @if($errors->has('prize')) is-invalid @endif" step="0.1" id="prize" name="prize" lenght="20">
					@if ($errors->has('prize'))
						@foreach ($errors->get('prize') as $error)
							<div class="invalid-feedback">{{ $error }}</div>   
						@endforeach
					@endif
				</div>
			</div>

			<div class="form-group">
				<label for="fecha" class="col-sm-2 control-label">Fecha</label>
				<div class="col-sm-10">
					<input type="text" name="fecha" id="datepicker" class="form-control @if($errors->has('fecha')) is-invalid @endif" name="fecha">
					@if ($errors->has('fecha'))
						@foreach ($errors->get('fecha') as $error)
							<div class="invalid-feedback">{{ $error }}</div>   
						@endforeach
					@endif
				</div>
			</div>

			{{-- <div class="form-group">
				<label for="img" class="col-sm-2 control-label">Imagen</label>
				<div class="col-sm-10">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="img" name="img" lang="es">
							<label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
						</div>
				</div>
			</div> --}}

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<a href="/" class="btn btn-default">Regresar</a>
					<input type="submit" class="btn btn-primary" value="Guardar">
				</div>
			</div>
		</form>
	</div>
	@endsection

	@section('script')
		<script>
			$("#datepicker").datepicker();
		</script>
	@endsection
	{{-- Nombre, descripcion, puede ser categoria, lugar, precio de la entrada, imagen , fecha, --}}
