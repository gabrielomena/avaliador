<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $fillable = array(
        'cpf',
        'nome',
        'nascimento',
        'estado_civil',
        'nacionalidade',
        'naturalidade',
        'rg',
        'orgao_emissor',
        'pis_pasep',
        'titulo_eleitor',
        'cert_reservista',
        'reg_conselho',
        'terapia_intensiva',
        'escolaridade',
        'sexo',
        'nome_mae',
        'nome_pai',
        'email',
        'telefone',
        'endereco',
        'cep',
        'cidade',
        'uf',
        'id_funcao_cargo',
        'caminho_rg',
        'caminho_cpf',
        'caminho_cnh',
        'caminho_curriculo',
        'caminho_diploma',
        'caminho_crm',
        'caminho_especializacao'
    );
}
