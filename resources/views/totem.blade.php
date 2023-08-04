<!DOCTYPE html>
<html lang="es-cl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="Haskell" />
        <title>SkipRow - Totem</title>
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
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <h1 class="navbar-brand">SkipRow</h1>
            </div>
        </nav>
        
        <form id="totem" action="{{ route('totem') }}" method="GET">
            @csrf  
            <section class="page-section" style="margin-top: 5%;">
                <div id="ohsnap" style="display: block;z-index: 99999999;"></div>
                <div class="container">
                    <div class="container d-flex align-items-center flex-column">
                        <div class="form-floating mb-5">
                            <input class="form-control" name="id_pac_rut" type="text" placeholder="Ingrese su RUT" required />
                            <label for="label_pac_rut">Ingrese su rut</label>
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
                        <button class="btn btn-primary btn-xl" name="btn_aceptar" id="id_btn_aceptar"><b>Aceptar</b></button>
                    </div>
                </div>
            </section>
        </form>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/ohsnap.min.js"></script>
        <script src="js/panel_admin/check-in.js"></script>
    </body>
</html>