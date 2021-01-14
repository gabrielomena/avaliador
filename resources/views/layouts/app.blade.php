<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

@include('layouts.default.adicionacss')
@include('layouts.default.adicionajs')

<!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    @guest

    @else
        <div id="sidedrawer" class="mui--no-user-select">
            <ul>
                <div class="drawertitle">Processo Seletivo</div>
                <div class="dash"></div>
                <li>
                    @if (Auth::user()->permission)

                        <strong style="color: #000; font-size:12;">Cadastros</strong>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>

                        </ul>

                    @endif
                </li>
            </ul>
            @endguest
        </div>
        <header id="header" class="mui-appbar mui--z1">
            <div class="mui-appbar mui--appbar-line-height">
                <div class="mui-container-fluid">
                    <table>
                        <tr class="mui--appbar-height">
                            @guest

                            @else
                                <td class="drawer">
                                    <img class="sidedrawer-toggle js-show-sidedrawer logo" src="/icon/menu.svg"
                                         height="25" width="25" style="margin-right: 15px;"/>
                                </td>
                            @endguest
                            <td>
                                <a class="logo" href="{{url('/home') }}">
                                    <img class="img-responsive " src="{{asset('img/BrasaoGoverno.png')}}">
                                    <spam
                                        style="color: #fff; font: 20px roboto, sans-serif; margin-left: 15px; vertical-align: middle;">
                                        @yield('title')
                                    </spam>
                            </td>

                            <td class="mui--text-right">
                                <ul class="mui-list--inline mui--text-body2">
                                    <!-- Authentication Links -->
                                @guest
                                    <!--<li><a href="{ { url('/') }}" style="color:#10629e; margin-right: 30px;" class="glyphicon glyphicon-home"></a></li>-->
                                        <!--<li><a href="{ { route('login') }}" style="color:#10629e">Entrar</a></li>-->
                                    @else
                                        <li class="mui-dropdown">
                                            <a href="#" class="dropdown-toggle" data-mui-toggle="dropdown" role="button"
                                               aria-expanded="false" aria-haspopup="true" style="color:#10629e">
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <ul class="mui-dropdown__menu mui-dropdown__menu--right">
                                                <li>

                                                    <a href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();"
                                                       style="color:#10629e">
                                                        Sair
                                                    </a>


                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                          style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    @endguest
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div style="margin-left: 25px;">
                <h2 class="titulo-secretaria">SUSAM</h2>
                <p class="sub-titulo-secretaria">Secretaria de Estado de Saúde</p>
            </div>

        </header>


        <br/><br/><br/><br/>
        @yield('content')

        <div class="rodape" style="margin-top: -20px;">
            @include('layouts.default.footer')
        </div>
</div>


</body>
</html>
