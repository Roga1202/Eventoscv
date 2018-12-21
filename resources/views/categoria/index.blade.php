@extends('layouts.app')
    @section('head')
    	<title>Eventoscv-Inicio</title>
    @endsection

    @section('block')
    <br>
    <br>
    <br>
    <br>
    <br>
    <center><h2>Categoria</h2></center>
    <br>
    <br>
    <br>
    <div class="container">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Actualizar</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
              <tr>
                  <td scope="row">{{ $categoria['CA_name'] }}</td>
                  <td scope="row">{{ $categoria['CA_descripcion'] }}</td>
                  <td><a href="categoria/actualizar/{{$categoria['CA_ID']}}" class="btn btn-primary btn-sm">Actualizar:{{$categoria['CA_ID']}}</a></td>
                      <form action="/categoria/eliminar/{{$categoria['EV_ID']}}" method="POST" >
                    {{ method_field('DELETE')}}
                    {{ csrf_field() }}
                    <td><button type="submit" class='btn btn-danger btn-sm'>Eliminar:{{$categoria['CA_ID']}}</button></td>
                  </form>
                </tr>
          @endforeach
        </tbody>
      </table>
      @if (count($categorias))
      <div class="mt-2 mx-auto">
          {{ $categorias->links('pagination::bootstrap-4') }}    
      </div>
      @endif
    </div>
    @endsection

  @section('script')
  @endsection
</html>
