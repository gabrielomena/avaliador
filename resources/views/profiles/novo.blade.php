@extends('profiles.padrao')
@section('conteudo')

    <div class="col-12">
        <h1 class="text-center">Cadastro</h1>
    </div>
        <div class="col-sm-12 col-md-12 col-lg-12 alert-info pt-2 mt-2 rounded">
            <b>Bem vindo(a), por favor atente para as seguintes recomendações:</b>
            <ul>
                <li>Os campos preenchidos de forma equivocada serão mostrados com um alerta.</li>
                <li>Os campos com <b>'*'</b> são de preenchimento OBRIGATÓRIO.</li>
                <li>O <b>Nome</b> deve ser completo conforme documento.</li>
                <li>Os <b>Arquivos</b> podem ser do tipo <b>PDF, IMAGEM (JPEG) ou DOCX (WORD)</b>.</li>
                <li>O <b>Tamanho Máximo</b> de cada arquivo NÃO pode ultrapassar 5MB.</li>
            </ul>
        </div>
    <div class="col-12">
<form action="{{route('adiciona')}}" enctype="multipart/form-data" method="POST">
    @csrf
    <label>CPF</label>
        <input name="cpf" value="{{$cpf}}" class="form-control" readonly/>
    <label>CARGO</label>
        <input name="id_funcao_cargo" value="{{$cargo->id}}" hidden/>
        <input value="{{$cargo->descricao}}" class="form-control" readonly/>
    <label>Nome Completo <span>*</span> </label>
        <input name="nome" id="nome" pattern="[a-zA-Zà-ú ]{1,}" tabindex="1" class="form-control text-uppercase"/>
    <label>Data de Nascimento <span>*</span> </label>
        <input type="date" name="nascimento" id="nascimento" class="form-control" tabindex="2"/>
    <label>Estado Civil <span>*</span> </label>
        <select class="form-control" name="estado_civil" tabindex="3" required>
            <option value="" selected>-- Selecione --</option>
            <option value="1">SOLTEIRO</option>
            <option value="2">CASADO</option>
            <option value="3">UNIÃO ESTÁVEL</option>
            <option value="4">DIVORCIADO</option>
            <option value="5">VIÚVO</option>
        </select>
    <label>Nacionalidade <span>*</span> </label>
        <input name="nacionalidade" id="nacionalidade" class="form-control text-uppercase"/>
    <label>Naturalidade (UF) <span>*</span> </label>
        <input name="naturalidade" id="uf" class="form-control text-uppercase"/>
    <div id="app">
        <selecao-sexo></selecao-sexo>
    </div>


        <label>RG <span>*</span> </label>
        <input name="rg" id="rg" class="form-control"/>
    <label>Órgão Emissor<span>*</span></label>
        <input name="orgao_emissor" class="form-control text-uppercase"/>

    <label>PIS/PASEP<span>*</span></label>
        <input name="pis_pasep" class="form-control"/>
    <label>Título de Eleitor <span>*</span></label>
        <input name="titulo_eleitor" class="form-control"/>

    <label>Reg. Conselho<span>*</span></label>
        <input name="reg_conselho" class="form-control"/>
    @if($cargo->id==1)
        <label>Possui experiência em Unidade de Terapia Intensiva?<span>*</span></label>
        <select class="form-control" name="terapia_intensiva" tabindex="3" required>
            <option value="" selected>-- Selecione --</option>
            <option value="SIM">SIM</option>
            <option value="NÃO">NÃO</option>
        </select>
    @endif

    <label>Escolaridade</label>
    <input name="escolaridade" class="form-control text-uppercase"/>

    <label>Nome da Mãe</label>
        <input name="nome_mae" class="form-control text-uppercase"/>
    <label>Nome do Pai</label>
    <input name="nome_pai" class="form-control text-uppercase"/>
    <label>E-mail</label>
    <input name="email" class="form-control text-uppercase"/>
    <label>Telefone</label>
    <input name="telefone" class="form-control"/>
    <label>Endereço Completo</label>
    <input name="endereco" class="form-control text-uppercase"/>
    <label>CEP</label>
    <input name="cep" class="form-control"/>
    <label>Cidade</label>
    <input name="cidade" class="form-control text-uppercase"/>
    <label>UF</label>
    <input name="uf" class="form-control text-uppercase"/>
    <label>Anexo RG</label>
    <input name="caminho_rg" class="form-control"/>
    <label>Anexo CPF</label>
    <input name="caminho_cpf" class="form-control"/>
    <label>Anexo CNH</label>
    <input name="caminho_cnh" class="form-control"/>
    <label>Anexo Curriculo</label>
    <input name="caminho_curriculo" class="form-control"/>
    <label>Anexo Diploma</label>
    <input name="caminho_diploma" class="form-control"/>
    <label>Anexo CRM</label>
    <input name="caminho_crm" class="form-control"/>
    <label>Anexo Especializacao</label>
    <input name="caminho_especializacao" class="form-control"/>

    <button type="submit">Cadastrar</button>
</form>
    </div>

    <script>
        $(document).ready(function () {
            $("#nacionalidade").mask("SSSSSSSSSSSSSSSSSSSS");
            $("#uf").mask("SS");
            $("#rg").mask("9999999999");
        });
    </script>




@endsection


