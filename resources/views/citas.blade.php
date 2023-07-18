@extends('layouts.app')
@section('title', 'citas')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Listado de Citas</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="grid_citas"  class="table table-striped" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>dac_correlativo</th>
                            <th>prof_rut</th>
                            <th>prof_full_name</th>
                            <th>dac_fecha_hora</th>
                            <th>pac_rut</th>
                            <th>pac_nombre</th>
                            <th>pac_ape</th>
                            <th>pac_fono_movil</th>
                            <th>pac_fecha_nac</th>
                            <th>estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($consultas as $consulta)
                            <tr>
                                <td>{{ $consulta['dac_correlativo'] }}</td>
                                <td>{{ $consulta['prof_rut'] }}</td>
                                <td>{{ $consulta['prof_full_name'] }}</td>
                                <td>{{ $consulta['dac_fecha_hora'] }}</td>
                                <td>{{ $consulta['pac_rut'] }}</td>
                                <td>{{ $consulta['pac_nombre'] }}</td>
                                <td>{{ $consulta['pac_ape'] }}</td>
                                <td>{{ $consulta['pac_fono_movil'] }}</td>
                                <td>{{ $consulta['pac_fecha_nac'] }}</td>
                                <td>{{ $consulta['estado'] }}</td>
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
    <script src="{{ asset('js/panel_admin/citas.js') }}"></script>
@endsection