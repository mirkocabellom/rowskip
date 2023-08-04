<!DOCTYPE html>
<html lang="es-cl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="Haskell" />
        <title>SkipRow - Confirmar</title>

        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
     
        <link href="css/monitor.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />

    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{ route('totem') }}">SkipRow</a>
            </div>
        </nav>        

        
        <div class="container-fluid" style="margin-top: 8%">
            <div class="row">
                <form id="form_confirmar" action="{{ route('confirmar') }}" method="POST">
                @csrf  
                @if(!empty($consultas))
                    <div class="col-3">
                        <div class="card text-center">
                            <div class="card-header">
                                {{ $consultas['identificador_cita'] }}
                            </div>
                            <div class="card-body">
                                <input name="id_cita" type="hidden" value="{{ $consultas['identificador_cita'] }}"/>
                                Nombre del profesional: 
                                <h5 class="card-title">{{ $consultas['nombre_profesional'] }}</h5>
                                Especialidad:
                                <h5 class="card-title">{{ $consultas['especialidad'] }}</h5>
                                <button class="btn btn-primary" name="btn_confirmar" id="id_confirmar"><b>Confirmar</b></button>
                            </div>
                            <div class="card-footer text-muted">
                                Fecha de atención: {{ $consultas['fecha_atencion'] }}
                            </div>
                        </div>
                    </div>
                @endif
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        
    </body>
</html>
