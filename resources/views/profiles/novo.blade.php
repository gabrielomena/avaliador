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


<form action="{{route('adiciona')}}">
    <label>CPF</label>
    <input name="cpf" value="{{old('cpf',$cpf)}}" class="form-control" readonly/>
    <label>CARGO</label>
    <input name="id_funcao_cargo" value="GENERALISTA" class="form-control" readonly/>
    <label>Nome</label>
    <input name="nome" class="form-control text-uppercase"/>
    <label>Data de Nascimento</label>
    <input name="nascimento" class="form-control"/>
    <label>Estado Civil</label>
    <input name="estado_civil" class="form-control text-uppercase"/>
    <label>Nacionalidade</label>
    <input name="nacionalidade" class="form-control text-uppercase"/>
    <label>Naturalidade (UF)</label>
    <input name="naturalidade" class="form-control text-uppercase"/>
    <label>RG</label>
    <input name="rg" class="form-control"/>
    <label>Órgão Emissor</label>
    <input name="orgao_emissor" class="form-control text-uppercase"/>
    <label>PIS/PASEP</label>
    <input name="pis_pasep" class="form-control"/>
    <label>Título de Eleitor</label>
    <input name="titulo_eleitor" class="form-control"/>
    <label>Cert. Reservista (Para sexo masculino)</label>
    <input name="cert_reservista" class="form-control"/>
    <label>Reg. Conselho</label>
    <input name="reg_conselho" class="form-control"/>
    <label>Possui experiência em Unidade de Terapia Intensiva?</label>
    <input name="terapia_intensiva" class="form-control text-uppercase"/>
    <label>Escolaridade</label>
    <input name="escolaridade" class="form-control text-uppercase"/>
    <label>Sexo</label>
    <input name="sexo" class="form-control text-uppercase"/>
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




@endsection


