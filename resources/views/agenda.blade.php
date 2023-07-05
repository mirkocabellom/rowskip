@extends('layouts.app')
@section('title', 'agenda')
@section('content')
<div class="container-fluid" style="margin-top: 20px;">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Listado de Agendas</h6>
        </div>
        <div class="card-body">
            <table id="grid_pacientes" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre Agenda</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($consultas as $key => $valor)
                    <tr>
                        <td>{{ $key }}</td>
                        <td>{{ $valor }}</td>
                    </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
</div> 
@endsection('content')	