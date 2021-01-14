<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        DB::insert('insert into funcao_cargos
//    (descricao) values (?)', array('MÉDICO INTENSIVISTA'));
//
        DB::insert('insert into profiles
    (nome,nascimento,estado_civil,nacionalidade,naturalidade,rg,orgao_emissor,cpf,pis_pasep,titulo_eleitor,cert_reservista,
     reg_conselho,terapia_intensiva,escolaridade,sexo,nome_mae,nome_pai,email,telefone,endereco,cep,cidade,uf,id_funcao_cargo,
     caminho_rg,caminho_cpf,caminho_cnh,caminho_curriculo,caminho_diploma,caminho_crm,caminho_especializacao) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?
     ,?,?,?,?,?,?)', array('RICARDO','12/05/1979','SOLTEIRO','BRASILEIRO','MANAUS','757926','ASE','544.885.336-05','65874','02545',
            '22222','12434','N','SUPERIOR COMPLETO','M','MARIA','JOAO','RICARDO@SES.AM.GOV.BR','929879584','ASDAWD ASD',
            '69076090','MANAUS','AM','1','pasta01','pasta02','pasta03','pasta04','pasta05','pasta06','pasta07'));
         $this->call(UsersTableSeeder::class);
    }
}
