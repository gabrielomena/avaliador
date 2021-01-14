<html>
<head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
<h1>Candidato {{$p->nome}}</h1>
<form>
    <label>CPF</label>
    <input value="{{$p->cpf}}" readonly/>
    <label>Nome</label>
    <input value="{{$p->nome}}" readonly/>
    <label>Data de Nascimento</label>
    <input value="{{$p->nascimento}}" readonly/>
    <label>Estado Civil</label>
    <input value="{{$p->estado_civil}}" readonly/>
    <label>Nacionalidade</label>
    <input value="{{$p->nacionalidade}}" readonly/>
    <label>Naturalidade (UF)</label>
    <input value="{{$p->naturalidade}}" readonly/>
    <label>RG</label>
    <input value="{{$p->rg}}" readonly/>
    <label>Órgão Emissor</label>
    <input value="{{$p->orgao_emissor}}" readonly/>
    <label>PIS/PASEP</label>
    <input value="{{$p->pis_pasep}}" readonly/>
    <label>Título de Eleitor</label>
    <input value="{{$p->titulo_eleitor}}" readonly/>
    <label>Cert. Reservista (Para sexo masculino)</label>
    <input value="{{$p->cert_reservista}}" readonly/>
    <label>Reg. Conselho</label>
    <input value="{{$p->reg_conselho}}" readonly/>
    <label>Possui experiência em Unidade de Terapia Intensiva?</label>
    <input value="{{$p->terapia_intensiva}}" readonly/>
    <label>Escolaridade</label>
    <input value="{{$p->escolaridade}}" readonly/>
    <label>Sexo</label>
    <input value="{{$p->sexo}}" readonly/>
    <label>Nome da Mãe</label>
    <input value="{{$p->nome_mae}}" readonly/>
    <label>Nome do Pai</label>
    <input value="{{$p->nome_pai}}" readonly/>
    <label>E-mail</label>
    <input value="{{$p->email}}" readonly/>
    <label>Telefone</label>
    <input value="{{$p->telefone}}" readonly/>
    <label>Endereço Completo</label>
    <input value="{{$p->endereco}}" readonly/>
    <label>CEP</label>
    <input value="{{$p->cep}}" readonly/>
    <label>Cidade</label>
    <input value="{{$p->cidade}}" readonly/>
    <label>UF</label>
    <input value="{{$p->uf}}" readonly/>

    <button type="submit">Doc. Ok</button>
</form>

</body>
</html>






