<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Taigo Meireles - Obras Disponíveis</title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/portfolio.css') }}">

</head>
<body>
    <section class="welcome">
        <div class="opacity">
            <div class="container">
                <div class="welcome-content">
                    <div class="row">
                        <div class="d-flex flex-column col-md-4 text-center align-items-center">
                            <h1><img src="assets/img/logo.png" alt=""></h1>
                            <p>Portfólio de obras disponíveis</p>
                            <div class="d-grid gap-2 col-6 mx-auto">                              
                                <button class="btn btn-dark" type="button"><a href=" {{ route('artists.index') }} ">Entrar</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src=" {{ asset('assets/js/jquery.js') }} "></script>
    <script src=" {{ asset('assets/js/bootstrap.js') }} "></script>
</body>
</html>