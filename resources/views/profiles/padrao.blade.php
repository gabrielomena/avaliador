<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/vue.js')}}" defer></script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<style>
span{
    color: red;
    font-weight: bold;
}
</style>

<body>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img class=" img-fluid" src="{{asset('img/banner_principal.jpg')}}">
                    @auth
                        <nav class="navbar navbar-expand-sm navbar-light bg-light">
                            <span class="navbar-brand">Chamamento público - Avaliação de candidatos</span>
                            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="collapsibleNavId">
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <!-- <li class="nav-item active">
                                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                    </li> -->
                                </ul>
                                <form method="post" action="{{route('logout')}}" class="form-inline my-2 my-lg-0">,
                                    @csrf
                                    <button class="btn btn-danger my-2 my-sm-0" type="submit">Sair</button>
                                </form>
                            </div>
                        </nav>
                    @endauth
                </div>
                <div class="col-12">
                    @yield('conteudo')
                </div>
            </div>
        </div>
    </div>
</body>
</html>
