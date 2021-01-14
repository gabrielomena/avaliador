<html>
<head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        @yield('conteudo')
    </div>
</div>
</body>
</html>
