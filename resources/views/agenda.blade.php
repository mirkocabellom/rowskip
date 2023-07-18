@extends('layouts.app')
@section('title', 'agenda')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Listado de Agendas</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="grid_agendas"  class="table table-striped" width="100%" cellspacing="0">
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
</div> 
@endsection('content')	
@section('scripts')
    <script src="{{ asset('js/panel_admin/agenda.js') }}"></script>
@endsection