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
        <link href="/css/styles2.css" rel="stylesheet" />
    </head>
    <body class="img js-fullheight" style="background-image: url(/bg.jpg);">
    <section class="ftco-section">
        <form class="signin-form" id="panel_admin_login" action="{{ route('panel_admin_login') }}" method="POST">
            @csrf            
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <h2 class="heading-section">SkipRow</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="login-wrap p-0">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Usuario" required name="usu_rut" id="usu_rut">
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" placeholder="Contraseña" required name="usu_pass"  id="usu_pass">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3" id="id_btn_inicio">Iniciar Sesión</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <script src="/js/popper.js"></script>
        <script src="/js/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    </body>
</html>
