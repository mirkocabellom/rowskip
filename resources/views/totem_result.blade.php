<!DOCTYPE html>
<html lang="es-cl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="Haskell" />
        <title>SkipRow - Check-In</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/ohsnap.css" rel="stylesheet">
        <style type="text/css">
            .bordersolid{
                border: 3px solid rgba(8, 103, 140, 0.9);
            }
            .none{ 
                display: none;
            }
            .visible{
                visibility: visible;
            }
        </style>
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{ route('totem') }}">SkipRow</a>
            </div>
        </nav>        
        
        <div class="container-fluid" style="margin-top: 8%">
                    @if(!empty($consultas))
                        <p>Identificador de cita: {{ $consultas['identificador_cita'] }}</p>
                        <p>RUT del profesional: {{ $consultas['rut_profesional'] }}</p>
                        <p>ID del profesional: {{ $consultas['id_profesional'] }}</p>
                        <p>Nombre del profesional: {{ $consultas['nombre_profesional'] }}</p>
                        <p>Especialidad: {{ $consultas['especialidad'] }}</p>
                        <p>Dental: {{ $consultas['dental'] }}</p>
                        <p>Fecha de atención: {{ $consultas['fecha_atencion'] }}</p>
                        <p>Estado de la cita: {{ $consultas['estado_cita'] }}</p>
                        <p>Bloqueo: {{ $consultas['bloqueo'] }}</p>
                        <p>Información del paciente:</p>
                        <ul>
                            @foreach($consultas['infopaciente'] as $paciente)
                                <li>Nombres: {{ $paciente['nombres'] }}</li>
                                <li>Apellidos: {{ $paciente['apellidos'] }}</li>
                                <li>Teléfono: {{ $paciente['telefono'] }}</li>
                                <li>Correo: {{ $paciente['correo'] }}</li>
                                <li>Fecha de nacimiento: {{ $paciente['fecha_nac'] }}</li>
                                <li>Previsión: {{ $paciente['prevision'] }}</li>
                                <li>PRAIS: {{ $paciente['prais'] }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <button class="btn btn-info btn-lg" type="button">Confirmar</button><br>
        </div>
        <div class="container">
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/ohsnap.min.js"></script>
        <script src="js/panel_admin/check-in.js"></script>
    </body>
</html>
