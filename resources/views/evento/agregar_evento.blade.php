@extends('layouts.app')

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
						<input type="text" class="form-control" id="name" name="name" required>
					</div>
			</div>

			<div class="form-group">
					<label for="color" class="col-sm-2 control-label">Descripcion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="descripcion" name="descripcion" maxlength="45" required>
					</div>
			</div>

			<div class="form-group">
				<label for="categoria" class="col-sm-2 control-label">Categoria</label>
				<div class="col-sm-10">
					<select class="selectpicker" id="categoria" name="categoria" required>
						<option value="Ropa intima">Ropa intima</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label for="lugar" class="col-sm-2 control-label">Lugar</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="lugar" name="lugar" maxlength="45" required>
				</div>
			</div>

			<div class="form-group">
				<label for="prize" class="col-sm-2 control-label">Precio</label>
				<div class="col-sm-10">
					<p><input type="number" step="0.01" name="prize" required="required" placeholder="00">$</p>
				</div>
			</div>

			<div class="form-group">
				<label for="fecha" class="col-sm-2 control-label">Fecha</label>
				<div class="col-sm-10">
					<input type="text" name="fecha" id="datepicker">
				</div>
			</div>

			<div class="form-group">
				<label for="fecha" class="col-sm-2 control-label">Imagen</label>
				<div class="col-sm-10">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="img" name="img" lang="es">
							<label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
						</div>
				</div>
			</div>

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
