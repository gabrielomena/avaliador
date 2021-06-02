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
<div class="row">
    <div class="col-12">
        <form action="{{route('adiciona')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row">
                <div class="col-12">
                    <label>CPF</label>
                    <input name="cpf" value="{{$cpf}}" class="form-control mb-3" tabindex="1" readonly/>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label>CARGO</label>
                    <input name="id_funcao_cargo" value="{{$cargo->id}}" hidden/>
                    <input value="{{$cargo->descricao}}" class="form-control mb-3" tabindex="2" readonly/>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label>Nome Completo <span>*</span> </label>
                    <input name="nome" id="nome" pattern="[a-zA-Zà-ú ]{1,}" tabindex="3" class="form-control mb-3 text-uppercase"/>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <label>Data de Nascimento <span>*</span> </label>
                    <input type="date" name="nascimento" id="nascimento" class="form-control mb-3" tabindex="4"/>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label>Estado Civil <span>*</span> </label>
                    <select class="form-control mb-3" name="estado_civil" tabindex="5" required>
                        <option value="" selected>-- Selecione --</option>
                        <option value="1">SOLTEIRO</option>
                        <option value="2">CASADO</option>
                        <option value="3">UNIÃO ESTÁVEL</option>
                        <option value="4">DIVORCIADO</option>
                        <option value="5">VIÚVO</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <label>Nacionalidade <span>*</span> </label>
                    <input name="nacionalidade" id="nacionalidade" tabindex="6" class="form-control mb-3 text-uppercase"/>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label>Naturalidade (UF) <span>*</span> </label>
                    <input name="naturalidade" id="uf" tabindex="7" class="form-control mb-3 text-uppercase"/>
                </div>
            </div>
            <div class="row" id="app">
                <div class="col-sm-12 col-md-12">
                    <selecao-sexo></selecao-sexo>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <label>RG <span>*</span> </label>
                    <input name="rg" id="rg" class="form-control mb-3"/>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label>Órgão Emissor <span>*</span></label>
                    <input name="orgao_emissor" class="form-control mb-3 text-uppercase"/>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <label>PIS/PASEP <span>*</span></label>
                    <input name="pis_pasep" class="form-control mb-3"/>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label>Título de Eleitor <span>*</span></label>
                    <input name="titulo_eleitor" class="form-control mb-3"/>
                </div>
            </div>
            <div class="row">
                @if($cargo->id==1)
                    <div class="col-sm-12 col-md-6">
                        <label>Reg. Conselho <span>*</span></label>
                        <input name="reg_conselho" class="form-control mb-3"/>
                    </div>
                    <div class="col-sm-12 col-md-6">
                            <label>Possui experiência em Unidade de Terapia Intensiva? <span>*</span></label>
                            <select class="form-control mb-3" name="terapia_intensiva" required>
                                <option value="" selected>-- Selecione --</option>
                                <option value="SIM">SIM</option>
                                <option value="NÃO">NÃO</option>
                            </select>
                    </div>
                @endif
                @if($cargo->id==2)
                    <div class="col-sm-12 col-md-12">
                        <label>Reg. Conselho <span>*</span></label>
                        <input name="reg_conselho" class="form-control mb-3"/>
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <label>Nome da Mãe <span>*</span></label>
                    <input name="nome_mae" class="form-control mb-3 text-uppercase"/>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label>Nome do Pai <span>*</span></label>
                    <input name="nome_pai" class="form-control mb-3 text-uppercase"/>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label>Escolaridade <span>*</span></label>
                    <select class="form-control mb-3" name="escolaridade" id="escolaridade" required>
                        <option value="" selected>-- Selecione --</option>
                        <option value="MÉDIO - COMPLETO">MÉDIO - COMPELTO</option>
                        <option value="MÉDIO - INCOMPLETO">SUPERIOR - INCOMPLETO</option>
                        <option value="SUPERIOR - COMPLETO">SUPERIOR - COMPLETO</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <label>E-mail <span>*</span></label>
                    <input type="email" name="email" class="form-control mb-3 text-uppercase"/>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label>Telefone <span>*</span></label>
                    <input name="telefone" id="telefone" class="form-control mb-3"/>
                </div>
            </div>

            <div class="row" id="app2">
                <div class="col-sm-12 col-md-12">
                    <endereco></endereco>
                </div>
            </div>
            <h4 class="mt-5"><b>ANEXAR DOCUMENTAÇÃO</b></h4>

            <div class="row">
                <div class="col-sm-12 col-md-6 mb-3">
                    <label>Doc. de Identidade com foto. <span>*</span></label>
                    <div class="custom-file">
                        <input type="file" name="caminho_rg" class="custom-file-input" accept=".pdf,.doc" id="caminho_rg" aria-describedby="inputGroupFileAddon04">
                        <label class="custom-file-label" for="inputGroupFile04">Selecione o Arquivo</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 mb-3">
                    <label>CPF <span>*</span></label>
                    <div class="custom-file">
                        <input type="file" name="caminho_cpf" class="custom-file-input" accept=".pdf,.doc" id="caminho_cpf" aria-describedby="inputGroupFileAddon04">
                        <label class="custom-file-label" for="inputGroupFile04">Selecione o Arquivo</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 mb-3">
                    <label>Habilitação – CNH ou Carteira de Trabalho. <span>*</span></label>
                    <div class="custom-file">
                      <input type="file" name="caminho_cnh" class="custom-file-input" accept=".pdf,.doc" id="caminho_cnh" aria-describedby="inputGroupFileAddon04">
                      <label class="custom-file-label" for="inputGroupFile04">Selecione o Arquivo</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 mb-3">
                    <label>Currículo Vitae. <span>*</span></label>
                    <div class="custom-file">
                        <input type="file" name="caminho_curriculo" class="custom-file-input" accept=".pdf,.doc" id="caminho_curriculo" aria-describedby="inputGroupFileAddon04">
                        <label class="custom-file-label" for="inputGroupFile04">Selecione o Arquivo</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 mb-3">
                    <label>Diploma de Medicina. <span>*</span></label>
                    <div class="custom-file">
                      <input type="file" name="caminho_diploma" class="custom-file-input" accept=".pdf,.doc" id="caminho_diploma" aria-describedby="inputGroupFileAddon04">
                      <label class="custom-file-label" for="inputGroupFile04">Selecione o Arquivo</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 mb-3">
                    <label>Inscrição profissional no Conselho de Classe (Conselho Regional de Medicina). <span>*</span></label>
                    <div class="custom-file">
                        <input type="file" name="caminho_crm" class="custom-file-input" accept=".pdf,.doc" id="caminho_crm" aria-describedby="inputGroupFileAddon04">
                        <label class="custom-file-label" for="inputGroupFile04">Selecione o Arquivo</label>
                    </div>
                </div>
            </div>
            @if($cargo->id==2)
            <div class="row">
                <div class="col-sm-12 col-md-12 mb-3">
                    <label>Diploma de Residência Médica ou Especialização em Medicina Intensivista. <span>*</span></label>
                    <div class="custom-file">
                      <input type="file" name="caminho_especializacao" class="custom-file-input" accept=".pdf,.doc" id="caminho_especializacao" aria-describedby="inputGroupFileAddon04">
                      <label class="custom-file-label" for="inputGroupFile04">Selecione o Arquivo</label>
                    </div>
                </div>
            </div>
            @endif
            <button type="submit" class="btn btn-success col-md-12">Cadastrar</button>
        </form>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#nacionalidade").mask("SSSSSSSSSSSSSSSSSSSS");
        $("#uf").mask("SS");
        $("#rg").mask("9999999999");
        $("#telefone").mask("(99)99999-9999");
        $(".cep").mask("99999999");
    });

    $('#caminho_rg').change(function(event){
        var fileName = event.target.files[0].name;
        if (event.target.nextElementSibling!=null){
            event.target.nextElementSibling.innerText=fileName;
        }
    });
    $('#caminho_cpf').change(function(event){
        var fileName = event.target.files[0].name;
        if (event.target.nextElementSibling!=null){
            event.target.nextElementSibling.innerText=fileName;
        }
    });
    $('#caminho_cnh').change(function(event){
        var fileName = event.target.files[0].name;
        if (event.target.nextElementSibling!=null){
            event.target.nextElementSibling.innerText=fileName;
        }
    });
    function atualizaDoc(id) {
        $('#{id}').change(function(event){
        var fileName = event.target.files[0].name;
        if (event.target.nextElementSibling!=null){
            event.target.nextElementSibling.innerText=fileName;
        }
    });
    }
    $('#caminho_curriculo').change(function(event){
        var fileName = event.target.files[0].name;
        if (event.target.nextElementSibling!=null){
            event.target.nextElementSibling.innerText=fileName;
        }
    });
    $('#caminho_diploma').change(function(event){
        var fileName = event.target.files[0].name;
        if (event.target.nextElementSibling!=null){
            event.target.nextElementSibling.innerText=fileName;
        }
    });
    $('#caminho_crm').change(function(event){
        var fileName = event.target.files[0].name;
        if (event.target.nextElementSibling!=null){
            event.target.nextElementSibling.innerText=fileName;
        }
    });
    $('#caminho_especializacao').change(function(event){
        var fileName = event.target.files[0].name;
        if (event.target.nextElementSibling!=null){
            event.target.nextElementSibling.innerText=fileName;
        }
    });


</script>
@endsection


