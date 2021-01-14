<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('nascimento');
            $table->string('estado_civil');
            $table->string('nacionalidade');
            $table->string('naturalidade');
            $table->string('rg');
            $table->string('orgao_emissor');
            $table->string('cpf')->unique();
            $table->string('pis_pasep');
            $table->string('titulo_eleitor');
            $table->string('cert_reservista')->nullable();
            $table->string('reg_conselho');
            $table->string('terapia_intensiva')->nullable();
            $table->string('escolaridade');
            $table->string('sexo');
            $table->string('nome_mae');
            $table->string('nome_pai');
            $table->string('email');
            $table->string('telefone');
            $table->string('endereco');
            $table->string('cep');
            $table->string('cidade');
            $table->string('uf');
            $table->integer('id_funcao_cargo')->unsigned()->nullable();
            $table->foreign('id_funcao_cargo')->references('id')->on('funcao_cargos')->onDelete('cascade');
            $table->string('caminho_rg');
            $table->string('caminho_cpf');
            $table->string('caminho_cnh');
            $table->string('caminho_curriculo');
            $table->string('caminho_diploma');
            $table->string('caminho_crm');
            $table->string('caminho_especializacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
