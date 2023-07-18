@extends('layouts.app')
@section('title', 'usuario')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
            <div class="col">
                <h6 class="m-0 font-weight-bold text-primary">Listado de Usarios</h6> 
            </div>
            <div class="col">
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal" style="float: right;"> 
                    <i class="fa-solid fa-plus"></i> Agregar nuevo Usuario
                </button>
            </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="grid_usuario"  class="table table-striped" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Establecimiento</th>
                            <th>Estado</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach($consultas as $consulta)
                            <tr>
                                <td>{{ $consulta['usu_rut'] }}</td>
                                <td>{{ $consulta['usu_nombre'] }}</td>
                                <td>{{ $consulta['usu_apellido'] }}</td>
                                <td>{{ $consulta['email'] }}</td>
                                <td>{{ $consulta['rol'] }}</td>
                                <td>{{ $consulta['est_cod'] }}</td>
                                <td>{{ $consulta['estado'] }}</td>
                                <td>{{ $consulta['usu_cod'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 

<!-- Modal -->
<form class="create_user" id="create_user" action="/registrar_usuario" method="POST">
 @csrf
    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header bg-gradient-primary" style="color: #fff">
            <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
            {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
        </div>
        <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="txt_usu_rut" name="txt_usu_rut" placeholder="Usuario">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="txt_usu_nombre" name="txt_usu_nombre" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="txt_usu_ape" name="txt_usu_ape" placeholder="Apellido">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="txt_email" name="txt_email" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="form-group">
                    <select class="form-select" aria-label="Default select example" id="cmb_rol" name="cmb_rol">
                    <option selected>Seleccione Rol</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-select" aria-label="Default select example" id="cmb_estab" name="cmb_estab">
                    <option selected>Seleccione Establecimiento</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    </select>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary" id="btn_grabar">Grabar</button>
        </div>
        </div>
    </div>
    </div>
</form>
@endsection('content')  
@section('scripts')
    <script src="{{ asset('js/panel_admin/usuario.js') }}"></script>
@endsection