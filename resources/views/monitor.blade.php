@extends('layouts.app')
@section('title', 'monitor')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Listado de Pacientes</h6>
        </div>
        <div class="card-body">
            {{-- @foreach($consultas as $cons) --}}
            {{-- <h1>{{ $consultas->nombre }}</h1> --}}
            {{-- @endforeach --}}
            <table id="grid_pacientes" class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edad</th>
                        <th>Hora cita</th>
                        <th>Medico</th>
                        <th>Recaudación</th>
                        <th>Llegó</th>
                        <th>Signos Vitales</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>dddd</td>
                        <td>dddd</td>
                        <td>dddd</td>
                        <td>dddd</td>
                        <td>dddd</td>
                        <td>dddd</td>
                        <td>dddd</td>
                        <td>dddd</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> 
@endsection('content')	