<?php

namespace App\Http\Controllers;

use App\FuncaoCargo;
use App\Profile;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {
        $funcao = FuncaoCargo::all();
        return view('welcome')->with('funcao',$funcao);
    }

    public function novo(Request $request)
    {
        $profile = Profile::all();
        $cpf = $request->cpf;
        $cargo = FuncaoCargo::find($request->cargo_processo);
        // return view('profiles.novo',['profile'=> $profile,'cpf'=>$cpf,'cargo'=>$cargo]);
        return view('profiles.novo',compact('profile','cpf','cargo'));
    }

    public function adiciona(Request $request)
    {
        if($request->hasFile('caminho_rg')){
            $caminhoRG = $request->caminho_rg->store('anexos'); //Salva na storage e Recupera caminho
        }
        if($request->hasFile('caminho_cpf')){
            $caminhoCPF = $request->caminho_cpf->store('anexos'); //Salva na storage e Recupera caminho
        }
        if($request->hasFile('caminho_cnh')){
            $caminhoCNH = $request->caminho_cnh->store('anexos'); //Salva na storage e Recupera caminho
        }
        if($request->hasFile('caminho_curriculo')){
            $caminhoCurriculo = $request->caminho_curriculo->store('anexos'); //Salva na storage e Recupera caminho
        }
        if($request->hasFile('caminho_diploma')){
            $caminhoDiploma = $request->caminho_diploma->store('anexos'); //Salva na storage e Recupera caminho
        }
        if($request->hasFile('caminho_crm')){
            $caminhoCRM = $request->caminho_crm->store('anexos'); //Salva na storage e Recupera caminho
        }
        if($request->hasFile('caminho_especializacao')){
            $caminhoEsp = $request->caminho_especializacao->store('anexos'); //Salva na storage e Recupera caminho
        }

        Profile::create([
            'cpf' => $request->cpf,
            'id_funcao_cargo' => $request->id_funcao_cargo,
            'nome' => $request->nome,
            'nascimento' => $request->nascimento,
            'estado_civil' => $request->estado_civil,
            'nacionalidade' => $request->nacionalidade,
            'naturalidade' => $request->naturalidade,
            'sexo' => $request->sexo,
            'cert_reservista' => isset($request->cert_reservista)?$request->cert_reservista:null, //usar isset para o que pode ser nulo
            'rg' => $request->rg,
            'orgao_emissor'=>$request->orgao_emissor,
            'pis_pasep' => $request->pis_pasep,
            'titulo_eleitor' => $request->titulo_eleitor,
            'reg_conselho' => $request->reg_conselho,
            'terapia_intensiva' => $request->terapia_intensiva,
            'nome_mae' => $request->nome_mae,
            'nome_pai' => $request->nome_pai,
            'escolaridade' => $request->escolaridade,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'cep' => $request->cep,
            'cidade' => $request->cidade,
            'uf' => $request->uf,
            'endereco' => $request->endereco,
            'caminho_rg' => $caminhoRG,
            'caminho_cpf' => $caminhoCPF,
            'caminho_cnh' => $caminhoCNH,
            'caminho_curriculo' => $caminhoCurriculo,
            'caminho_diploma' => $caminhoDiploma,
            'caminho_crm' => $caminhoCRM,
            'caminho_especializacao' => isset($caminhoEsp)?$caminhoEsp:null,
            ]);
        return redirect()->route('home');
    }

    // AVALIAÇÃO

    public function candidatos()
    {
        $profiles = Profile::all();
        return view('avaliacao.candidatos')->with('profiles',$profiles);

    }

    public function avaliar($id){
        $profiles = Profile::where ('id',$id)->first();

        if (empty($profiles)){
            return "Candidato não encontrado";
        }
        return view('avaliacao.form')->with('p',$profiles);
    }
}
