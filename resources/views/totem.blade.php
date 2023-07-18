<!DOCTYPE html>
<html lang="es-cl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="Haskell" />
        <title>SkipRow - Check-In</title>
        <!-- Favicon-->
        <link rel="icon" href="assets/favicon.ico">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
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
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <h1 class="navbar-brand">SkipRow</h1>
            </div>
        </nav>
        
        <section class="page-section" style="margin-top: 5%;">
            <div id="ohsnap" style="display: block;z-index: 99999999;"></div>
            <div class="container">
                <div class="container d-flex align-items-center flex-column">
                    <div class="form-floating mb-5">
                        <input class="form-control" id="id_pac_rut" type="text" placeholder="Ingrese su RUT" required />
                        <label for="id_pac_rut">Ingrese su rut</label>
                    </div>
                </div>

                <div class="container d-flex align-items-center flex-column">
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-primary btn-xl " name="btn_number" id="id_btn_number1"><b>1</b></button>
                        </div>
                        <div class="col">
                            <button class="btn btn-primary btn-xl " name="btn_number" id="id_btn_number2"><b>2</b></button>
                        </div>
                        <div class="col">
                            <button class="btn btn-primary btn-xl " name="btn_number" id="id_btn_number3"><b>3</b></button>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 1%;">
                        <div class="col">
                            <button class="btn btn-primary btn-xl " name="btn_number" id="id_btn_number4"><b>4</b></button>
                        </div>
                        <div class="col">
                            <button class="btn btn-primary btn-xl " name="btn_number" id="id_btn_number5"><b>5</b></button>
                        </div>
                        <div class="col">
                            <button class="btn btn-primary btn-xl " name="btn_number" id="id_btn_number6"><b>6</b></button>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 1%;">
                        <div class="col">
                            <button class="btn btn-primary btn-xl " name="btn_number" id="id_btn_number7"><b>7</b></button>
                        </div>
                        <div class="col">
                            <button class="btn btn-primary btn-xl " name="btn_number" id="id_btn_number8"><b>8</b></button>
                        </div>
                        <div class="col">
                            <button class="btn btn-primary btn-xl " name="btn_number" id="id_btn_number9"><b>9</b></button>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 1%;">
                        <div class="col">
                            <button class="btn btn-primary btn-xl " name="btn_number" id="id_btn_number0"><b>0</b></button>
                        </div>
                        <div class="col">
                            <button class="btn btn-primary btn-xl " name="btn_number" id="id_btn_numberK"><b>K</b></button>
                        </div>
                        <div class="col">
                            <button class="btn btn-primary btn-xl " name="btn_number" id="id_btn_numberX"><b>X</b></button>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="container d-flex align-items-center flex-column">
                    <button class="btn btn-primary btn-xl " name="btn_aceptar" id="id_btn_aceptar" data-bs-toggle="modal" data-bs-target="#exampleModal"><b>Aceptar</b></button>
                </div>
            </div>
        </section>
      
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <p>Usted tiene una hora agendada con el <b>Dr. Junito Perez</b>
                        a las <b>11:00 hrs</b></p>
                        <p>Debe dirigirse a:</p>
                        <b>Recaudación</b> <!-- depende de las condiciones de habilitacion fonasa o isapre bla bla bla -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Ok</button> <!-- imprime voucher, cierra dialog-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/ohsnap.min.js"></script>
        <script src="js/panel_admin/check-in.js"></script>
    </body>
</html>
