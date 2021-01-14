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
        Profile::create($request->all());
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
