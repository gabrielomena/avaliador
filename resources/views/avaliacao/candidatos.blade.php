@extends('profiles.padrao')
@section('conteudo')
<div class="col-12">
    <h1 class="text-center">
        Listagem de candidatos
    </h1>

    <table class="table table-striped" id="candidatos">
        <thead>
        <tr>
            <th>CPF</th>
            <th>Nome</th>
            <th>Email</th>
            <th>CRM</th>
            <th>Curso Intensivista</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($profiles as $p)
            <tr>
                <td>{{$p->cpf}}</td>
                <td>{{$p->nome}}</td>
                <td>{{strtoupper($p->email)}}</td>
                <td>{{$p->reg_conselho}}</td>
                <td>{{$p->terapia_intensiva}}</td>
                <td>
                    <a href="avaliacao/avaliar/{{$p->id}}">
                        AVALIAR
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


<script>
    $(document).ready(function () {
        $('#candidatos').DataTable({
            "searching": true,
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
            },
            "columnDefs": [{
                "targets": [-1],
                "orderable": false
            }],
            "aaSorting": [[3, "asc"]]
        });
    });
</script>

@endsection

