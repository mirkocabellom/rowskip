<!DOCTYPE html>
<html lang="es-cl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="Haskell" />
        <title>SkipRow - @yield('title')</title>
        <link href="/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="/css/monitor.css" rel="stylesheet">
        <link href="/DataTables/datatables.min.css" rel="stylesheet"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body id="page-top">
        <div id="wrapper">
            @include('layouts.navegation')
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    @include('layouts.nav')
                    @yield('content')
                </div>
            </div>
        </div>
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="/js/ohsnap.min.js"></script>
        
        <script src="/DataTables/datatables.min.js"></script>
        <script src="/js/sb_admin.js"></script>
        @yield('scripts')
    </body>
</html>
