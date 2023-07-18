<!DOCTYPE html>
<html lang="es-cl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="Haskell" />
        <title>SkipRow - Seleccion de Ambiente</title>
        <!-- Favicon-->
        <link rel="icon" href="assets/favicon.ico">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/styles.css" rel="stylesheet" />
        <link href="/css/ohsnap.css" rel="stylesheet">
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
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <h1 class="navbar-brand">SkipRow</h1>
            </div>
        </nav>
    
        <div class="row" style="margin-top:6%;">
            <div class="col">
                <div class="page-section bg-primary text-white" id="pac_real_time" style="height: 85vh;">
                    <div class="container">
                        <h3>Llamando a</h3>
                        <h1 class="page-section-heading text-center text-uppercase text-white" id="id_name_pac">Jose Lamata Feliz</h1>
                        <div class="divider-custom divider-light"><div class="divider-custom-line"></div></div>
                        <h3>Presentarse en</h3>
                        <h2 class="page-section-heading text-center text-uppercase text-white" id="id_name_box">Box 12- CAE ADULTO</h2>
                        <div class="divider-custom divider-light"><div class="divider-custom-line"></div></div>
                        <div class="row">
                            <div class="col">
                            <h3>Identificación de paciente</h3>
                            </div>
                            <div class="col">
                            <h2 class="page-section-heading text-center text-uppercase text-white" id="id_corr_pac">IM786</h2>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="page-section" id="list_prox_pac" style="height: 85vh;">
                    <div class="container">
                        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Próximas Atenciones</h2>
                        <div class="divider-custom"><div class="divider-custom-line"></div></div>

                        <div class="row">
                            <div class="col bg-primary text-white"><b>Hora Cita</b></div>
                            <div class="col bg-primary text-white"><b>Especialidad</b></div>
                            <div class="col bg-primary text-white"><b>Número</b></div>
                            <div class="col bg-primary text-white"><b>Box</b></div>
                            <div class="col bg-primary text-white"><b>Estado</b></div>
                        </div><br> 
                        <div class="contenido_grid" id="contenido_grid">
                            <div id="div_panel">
                                <div class="row" id="row_contenido_grid">
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
      
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <script src="/js/ohsnap.min.js" type="text/javascript"></script>
        <script src="/js/panel_admin/tv.js"></script>
    </body>
</html>
