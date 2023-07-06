@extends('layouts.app')
@section('title', 'usuario')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Listado de Usuarios</h6>
        </div>
        <div class="card-body">
            <table id="grid_pacientes" class="table table-striped">
                <thead>
                    <tr>
                        <th>Rut</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Nombre de usuario</th>
                        <th>Rol</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>18.378.651-2</td>
                        <td>Mirko</td>
                        <td>Cabello Molina</td>
                        <td>haskell</td>
                        <td>Admin</td>
                        <td><i class="fas fa-edit"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> 
@endsection('content')	