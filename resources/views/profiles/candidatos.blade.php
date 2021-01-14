@extends('profiles.padrao')
@section('conteudo')

<h1>Listagem da candidatos</h1>

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
            <td>{{$p->email}}</td>
            <td>{{$p->reg_conselho}}</td>
            <td>{{$p->terapia_intensiva}}</td>
            <td><a href="candidatos/avaliar/{{$p->id}}">AVALIAR</a> </td>
        </tr>
    @endforeach
    </tbody>
</table>


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

