@extends('profiles.padrao')
@section('conteudo')

    <div class="bgimg img-fluid">
        <img src="{{asset('img/banner_principal.jpg')}}">
    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 alert-info pt-2 mt-2 rounded">
        <ul>
            <li>Selecione o processo e informe o seu CPF.</li>
            <li><b><a href="" target="_blank">Clique aqui</a></b> para ler os pré-requisitos.</li>
        </ul>
    </div>
    <div class="col-6">
        <form action="{{ action('ProfileController@novo') }}" method="post">
            {{ csrf_field() }}
            <label for="cargo_processo">Processo Selectivo</label>
            <select class="form-control" name="cargo_processo" id="cargo_processo" tabindex="1"
                    required>
                <option value="" selected>-- Selecione --</option>
                @foreach($funcao as $f)
                    <option value="{{$f->id}}">{{$f->descricao}}</option>
                @endforeach
            </select>

            <input type="text" class="form-control col-md-12" id="cpf" name="cpf" placeholder="CPF" required />

            <button type="submit" class="btn btn-success col-md-12"> Cadastrar</button>
        </form>

        <script>
            $(document).ready(function () {

                $("#cpf").mask("999.999.999-99");
            });
        </script>
@endsection

