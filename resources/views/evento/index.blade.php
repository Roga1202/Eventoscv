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
            <th scope="col">Lugar</th>
            <th scope="col">Date</th>
            <th scope="col">Inicio</th>
            <th scope="col">Actualizar</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($eventos as $evento)
              <tr>
                  <td scope="row">{{ $evento['EV_name'] }}</td>
                  <td scope="row">{{ $evento['EV_descripcion'] }}</td>
                  <td scope="row">{{ $evento['EV_lugar'] }}</td>
                  <td scope="row">{{ $evento['EV_date'] }}</td>
                  <td scope="row">{{ $evento['EV_inicio'] }}</td>
                    <td><a href="evento/actualizar/{{$evento['CA_ID']}}" class="btn btn-primary btn-sm">Actualizar:{{$evento['CA_ID']}}</a></td>
                      <form action="evento/eliminar/{{$evento['EV_ID']}}" method="POST" >
                    {{ method_field('DELETE')}}
                    {{ csrf_field() }}
                    <td><button type="submit" class='btn btn-danger btn-sm'>Eliminar:{{$evento['CA_ID']}}</button></td>
                  </form>
                  </tr>
          @endforeach
        </tbody>
      </table>
      @if (count($eventos))
      <div class="mt-2 mx-auto">
          {{ $eventos->links('pagination::bootstrap-4') }}    
      </div>
      @endif
    </div>
    @endsection

  @section('script')
  @endsection
</html>