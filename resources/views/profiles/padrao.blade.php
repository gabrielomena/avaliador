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
                </div>
                @yield('conteudo')
            </div>
        </div>
    </div>
</body>
</html>
