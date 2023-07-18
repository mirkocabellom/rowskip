@extends('layouts.app')
@section('title','panel')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Perfil</h6>
        </div>
        <div class="card-body">
            <form class="row g-3">
                <div class="col-md-4">
                    <label for="inputEmail4" class="form-label">Nombre:</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Apellido Paterno:</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Apellido Materno:</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Tipo Usuario:</label>
                    <input type="text" class="form-control" id="inputAddress" >
                </div>
                <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Profesión:</label>
                    <input type="text" class="form-control" id="inputAddress2">
                </div>
                <div class="col-12" style="margin-top:10px">
                    <button type="submit" class="btn btn-primary">Modificar</button>
                </div>
            </form>
        </div>
    </div>
</div> 
@endsection('content')	