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
				<h2><center>Agregar Categoria</center></h2>
			</div>
		</div>

		@if (isset($result))
			<div class="row">
				<div class="col-md-12">
					<div class="alert alert-success">Categoria Guardado!</div>
				</div>
			</div>
		@endif

		<form name="agregar_producto" class="form-horizontal" method="POST" enctype="multipart/form-data" action="/categoria/agregar" autocomplete="off">
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
